<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 鎼存梻鏁ら崗銉ュ經閺傚洣娆�

// 濡拷濞村└HP閻滎垰顣�
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');
define('BIND_MODULE','Home');
define('APP_DEBUG',True);
//纭畾搴旂敤璺緞
define('APP_PATH','./App/');
//寮曠敤褰撳墠鏂囦欢澶逛笅鐨凾hinkPHP.php鏂囦欢
require './ThinkPHP/ThinkPHP.php';

?>