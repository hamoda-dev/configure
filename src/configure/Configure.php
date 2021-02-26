<?php

namespace Configure;

use Exception;

class Configure
{

    /**
     * @var string
     */
    private string $configDirPath = __DIR__ . "/../../config";

    /**
     * function return all configuratinos
     * @return array
     */
    public function configuratinos(): array
    {
        // check if $configDirPath is Directory
        if (is_dir(realpath($this->configDirPath))) {
            // collect the configurtions
            return self::collectConfigurtions(realpath($this->configDirPath));
        } else {
            throw new Exception('Your Config Path Is Not Valid');
        }
    }

    /**
     * function to collect all configurtions data
     * @param string $configDirPath
     * @return array
     */

    public static function collectConfigurtions(string $configDirPath): array
    {
        // get all files in configurations directory
        $configFiles = scandir($configDirPath);

        // get the file count in the configurations directory
        $filesCount = count($configFiles);

        unset($configFiles[0]); // unset the . current dir
        unset($configFiles[1]); // unset teh .. up dir

        // initializes $data to store the configurations from files
        $data = [];

        /**
         * loop in files to get the configurations data
         * i start the $i from [2] because i unset the [0] & [1] in previous step
         */
        for ($i = 2; $i < $filesCount; $i++) {

            // include files and fetch the configurations and store it in $configurationsData
            $configurationsData = include("$configDirPath/$configFiles[$i]");

            // merge all configurations data in $data
            $data = array_merge($data, $configurationsData);

        }

        return $data;
    }

}
