# Wordpress demo site

```shell
$ composer install
```

```shell
$ docker run -p 3306:3306 --name wordpress -e MYSQL_DATABASE=wordpress -e MYSQL_ROOT_PASSWORD=root -d mysql:5.7
```

```shell
$ php -S 0.0.0.0:4000
```
