<?php
namespace Home\Model;
use LaneSmartFW\DB\Model;

/**
 * Created by lixuan-it@360.cn
 * User: lane
 * Date: 15/8/27
 * Time: 下午4:36
 * E-mail: lixuan868686@163.com
 * WebSite: http://www.lanecn.com
 */
class TestModel extends Model{
    public function __construct(){
        $this->dbConfigKey = 'DB_CONFIG2';
    }

    public function getTables(){
        $sql = 'show tables';
        $result = $this->query($sql);
        $result = $this->fetchAssoc($result);
        return $result;
    }
}