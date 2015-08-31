<?php
namespace LaneSmartFW\DB;
/**
 * 数据库实例类的接口
 * Created by lixuan-it@360.cn
 * User: lane
 * Date: 15/8/27
 * Time: 下午5:57
 * E-mail: lixuan868686@163.com
 * WebSite: http://www.lanecn.com
 */
Interface DbInterface{

    public function close();

    public function query($sql);

    public function fetchAssoc($resource);

    public function select($sql);
}