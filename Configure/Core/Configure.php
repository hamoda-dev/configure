<?php

namespace Configure\Core;

class Configure extends ConfigureHandler
{
    /**
     * @var array
     */
    private $configurations = [];

    /**
     * Configure constructor.
     * @param $configurationDirectoryPath
     * @param null $environment
     */
    public function __construct($configurationDirectoryPath, $environment = null)
    {
        if ($environment) {
            $this->configurations = self::configuratinos($configurationDirectoryPath . "/" . $environment);
        } else {
            die('Pleas Set Your Environments');
        }
    }

    /**
     * @return array
     */
    public function getConfigurations(): array
    {
        return $this->configurations;
    }

}
