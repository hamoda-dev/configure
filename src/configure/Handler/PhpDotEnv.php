<?php

namespace Configure\Handler;

use Dotenv\Dotenv;

class PhpDotEnv
{

    /**
     * @var string
     */
    private string $confPath = __DIR__ . "/../../../";

    /**
     * @var array
     */
    private array $envVariable;

    /**
     * constructer load all config from .env file
     */
    public function __construct()
    {
        $dotenv = Dotenv::createMutable(realpath($this->confPath));

        $this->envVariable = $dotenv->load();
    }

    /**
     * @return array
     */
    public function getEnvVariable(): array
    {
        return $this->envVariable;
    }
}
