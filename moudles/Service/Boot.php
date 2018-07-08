<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-7-3
 * Time: 下午6:13
 */

namespace moudles\service;

use Illuminate\Database\Capsule\Manager as Capsule;
use Dotenv\Dotenv;

class Boot
{
    public static function loadEnv()
    {
        // Env
        $env = new Dotenv(BASE_PATH);
        $env->load();
    }

    public static function setDebug()
    {
        // debug
        if (Config::get('debug') == "true") {
            define("DEBUG", true);
        }
    }

    public static function setVersion($version)
    {
        $System_Config['version'] = $version;
    }

    public static function setTimezone()
    {
        // config time zone
        date_default_timezone_set(Config::get('timeZone'));
    }

    /**
     *  init Db ORM
     */
    public static function bootDb()
    {
        // Init Eloquent ORM Connection
        $capsule = new Capsule;
        $capsule->addConnection(Config::getDbConfig(), 'skyssr');
        if (Config::get('enable_radius')=='true') {
            $capsule->addConnection(Config::getRadiusDbConfig(), 'radius');
        }

        if (Config::get('enable_wecenter')=='true') {
            $capsule->addConnection(Config::getWecenterDbConfig(), 'wecenter');
        }
        $capsule->bootEloquent();
    }
}