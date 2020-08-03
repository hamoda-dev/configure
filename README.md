# Hamoda-Dev/Configure

PHP Configuration library. Use to get all your app configuration from files for diffrent enviroment { development, prodection, ...}
It's Easy to use just a few steps to done with it

## installtion
install via composer :

```sh
composer require hamoda-dev/configure
```

## Configurations

1 - create json file called configure.json in your app root directory

2 - add configuration to configure.json


    {
      "config_path" : "",
      "environment" : ""
    }

  - ```"config_path" : "your directory that containe your configurations files"```
 
  if you have more than one enviroment configuration directory inside the config_path
  then you can add in 
  
  - ```"environment" : "here type your environment to load it"```
  
  if you not have then make it empty
  
  - ```"environment" : ""```
  
  ## Configurations file syntax
  
    
    <?php
      return [
        "app_url" => "localhost",
        "mysql" => [
            "host" => "127.0.0.1",
            "user" => "root",
            "pass" => "test",
            "db_name => "db_test"
        ]
      ];
      
      
   ## Uesge
   you can access all your configuration via ``` config($parm) ``` .  Accept one parametr = config that you need it
   
   from previus syntax example 
    ```config('app_url')``` the output shuld be :  ```localhost```
    if you need to deeper value just use ```.``` betwen the keys
    ``` config('mysql.host') ```  the output shuld be : ```127.0.0.1```
    <br>
    <br>
    Enjoy :)
