<?php

require "vendor/autoload.php";

//echo "<pre>";
//print_r(\Configure\Core\ConfigureHandler::configEnv('config/development'));
//echo "</pre>";
//echo "</br>";
//print_r(\Configure\Core\ConfigureHandler::configEnv('config/production'));

echo config('app_name');

echo config('mysql.host');
//echo "<pre>";
//print_r(\Configure\Core\ConfigureHandler::collectConfigurtions('config/production'));
//echo "</pre>";
//
//echo "============54353453453453453========";
//
//echo "<pre>";
//print_r(\Configure\Core\ConfigureHandler::collectConfigurtions('config/production'));
//echo "</pre>";