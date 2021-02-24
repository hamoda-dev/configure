<?php

namespace Configure\Handler;

use Dotenv\Dotenv;

class PhpDotEnv
{

    /**
     * @var array
     */
    private array $envVariable;

    /**
     * function handler The Dot Env File And return all
     *
     * @param string $envFilePath
     * @return void
     */

    public function __construct()
    {

        $dotenv = Dotenv::createMutable("/");

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
