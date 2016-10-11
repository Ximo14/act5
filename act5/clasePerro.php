<?php
/**
 * Clase creada por Francisco Ortolá
 * Clase ejemplo de definición
 */
class clasePerro
{
  // Declaración de una propiedad
  public $color = 'Negro';
  public $raza = 'Pastor Aleman';
  public $altura = "1 metro";
  public $peso = 15;

  //Setter
  public function setColor($cambiarColor){
    $this->color=$cambiarColor;
  }

  public function setRaza($cambiarRaza){
    $this->raza=$cambiarRaza;
  }

  public function setAltura($cambiarAltura){
    $this->altura=$cambiarAltura;
  }

  public function setPeso($cambiarPeso){
    $this->peso=$cambiarPeso;
  }
  //Getters
  public function getColor() {
      return $this->color;
    }
  public function getRaza() {
      return $this->raza;
  }

  public function getAltura(){
    return $this->altura;
  }

  public function getPeso(){
    return $this->peso;
  }
}
?>
