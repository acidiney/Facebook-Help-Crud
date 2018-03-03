<?php

/**
 * @Author Acidiney Dias
 */

class CrudClass
{
  public $data;

  public function read($con) {

    /**
     * Este metodo, retona todos os dados da tabela tb_info
     * mysqli_fetch_array -> Converte os dados obtidos pela query em Array
     */

    $this->data = mysqli_query($con,'SELECT * FROM tb_info');
    return  mysqli_fetch_array($this->data);
  }

  public function delete($con, $id) {
    /**
     * Deleta um objecto especifico
     */

    $this->data = mysqli_query($con, "DELETE FROM tb_info WHERE id=$id");
    return $this->data;
  }

  public function create($con, $obj) {
    /**
     * Cria um novo objecto, pode ser melhorado esse metodo... Na documentação do php tem tudo :-)
     */

    $this->data = mysqli_query($con,"INSERT INTO
                                    tb_info(title, description)
                                    values('".$obj['title']."',
                                    '".$obj['description']."')"
                              );
   return $this->data;
  }

  public function update($con, $obj) {
    /**
     * Atualiza um registro
     */

    $this->data = mysqli_query($con,"UPDATE tb_info
                                    SET description ='".$obj['description']."'
                                    WHERE id =".$obj['id']);
   return $this->data;
  }
}
