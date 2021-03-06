<?php

require_once dirname (__FILE__).'/BaseService.class.php';
require_once dirname(__FILE__).'/../dao/CityDao.class.php';

class CityService extends BaseService{

  public function __construct(){
    $this->dao = new CityDao();
  }

  public function get_cities($search, $offset, $limit, $order){
    if($search){
      return $this->dao->get_cities($search, $offset, $limit, $order);
    }else{
      return $this->dao->get_all($offset, $limit, $order);
    }
  }

public function add($city){
  //validation of account data
  if(!isset($city['name'])) throw new Exception("Name is missing! ");
  $city['created_at']=date(Config::DATE_FORMAT);
  return parent::add($city);

  }
}
?>
