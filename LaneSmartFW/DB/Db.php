<?php
namespace LaneSmartFW\DB;
/**
 * 数据工厂
 * Created by lixuan-it@360.cn
 * User: lane
 * Date: 15/8/27
 * Time: 下午3:29
 * E-mail: lixuan868686@163.com
 * WebSite: http://www.lanecn.com
 */
class Db{
    public static function factor($dbConfigKey='DB_CONFIG'){
        //根据参数选择加载不同的数据库配置
        $dbType = strtolower(getConfig($dbConfigKey)['DB_TYPE']);
        switch($dbType){
            case 'mysql':
                $className = 'Mysql';
                break;
            default:
                exit('Error：Database Type');
        }
        $className = 'LaneSmartFW\DB\\'.$className;
        return new $className($dbConfigKey);
    }
}