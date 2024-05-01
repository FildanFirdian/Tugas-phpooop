<?php

require_once 'animal.php';

$sheep = new Animal("Shaun");

echo "Nama : " . $sheep->nama; echo "<br>";
echo "kaki : " . $sheep->kaki; echo "<br>";
echo "Cold blooded: " . $sheep->cold_blooded; echo "<br>";

require_once('Ape.php');
require_once('Frog.php');

$sungokong = new Ape("Buduk"); echo "<br>";
$kodok = new Frog("Kera Sakti");

echo "Nama : " . $sungokong->nama; echo "<br>";
echo "kaki : " . $sungokong->kaki; echo "<br>";
echo "Cold blooded : " . $sungokong->cold_blooded; echo "<br>";
echo "Yell : ";
 $sungokong->yell(); echo "<br>" . "<br>";

echo "Nama : " . $kodok->nama; echo "<br>";
echo "kaki : " . $kodok->kaki; echo "<br>";
echo "Cold blooded: " . $kodok->cold_blooded; echo "<br>";
echo "Jump : "; $kodok->jump(); echo "<br>";
?>