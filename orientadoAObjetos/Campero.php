<?php

/**
 * Clase que hereda vehiculos
 * @author Andrea
 * @copyright 2022 Andrea Software Enterprice
 * @version 1.0 junio 2022
 */

require_once("Vehiculo.php");
class Campero extends Vehiculo{
    private int $capacidadCarga;
    public function __construct($numeroRuedas, $placa, $numeroPuertas, $tieneTraccion, $color,$capacidadCarga)
    {
        parent::__construct($numeroRuedas, $placa, $numeroPuertas, $tieneTraccion, $color);
        $this->capacidadCarga = $capacidadCarga;
    }

    public function mostrarCapacidadCarga(){
        return 'La capacidad de carga es: '.$this->capacidadCarga;
    }
}
$willis = new Campero(2,"vdk86a",0,true,"azul", 1000);

echo $willis->mostrarPlaca();
echo '<br>';
echo $willis->mostrarCapacidadCarga();