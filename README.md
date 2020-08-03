# Hamoda-Dev/Configure

PHP Configuration library. Use to get all your app configuration from files for diffrent enviroment { development, prodection, ...}
It's Easy to use just a few steps to done with it

## installtion
install via composer :

```sh
composer require hamoda-dev/configure
```

## Configurations

1 - copy this to your composer.json file

```
"scripts": {
        "configure-init": [
            "cp -r -d vendor/hamoda-dev/configure/sample/config config",
            "cp -r vendor/hamoda-dev/configure/sample/configure.json configure.json"
        ]
}
```

2 - run this command in your project to create config directory & configure.json

```sh
    composer run-script configure-init
```

now you have config directory and configure.json

#### Config Directory
containe to directory { development, production }
- inside development put your development configuration files
- inside production put your production configuration files

you can switch betwen the environments in the configure.json file

##### configure.json
```
{
  "config_path" : "config",
  "environment" : "development"
}

```
in ``` "environment" : "here you switching environment" ``` => ``` develoment ``` or ``` production ```

## Syntax 
```
<?php

    return [
        'app_url' => 'http://localhost',
        'mysql' => [
            'driver' => 'mysql',
            'url' => '',
            'host' => '127.0.0.1',
            'port' => '3306',
            'database' => 'forge',
            'username' => 'root',
            'password' => '',
            'unix_socket' => '',
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
        ]
```
## Uesge
   you can access all your configuration via ``` config($parm) ``` .  Accept one parametr = config that you need it
   
   from previus syntax example 
    ```config('app_url')``` the output shuld be :  ```http://localhost```
    if you need to deeper value just use ```.``` betwen the keys
    ``` config('mysql.host') ```  the output shuld be : ```127.0.0.1```
    <br>
    <br>
    You Can Add Any Number of configuration files an access it very easy
    
    
Enjoy :)
