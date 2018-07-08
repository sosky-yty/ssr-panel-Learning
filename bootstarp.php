<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-7-3
 * Time: 下午6:22
 */

use moudles\service\Boot;

define('BASE_PATH',__DIR__);
define('VERSION','learning');

require BASE_PATH.'vendor\autoload.php';
require BASE_PATH.'config\config.php';


Boot::loadEnv();
Boot::setDebug();
//Boot::setVersion(VERSION);
// config time zone
Boot::setTimezone();
// Init db
Boot::bootDb();



