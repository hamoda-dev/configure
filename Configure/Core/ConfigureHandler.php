<?php

namespace Configure\Core;

class ConfigureHandler
{
    /**
     * @param $singleConfPath
     * @return array
     */
    public static function configEnv($singleConfPath)
    {
        if (is_dir($singleConfPath)) {
            return self::collectData($singleConfPath);
        } else {
            die("Sorry Your Configuration Directory Path Is Not Correct Pleas Solve It");
        }
    }

    /**
     * @param $collectPath
     * @return array
     */
    public static function collectData($collectPath)
    {

        $filesList = scandir($collectPath);
        unset($filesList[0]); // unset the . cerrent dir
        unset($filesList[1]); // unset teh .. up dir

        $data = [];
        foreach ($filesList as $file) {
            $inf = require_once($collectPath . "/" . $file);
            $data = array_merge($data, $inf);
        }
        return $data;
    }
}
