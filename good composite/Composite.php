<!-- Composite.php -->

<?php
include_once 'Component.php';

// Composite class
class Composite implements Component {
    private $children = [];  
    // Array untuk menyimpan anak komponen.

    public function add(Component $component): void {  
        // Metode untuk menambahkan komponen ke dalam array children.
        $this->children[] = $component;
    }

    public function remove(Component $component): void {  
        // Metode untuk menghapus komponen dari array children.
        $index = array_search($component, $this->children);
        if ($index !== false) {
            unset($this->children[$index]);
        }
    }

    public function operation(): void {  
        // Implementasi metode operation() yang memanggil operation() 
        // pada setiap anak.
        echo "Composite operation\n";
        foreach ($this->children as $child) {
            $child->operation();
        }
    }
}
?>
