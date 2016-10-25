<?php
/**

 */
class ia
{

  // Declaración de una propiedad
  public $fila = '3';
  public $columna = '0';

  // Declaración de un método
  public function getfila() {
      $this->fila = rand (1,3);
      return $this->fila;
  }
  public function getcolumna() {
      $this->columna = rand (1,3);
      return $this->columna;
  }
}

?>
