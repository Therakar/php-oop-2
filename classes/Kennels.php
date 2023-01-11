<?php 
    require_once __DIR__ . "/Products.php";

    class Kennel extends Product {
        public $material;
        public $size;

        function __construct($animal, string $brand, $type, float $price, $image, string $material, array $size)
        {
            parent::__construct($animal, $brand, $type , $price , $image);

            $this->material = $material;
            $this->size = $size;
        }
    }
?>