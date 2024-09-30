<?php

require_once "../entities/vehiculo.php";
final class Colectivo extends Vehiculo{
    
    public function __construct(string $color, string $marca, string $modelo){
        parent::__construct($color, $marca, $modelo);
    }
}

?>