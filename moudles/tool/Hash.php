<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-7-4
 * Time: 上午9:55
 */

namespace moudles\tool;


class Hash
{
    public static function passwordHash($key){
        $method = COokie::get('password');
        switch ($method){
            case 'md5': ;
            case 'sha256': ;
            default : ;
        }
        return $key;
    }


}