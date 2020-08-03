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


      
   ## Uesge
   you can access all your configuration via ``` config($parm) ``` .  Accept one parametr = config that you need it
   
   from previus syntax example 
    ```config('app_url')``` the output shuld be :  ```localhost```
    if you need to deeper value just use ```.``` betwen the keys
    ``` config('mysql.host') ```  the output shuld be : ```127.0.0.1```
    <br>
    <br>
    Enjoy :)
