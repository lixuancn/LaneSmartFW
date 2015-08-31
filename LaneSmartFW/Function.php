<?php
/**
 * Created by lixuan-it@360.cn
 * User: lane
 * Date: 15/8/27
 * Time: 下午4:17
 * E-mail: lixuan868686@163.com
 * WebSite: http://www.lanecn.com
 */
function getConfig($name){
    return $GLOBALS['config'][$name] ? : '';
}