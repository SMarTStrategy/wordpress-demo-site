<?php
namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'Wordpress Demo Site');

// Project repository
set('repository', 'git@github.com:SMarTStrategy/wordpress-demo-site.git');


// Shared files/dirs between deploys
set('shared_files', ['.env']);
set('shared_dirs', ['wp-content/uploads']);
set('writable_dirs', ['wp-content/uploads']);

set('allow_anonymous_stats', false);

// Hosts

set('no-assets', false);

set('writable_mode', 'chmod');
set('writable_chmod_mode', '777');


set('release_name', function() {
    return (new \DateTime())->format('YmdHis');
});

set('branch', 'master');

set('user', function () {
    return runLocally('git config --get user.name');
});

/******* HOST ********/
host('www.myfancywebsite.com')
    ->set('deploy_path', '/var/www/website')
    ->user('smartdev')
    ->forwardAgent()
;

// Tasks

desc('Deploy your project');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:update_code',
    'deploy:shared',
    'deploy:writable',
    'deploy:vendors',
    'deploy:clear_paths',
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
    'success',
]);

// [Optional] If deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');