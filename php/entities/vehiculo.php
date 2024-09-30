<?php

require_once "../entities/radio.php";
abstract class Vehiculo{
    private $color;
    private $marca;
    private $modelo;
    private $precio;
    private $radio;

    public function __construct(string $color, string $marca, string $modelo){
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function __tostring() :string{
        return $this->color.",".$this->marca.",".$this->modelo.",".$this->precio.",".$this->radio;
    }

    public function __get($property){
        if(property_exists($this, $property)){
            return $this->$property;
        }
    }

    public function __set($property, $value){
        if(property_exists($this, $property)){
            $this->$property = $value;
        }
    }

    public function agregarRadio(string $marca_radio, string $potencia){
        if(isset($this->radio)){
            return "Este vehiculo ya posee una radio";
        }
        else{
            $this->radio = new Radio($marca_radio, $potencia);
            return "Radio agregada correctamente";
        }        
    }

    public function cambiarRadio(string $marca_radio, string $potencia){
        if(isset($this->radio)){
            $this->radio = new Radio($marca_radio, $potencia);
            return "Radio cambiada correctamente";
        }
        else{
            return "Este vehiculo no posee radio aun";
        }        
    }

    public function agregarPrecio(int $precio){
        $this->precio = $precio;
        return 'Precio agregado correctamente';
    }

}

?>