<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18-7-3
 * Time: 下午6:17
 */

$System_Config['key'] = '1145141919210';			// !!! 瞎 jb 修改此key为随机字符串确保网站安全 !!!
$System_Config['debug'] =  'true';  //  正式环境请确保为 false
$System_Config['appName'] = 'ssrpanel_learning';             //站点名称
$System_Config['baseUrl'] = 'localhost:999';            // 站点地址
$System_Config['muKey'] = 'NimaQu';   // mu key 用于校验ss-go mu的请求
$System_Config['db_driver'] = 'mysql';		//数据库程序
$System_Config['db_host'] = 'localhost'; //数据库地址
$System_Config['db_database'] = 'skyssr';			//数据库名
$System_Config['db_username'] = 'root';		//数据库用户名
$System_Config['db_password'] = '2101024yty';			//用户名对应的密码


//杂项（一般不需要更改-------------------------------------------------------------
$System_Config['authDriver'] = 'cookie';   //不能更改此项
$System_Config['salt'] = '';               // 密码加密用，请留空
$System_Config['sessionDriver'] = 'cookie'; //  可选: cookie,redis
$System_Config['cacheDriver'] = 'cookie';   //  可选: cookie,redis
$System_Config['tokenDriver'] = 'db';   //  可选: db,redis
$System_Config['jump_delay']='1200';  //跳转延时,ms 1000ms=1s 不建议太长
$System_Config['theme']    = 'material';   // 主题
$System_Config['pacp_offset']='-20000';      //VPN 端口偏移
$System_Config['pacpp_offset']='-20000';
$System_Config['Speedtest_duration']='6';      //显示多长时间的测速记录
$System_Config['node_offline_warn']='true';      //节点离线设置
$System_Config['login_warn']='false';      //异地登陆提示
$System_Config['timeZone'] = 'PRC';        // PRC 天朝时间  UTC 格林时间
$System_Config['pwdMethod'] = 'sha256';       // 密码加密   可选 md5,sha256
$System_Config['db_charset'] = 'utf8';
$System_Config['db_collation'] = 'utf8_general_ci';
$System_Config['db_prefix'] = '';

#Radius设置
$System_Config['enable_radius']='false';      //是否开启Radius
