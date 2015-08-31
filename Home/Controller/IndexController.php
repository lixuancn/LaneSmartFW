<?php
namespace Home\Controller;
/**
 * Created by lixuan-it@360.cn
 * User: lane
 * Date: 15/8/27
 * Time: 下午4:31
 * E-mail: lixuan868686@163.com
 * WebSite: http://www.lanecn.com
 */
class IndexController{
    public function index(){
        echo 'hello world';
    }

    public function test(){
        echo 'hello 360';
    }

    public function getVersion(){
        $versionList = \Home\Service\IndexService::getVersion();
        echo 'PHP版本：' . $versionList['php_version'].'。Mysql版本：' . $versionList['mysql_version'];
    }

    public function getTables(){
        $tables = \Home\Service\IndexService::getTables();
        var_dump($tables);
    }
}