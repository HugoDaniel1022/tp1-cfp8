<?php

require_once "../entities/vehiculo.php";
require_once "../entities/radio.php";
class AutoNuevo extends Vehiculo{    
    public function __construct(string $color, string $marca, string $modelo, string $marca_radio, string $potencia){
        parent::__construct($color, $marca, $modelo);
        $this->agregarRadio($marca_radio, $potencia);
    }

}

?>