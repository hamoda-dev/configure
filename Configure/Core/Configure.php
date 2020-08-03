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
     * @param $config_path
     * @param null $environment
     */
    public function __construct($config_path, $environment = null)
    {
        if($environment)
        {
            $this->configs = self::config_env($config_path."/".$environment);
        } else {
            $this->configs = self::config_env($config_path);
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