<?php
/**
 * Ejercicio hecho por Ximo Gil y Francisco Ortolá
 */

class claseBanco
{
//Declaración de una propiedad
  public $ingresos = '';
  public $retiros = '';
  public $total = '';
  public $totaldia ='';

//Declaracion de un método

  //INGRESOS
public function setIngresos($nuevoIngreso){
  $this->ingresos=$nuevoIngreso;
  }

public function getIngresos(){
  return $this->ingresos;
  }


  //RETIROS

public function setRetiros($nuevoRetiro){
  $this->retiros=$nuevoRetiro;
  }

public function getRetiros(){
    return $this->retiros;
  }


  //TOTAL
public function setTotal($nuevoTotal){
    $this->total=$nuevoTotal;
  }

public function getTotal(){
      return $this->total;
  }


//TOTAL DIA
public function setTotalDia($nuevoTotalDia){
  $this->totaldia=$nuevoTotalDia;
  }

public function getTotalDia(){
      return $this->totaldia;
}
}
 ?>
