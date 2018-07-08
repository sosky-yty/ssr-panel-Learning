<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-7-4
 * Time: 上午9:47
 */

namespace moudles\service\auth;


abstract class BaseAuth
{
    abstract public function login($uid,$tm);
    abstract public function logout();
    abstract public function getUser();
}