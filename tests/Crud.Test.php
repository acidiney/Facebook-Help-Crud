<?php
require '../crud.class.php';
/**
 * @Author Acidiney Dias
 */

class CrudTest extends CrudClass
{
  public $data;
  public $con;

  function __construct(){
    $db = require('../db.php');
    $this->con = $db['db'];
  }

  public function TestRead(){
    if(is_array($this->read($this->con)))
      return "O Teste passou, existem campos no banco de dados!";
    return "O teste falhou";
  }

  public function TestDelete(){
    if($this->delete($this->con, 2) == true)
      return "Teste passou, o objecto foi deletado!";
    return "O teste Falhou!";
  }

  public function TestCreate(){
    $obj = [
      "title" => "Objecto de teste",
      "description" => "Descrição do objecto de teste"
    ];

    if(($this->create($this->con, $obj) == true))
        return "Teste passou, o objecto foi criado!";
    return "O teste Falhou!";
  }

  public function TestUpdate(){
    $obj = [
      "id" => 1,
      "description" => "Descrição do objecto foi atualizada!"
    ];

    if(($this->update($this->con, $obj) == true))
        return "Teste passou, o objecto foi Atualizado!";
    return "O teste Falhou!";
  }
}

/*
* As funções abaixo são simplismente para meros testes não devem ser usadas assim
*/
$test = new CrudTest();
echo $test->TestUpdate();
