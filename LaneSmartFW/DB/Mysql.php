<?php
namespace LaneSmartFW\DB;

/**
 * Created by lixuan-it@360.cn
 * User: lane
 * Date: 15/8/27
 * Time: 下午3:29
 * E-mail: lixuan868686@163.com
 * WebSite: http://www.lanecn.com
 */
class Mysql implements DbInterface{

    private $_conn = null;

    public function __construct($dbConfigKey='DB_CONFIG'){
        if(is_null($this->_conn)){
            $this->_connect($dbConfigKey);
        }
    }

    private function _connect($dbConfigKey='DB_CONFIG'){
        $dbConfig = getConfig($dbConfigKey);
        $this->_conn = mysqli_connect($dbConfig['DB_HOST'], $dbConfig['DB_USERNAME'], $dbConfig['DB_PASSWORD'], $dbConfig['DB_NAME'], $dbConfig['DB_PORT']);
    }

    public function close(){
        mysqli_close($this->_getInstance());
    }

    public function query($sql){
        $result = mysqli_query($this->_conn, $sql);
        return $result;
    }

    public function fetchAssoc($resource){
        $rowList = array();
        while($row = mysqli_fetch_assoc($resource)){
            $rowList[] = $row;
        }
        return $rowList;
    }

    public function select($sql){
        $result = $this->query($sql);
        $rowList = $this->fetchAssoc($result);
        return $rowList;
    }
}