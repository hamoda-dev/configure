<?php


namespace Configure\Core;


class ConfigureHandler
{
    /**
     * @param $single_conf_path
     * @return array
     */
    public static function config_env($single_conf_path)
    {
        if(is_dir($single_conf_path)){
            return self::collect_data($single_conf_path);
        } else {
            die("Sorry Your Configuration Directory Path Is Not Correct Pleas Solve It");
        }
    }

    /**
     * @param $collect_path
     * @return array
     */
    public static function collect_data($collect_path)
    {

        $files_list = scandir($collect_path);
        unset($files_list[0]); // unset the . cerrent dir
        unset($files_list[1]); // unset teh .. up dir

        $data = [];
        foreach ($files_list as $file)
        {
            $inf = require_once($collect_path ."/". $file);
            $data = array_merge($data,$inf);
        }
        return $data;
    }
}