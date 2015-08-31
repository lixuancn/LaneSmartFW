<?php
namespace LaneSmartFW;
/**
 * Created by lixuan-it@360.cn
 * User: lane
 * Date: 15/8/27
 * Time: 下午3:30
 * E-mail: lixuan868686@163.com
 * WebSite: http://www.lanecn.com
 */
class App{
    public function init(){
        //设置头
        $this->_setHeader();
        //载入系统配置文件
        $this->_loadSysFile();
        //自动载入函数
        $this->_setAutoload();
        //设置路由
        $this->_setRoute();
    }

    /**
     * 载入系统配置文件
     */
    private function _loadSysFile(){
        $GLOBALS['config'] = require_once dirname(__FILE__).'/../config/config.php';
        require_once dirname(__FILE__).'/Function.php';
    }

    /**
     * 头
     */
    private function _setHeader(){
        header('Content-type: text/html; charset=UTF-8');
    }

    /**
     * 自动载入函数
     */
    private function _setAutoload(){
        //自动载入函数
        require_once dirname(__FILE__).'/../LaneSmartFW/Autoload.php';
        $autoload = new Autoload();
        $autoload->register();
    }

    /**
     * 设置路由
     */
    private function _setRoute(){
        $routeObj = new Route();
        $routeObj->parse();
    }
}