<?php

/**
 * function to get any configuration value
 *
 * @param $config
 * @return array|mixed
 */
function config($config)
{
    $envConf = envConfigurations();
    $appConfigurations = new Configure\Core\Configure($envConf['config_path'], $envConf['environment']);

    $appConfigurations = $appConfigurations->getConfigurations();

    $neededConfiguration = explode(".", $config);

    foreach ($neededConfiguration as $bit) {
        $appConfigurations = $appConfigurations[$bit];
    }
    return $appConfigurations;
}

/**
 * function to get configurations from configure.json
 *
 * @return mixed
 */
function envConfigurations()
{
    if (file_exists("configure.json")) {
        $envConfigurationFile = file_get_contents("configure.json");
        return json_decode($envConfigurationFile, true);
    } else {
        die("configure.json file note exist");
    }
}
