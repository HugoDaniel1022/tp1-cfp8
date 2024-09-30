<?php

ini_set('display_errors', 1);

require_once "../entities/colectivo.php";

echo "----- INICIO TEST COLECTIVO ------<br>";

echo "Test colectivo1<br>";

$cole1 = new Colectivo("Negro", "Mercedes Benz", "1104");

echo $cole1."<br>";

echo $cole1->__get("color")."<br>";

$cole1->__set("color", "Gris");

echo $cole1."<br>";

echo $cole1->cambiarRadio("LG", "100W")."<br>";

echo $cole1->agregarRadio("Itachi", "200W")."<br>";

echo $cole1."<br>";

echo $cole1->agregarRadio("JVC", "150W")."<br>";

echo $cole1->cambiarRadio("Sanyo", "500W")."<br>";

echo $cole1."<br>";

$cole1->agregarPrecio(50);

echo $cole1.'<br>';

echo $cole1->__get("precio")."<br>";

echo $cole1->__get("radio")."<br>";

echo "----- FIN TEST COLECTIVO ------<br>";

?>