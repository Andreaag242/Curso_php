<?php
/**
*Clase base de Vehiculo del proyecto
*@author Warson
*@version 1.0 junio de 2022
*@copyright novanet s.a.s
*/
class Vehiculo{
    //atributos de la clase
    //tenga en cuenta la visibilidad de los atributos
    public int $numeroRuedas;
    private string $placa;
    protected int $numeroPuertas;
    private bool $tieneTraccion; //el vehiculo tiene tracción en las 4 ruedas
    public static string $color;
    //métodos de la clase
    //método mágico para crear la clase - método constructor

    public function __construct($numeroRuedas, $placa, $numeroPuertas, $tieneTraccion, $color)
    {
        $this->numeroRuedas = $numeroRuedas;
        $this->placa = $placa;
        $this->numeroPuertas = $numeroPuertas;
        $this->tieneTraccion = $tieneTraccion;
        self::$color = $color;
    }
    //método getter de la clase
    //return string
    public function mostrarPlaca(){
        return "La placa de su vehiculo es: ".$this->placa;
    }
    //return bool
    public function mostrarEstadoTraccion(){
        if($this->tieneTraccion){
            return 'Si tiene tracción';
        }else{
            return 'No tiene tracción';
        }
    }
    public function mostrarColor(){
        return "el color del vehiculo es: ". self::$color;
    }
    /* public function getNumeroRuedas()
    {
        return $this->numeroRuedas;
    }

    //
     //* Set the value of numeroRuedas
     //*
     //* @return  self 
    public function setNumeroRuedas($numeroRuedas)
    {
        $this->numeroRuedas = $numeroRuedas;

        return $this;
    } */
}
/* $moto = new Vehiculo(2,"vdk86a",0,false, "azul"); //instanciar la clase
echo $moto->mostrarPlaca();
echo '<br>';
echo $moto->mostrarEstadoTraccion();
echo '<br>';
echo $moto->mostrarColor(); */
//fin de la clase
/* $suzuki = new Vehiculo(4,"vdk89",2, true);
$mazda3 = new Vehiculo(4,"ggh5",4,false);
$bws = new Vehiculo(2,"sjd456",0,false);
var_dump($suzuki); */
