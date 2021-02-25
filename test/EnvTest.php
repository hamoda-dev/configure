<?php

namespace Test;

use PHPUnit\Framework\TestCase;

class EnvTest extends TestCase
{
    /**
     * @test
     */
    public function canGetConfigFromEnvFile()
    {
        $this->assertEquals(env('APP_NAME'), 'confgiure');
    }

    /**
     * @testdox return defalut value where not found in env file
     * @test
     */
    public function canReturnDefaultValue()
    {
        $this->assertEquals(env('DEMO_TEST', 'demoapp'), 'demoapp');
    }

    /**
     * @testdox return empty string where not found in env file and not pass defalut value in env function
     * @test
     */
    public function canReturnEmptySting()
    {
        $this->assertEquals(env('DEMO_TEST'), '');
    }
}
