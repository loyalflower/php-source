<?php

global $_W, $_GPC;

cache_delete('webtoken');
cache_delete('manageid');
$_SESSION['webtoken'] = '';
$_SESSION['manageid'] = '';


echo json_encode(array('status' => 1, 'log' => '已清除缓存并退出!'));


?>