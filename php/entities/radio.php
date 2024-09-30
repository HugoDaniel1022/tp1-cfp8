<?php
class Radio{

    private $marca;
    private $potencia;
    
    public function __construct(string $marca, string $potencia){
        $this->marca = $marca;
        $this->potencia = $potencia;
    }

    public function __tostring() :string{
        return $this->marca.",".$this->potencia;
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
}

?>