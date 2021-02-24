<?php

use Configure\Handler\PhpDotEnv;

/**
 * @param string $envVariable
 * @param string|int $default
 * @return string|int
 */
function env(string $envVariable, string | int $default = ""): string | int
{
    $PhpDotEnv = new PhpDotEnv();
    $envValues = $PhpDotEnv->getEnvVariable();

    if (array_key_exists($envVariable, $envValues)) {
        return $envValues[$envVariable];
    }

    return $default;
}
