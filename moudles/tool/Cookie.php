<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-7-4
 * Time: 上午9:55
 */

namespace moudles\tool;


class Cookie
{
    public static function set($arg,$time){
        foreach($arg as $key => $value){
            setcookie($key,$value,$time,'/');
        }
    }

    public static function setwithdomain($arg,$time,$domain){
        foreach($arg as $key => $value){
            setcookie($key,$value,$time,'/',$domain);
        }
    }

    public static function get($key){
        if(isset($_COOKIE[$key])){
            return $_COOKIE[$key];
        }
        return "";
    }
}