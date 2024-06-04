<!-- Composite.php -->

<?php
include_once 'Component.php';

// Composite class
class Composite implements Component {
    private $children = [];  
    // Array untuk menyimpan anak komponen.

    public function add($component): void {  
        // Tidak menggunakan type hinting, memungkinkan objek selain Component untuk ditambahkan.
        $this->children[] = $component;
    }

    public function remove($component): void {  
        // Tidak menggunakan type hinting, memungkinkan 
        // objek selain Component untuk dihapus.
        $index = array_search($component, $this->children);
        if ($index !== false) {
            unset($this->children[$index]);
        }
    }

    public function operation(): void {  
        // Implementasi metode operation() 
        // yang memanggil operation() pada setiap anak.
        echo "Composite operation\n";
        foreach ($this->children as $child) {
            if ($child instanceof Component) {  
                // Memeriksa apakah objek adalah 
                // instance dari Component sebelum memanggil 
                // operation().
                $child->operation();
            } else {
                echo "Error: Non-Component object found\n";  
                // Mencetak pesan kesalahan jika ditemukan 
                // objek bukan instance dari Component.
            }
        }
    }
}
?>
