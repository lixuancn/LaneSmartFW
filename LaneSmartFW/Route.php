<?php
namespace LaneSmartFW;
/**
 * 路由
 * Created by lixuan-it@360.cn
 * User: lane
 * Date: 15/8/27
 * Time: 下午3:29
 * E-mail: lixuan868686@163.com
 * WebSite: http://www.lanecn.com
 */
class Route{
    /**
     * 分析URL
     */
    public function parse(){
        $pathInfo = !empty($_SERVER['PATH_INFO']) ? explode('/', $_SERVER['PATH_INFO']) : array();
        $appName = !empty($pathInfo[1]) ? $pathInfo[1] : getConfig('DEFAULT_APP_NAME');
        $className = !empty($pathInfo[2]) ? $pathInfo[2] : getConfig('DEFAULT_CONTROLLER');
        $methodName = !empty($pathInfo[3]) ? $pathInfo[3] : getConfig('DEFAULT_METHOD');
        $c = $appName . '\Controller\\' . $className.'Controller';
        $obj = new $c();
        $obj->$methodName();
    }
}