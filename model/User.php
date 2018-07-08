<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-7-4
 * Time: 上午10:55
 */

namespace model;


class User extends Modle
{
    protected $connection = "skyssr";
    protected $table = "user";

    public $isLogin;
    public $isAdmin;

    protected $casts = [
        "t" => 'float',
        "u" => 'float',
        "d" => 'float',
        "port" => 'int',
        "transfer_enable" => 'float',
        "enable" => 'int',
        'is_admin' => 'boolean',
        'is_multi_user' => 'int',
        'node_speedlimit' => 'float',
    ];


}