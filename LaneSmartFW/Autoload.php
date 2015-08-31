<?php
namespace LaneSmartFW;
/**
 * 自动载入
 * Created by lixuan-it@360.cn
 * User: lane
 * Date: 15/8/27
 * Time: 下午3:28
 * E-mail: lixuan868686@163.com
 * WebSite: http://www.lanecn.com
 */
class Autoload{
    public function register(){
        spl_autoload_register(array($this, 'autoload'));
    }

    public function autoload($className){
        $pathArr = explode('\\', $className);
        $filename = array_pop($pathArr);
        $dir = implode(DIRECTORY_SEPARATOR, $pathArr);
        $filename = $dir . '/' . $filename . '.php';
        if(file_exists($filename)){
            require_once $filename;
        }else{
            exit('Error:'.$className.' loading Failed');
        }
    }
}