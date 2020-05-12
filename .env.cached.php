<?php
putenv('SYMFONY_DOTENV_VARS=WP_ENV,DB_NAME,DB_USER,DB_PASSWORD,DB_HOST,WP_HOME');

putenv('WP_ENV=development');
$_ENV['WP_ENV'] = 'development';
$_SERVER['WP_ENV'] = 'development';

define('DB_HOST', '127.0.0.1');
putenv('DB_HOST=127.0.0.1');
$_ENV['DB_HOST'] = '127.0.0.1';
$_SERVER['DB_HOST'] = '127.0.0.1';

define('DB_NAME', 'wordpress');
putenv('DB_NAME=wordpress');
$_ENV['DB_NAME'] = 'wordpress';
$_SERVER['DB_NAME'] = 'wordpress';

define('DB_PASSWORD', 'root');
putenv('DB_PASSWORD=root');
$_ENV['DB_PASSWORD'] = 'root';
$_SERVER['DB_PASSWORD'] = 'root';

define('DB_USER', 'root');
putenv('DB_USER=root');
$_ENV['DB_USER'] = 'root';
$_SERVER['DB_USER'] = 'root';

define('WP_HOME', 'http://localhost:4000');
putenv('WP_HOME=http://localhost:4000');
$_ENV['WP_HOME'] = 'http://localhost:4000';
$_SERVER['WP_HOME'] = 'http://localhost:4000';

return array (
  'WP_ENV' => 
  array (
    0 => 'development',
    1 => 'development',
  ),
  'DB_HOST' => 
  array (
    0 => '127.0.0.1',
    1 => '127.0.0.1',
  ),
  'DB_NAME' => 
  array (
    0 => 'wordpress',
    1 => 'wordpress',
  ),
  'DB_PASSWORD' => 
  array (
    0 => 'root',
    1 => 'root',
  ),
  'DB_USER' => 
  array (
    0 => 'root',
    1 => 'root',
  ),
  'WP_HOME' => 
  array (
    0 => 'http://localhost:4000',
    1 => 'http://localhost:4000',
  ),
);
