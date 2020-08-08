<?php

/**
 * @param $config
 * @return array|mixed
 *
 * function to get any configuration value
 */
function config($config)
{
    $envConf = getConfigureConf();
    $appConfig = new Configure\Core\Configure($envConf['config_path'], $envConf['environment']);

    $appConfig = $appConfig->getConfigs();

    $userConf = explode(".", $config);

    foreach ($userConf as $bit) {
        $appConfig = $appConfig[$bit];
    }
    return $appConfig;
}

/**
 * @return mixed
 *
 * function to get configurations from configure.json
 */
function getConfigureConf()
{
    if (file_exists("configure.json")) {
        $confFile = file_get_contents("configure.json");
        return json_decode($confFile, true);
    } else {
        die("configure.json file note exist");
    }
}
