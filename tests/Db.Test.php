<?php
  require('Base.Test.php');

  class DbTest extends BaseTest{

    public $db;
    function __construct() {
      $this->db = require("../db.php");
    }

    public function TestMyConnection(){
      return "<h2>Testando minha conexão com o banco de dados: </h2> ".
      $this->expect($this->db['status'], 200, $this->db['message']);
    }
  }

// Quando for fazer teste use o PHPUnit ou qualquer outro, como sou preguiço não usei
$test = new DbTest();
echo $test->TestMyConnection();
