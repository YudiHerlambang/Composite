<!-- client.php -->

<?php
include_once 'Leaf.php';
include_once 'CompositeBad.php';

// Client code
$leaf1 = new Leaf("1");
$leaf2 = new Leaf("2");
$invalidComponent = new stdClass();  
// Objek invalid yang tidak mengimplementasikan Component.

$composite = new Composite();
$composite->add($leaf1);  
// Menambahkan leaf1 ke composite.
$composite->add($leaf2);  
// Menambahkan leaf2 ke composite.
$composite->add($invalidComponent);  
// Menambahkan objek invalid ke composite.

$composite->operation();  
// Memanggil operation() pada composite, 
// yang akan memanggil operation() 
// pada setiap anaknya dan mencetak 
// pesan kesalahan untuk objek invalid.
?>
