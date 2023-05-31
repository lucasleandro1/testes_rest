<?php

abstract class abs_rest{

  public $name_rest;#string
  public $type_rest;#string
  protected $price_rest;#float
  protected $vaga_rest;#int
  public $addr_rest;#string
  public $time_rest;#string

}

abstract class abs_food{
  protected $name_food;#string
  protected $desc_food;#string
  protected $price_food;#float
  protected $catg_food;#string
  protected $rate_food;#float



}


abstract class abs_receipt{
  protected $id_receipt;#float
  protected $pay_receipt;#string
  protected $client_receipt;#float
  protected $cpf_receipt;#float

}


?>