<?php

namespace Configure\Core;

class ConfigureHandler
{
    /**
     * @param $configurationDirectoryPath
     * @return array
     */
    public static function configuratinos($configurationDirectoryPath): array
    {
        // check if $configurationDirectoryPath is Directory
        if (is_dir($configurationDirectoryPath)) {

            // collect the configurtions
            return self::collectConfigurtions($configurationDirectoryPath);
        } else {

            // error
            die("Sorry Your Configuration Directory Path Is Not Correct Pleas Solve It");
        }
    }



    /**
     * function to collect all configurtions data
     * @param string $configurationDirectoryPath
     * @return array
     */

    public static function collectConfigurtions(string $configurationDirectoryPath): array
    {
        // get all files in configurations directory
        $configurationFiles = scandir($configurationDirectoryPath);

        // get the file count in the configurations directory
        $filesCount = count($configurationFiles);

        unset($configurationFiles[0]); // unset the . current dir
        unset($configurationFiles[1]); // unset teh .. up dir

        // initializes $data to store the configurations from files
        $data = [];

        /**
         * loop in files to get the configurations data
         * i start the $i from [2] because i unset the [0] & [1] in previous step
         */
        for ($i = 2; $i < $filesCount; $i++) {

            // include files and fetch the configurations and store it in $configurationsData
            $configurationsData = include("$configurationDirectoryPath/$configurationFiles[$i]");

            // merge all configurations data in $data
            $data = array_merge($data, $configurationsData);

        }

        return $data;
    }

}
