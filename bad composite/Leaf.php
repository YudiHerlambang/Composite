<!-- Leaf.php -->

<?php
include_once 'Component.php';

// Leaf class
class Leaf implements Component {
    private $name;

    public function __construct(string $name) {  
        // Konstruktor untuk menginisialisasi nama leaf.
        $this->name = $name;
    }

    public function operation(): void {  
        // Implementasi metode operation() 
        // yang mencetak nama leaf.
        echo "Leaf " . $this->name . " operation\n";
    }
}
?>
