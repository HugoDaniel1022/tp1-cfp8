<?php

ini_set('display_errors', 1);

require_once "../entities/autoClasico.php";

echo "----- INICIO TEST AUTO CLASICO ------<br>";

echo "Test auto1<br>";

$auto1 = new AutoClasico("Rojo", "Toyota", "Corolla");

echo $auto1."<br>";

echo $auto1->__get("color")."<br>";

$auto1->__set("color", "Blanco");

echo $auto1."<br>";

echo $auto1->cambiarRadio("LG", "100W")."<br>";

echo $auto1->agregarRadio("Itachi", "200W")."<br>";

echo $auto1."<br>";

echo $auto1->agregarRadio("JVC", "150W")."<br>";

echo $auto1->cambiarRadio("Sanyo", "500W")."<br>";

echo $auto1."<br>";

$auto1->agregarPrecio(50);

echo $auto1.'<br>';

echo $auto1->__get("precio")."<br>";

echo $auto1->__get("radio")."<br>";

echo "----- FIN TEST AUTO CLASICO ------<br>";

?>