<?php

namespace Configure\Core;

class Configure extends ConfigureHandler
{
    /**
     * @var array
     */
    private $configs = [];

    /**
     * Configure constructor.
     * @param $configPath
     * @param null $environment
     */
    public function __construct($configPath, $environment = null)
    {
        if ($environment) {
            $this->configs = self::configEnv($configPath . "/" . $environment);
        } else {
            $this->configs = self::configEnv($configPath);
        }
    }

    /**
     * @return array
     */
    public function getConfigs()
    {
        return $this->configs;
    }
}
