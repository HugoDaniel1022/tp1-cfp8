<?php

ini_set('display_errors', 1);

require_once "../entities/radio.php";

echo "----- INICIO TEST RADIO ------<br>";

echo "Test radio1<br>";

$radio1 = new Radio("Itachi", "1000W");

echo $radio1."<br>";

echo $radio1->__get("marca")."<br>";

$radio1->__set("marca", "JVC");

echo $radio1."<br>";

echo "----- FIN TEST RADIO ------<br>";

?>