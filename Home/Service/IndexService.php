<?php
namespace Home\Service;
/**
 * Created by lixuan-it@360.cn
 * User: lane
 * Date: 15/8/27
 * Time: 下午4:35
 * E-mail: lixuan868686@163.com
 * WebSite: http://www.lanecn.com
 */
class IndexService{
    public static function getVersion(){
        $ret = array();
        $ret['php_version'] = PHP_VERSION;
        $model = new \Home\Model\IndexModel();;
        $ret['mysql_version'] = $model->getVersion()[0]['version'];
        return $ret;
    }

    public static function getTables(){
        $model = new \Home\Model\TestModel();;
        $ret = $model->getTables();
        return $ret;
    }
}