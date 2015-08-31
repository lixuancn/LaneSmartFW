<?php
namespace LaneSmartFW\DB;
/**
 * 基础Model类，所有的Model文件均继承本类
 * Created by lixuan-it@360.cn
 * User: lane
 * Date: 15/8/27
 * Time: 下午6:35
 * E-mail: lixuan868686@163.com
 * WebSite: http://www.lanecn.com
 */
class Model implements DbInterface {

    protected $dbConfigKey = null;

    private $_db = null;

    private function _getInstance(){
        if(is_null($this->_db)){
            if(is_null($this->dbConfigKey)){
                $this->_db = DB::factor();
            }else{
                $this->_db = DB::factor($this->dbConfigKey);
            }
        }
        return $this->_db;
    }

    public function close(){
        $this->_getInstance()->close();
    }


    public function query($sql){
        return $this->_getInstance()->query($sql);
    }

    public function fetchAssoc($resource){
        return $this->_getInstance()->fetchAssoc($resource);
    }

    public function select($sql){
        return $this->_getInstance()->select($sql);
    }
}