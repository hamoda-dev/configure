<?php

use Configure\Configure;
use Configure\PhpDotEnv;

/**
 * function to get the env variable form .env file
 * 
 * @param string $envVariable
 * @param string|int $default
 * @return string|int
 */
function env(string $envVariable, string | int $default = ""): string | int
{
    $phpDotEnv = new PhpDotEnv();
    $envValues = $phpDotEnv->getEnvVariable();

    if (array_key_exists($envVariable, $envValues)) {
        return $envValues[$envVariable];
    }

    return $default;
}


/**
 * function to get any configuration value
 *
 * @param string $config
 * @return int|string|float
 */
function config(string $config):int | string | float
{
    $appConfigurations = new Configure();

    // get configurations 
    $appConfigurations = $appConfigurations->configuratinos();

    // explode the $config user input 
    $neededConfiguration = explode(".", $config);

    // loop to filter configuration to get config value
    foreach ($neededConfiguration as $bit) {
        $appConfigurations = $appConfigurations[$bit];
    }
    return $appConfigurations;
}
