<?php

    /**
     * @param $config
     * @return array|mixed
     *
     * function to get any configuration value
     */
    function config($config)
    {
        $env_conf = getConfigureConf();
        $app_config = new Configure\Core\Configure($env_conf['config_path'], $env_conf['environment']);

        $app_config = $app_config->getConfigs();

        $user_conf = explode(".",$config);

        foreach ($user_conf as $bit)
        {
            $app_config = $app_config[$bit];
        }
        return $app_config;
    }

    /**
     * @return mixed
     *
     * function to get configurations from configure.json
     */
    function getConfigureConf()
    {
        if(file_exists("configure.json"))
        {
            $conf_file = file_get_contents("configure.json");
            return json_decode($conf_file, true);
        } else {
            die("configure.json file note exist");
        }
    } 
