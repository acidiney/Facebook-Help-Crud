<?php
class  BaseTest{

  public function expect($value, $expect, $message = null) {
    if($value == $expect)
      return "Teste passou!";
    else {
      if($message != null)
        return $message.', o teste falhou!';
     return "Teste não passou!";
   }
 }
}
