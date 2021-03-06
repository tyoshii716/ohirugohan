<?php

require_once 'system/Ohirugohan/Input.php';

class Ohirugohan {

  public $input;

  public function __construct() {
    $this->input = new Ohirugohan_Input();
  }
  public function __destruct() {}

  protected function model ( $name ) {

    require_once dirname(__FILE__)."/../model/{$name}.php";
    $this->$name = new $name();
  }

  protected function database ( $key = 'common' ) {
    require_once dirname(__FILE__)."/../config/database.php";

    $dbs = sprintf( '%s:host=%s;dbname=%s',
      $_database[$key]['driver'],
      $_database[$key]['host'],
      $_database[$key]['dbname']
    );

    $this->db = new PDO( $dbs, $_database[$key]['user'], $_database[$key]['passwd'] );
  }
}
