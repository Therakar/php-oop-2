<?php 
    require_once __DIR__ . "/Products.php";

    class Cleaning extends Product {
        public $quantity;
        public $furType;
        public $fragrance;

        function __construct($animal, string $brand, $type, float $price, $image, float $quantity, string $furType, string $fragrance)
        {
            parent::__construct($animal, $brand, $type , $price , $image);

            $this->quantity = $quantity;
            $this->furType = $furType;
            $this->fragrance = $fragrance;
        }

    }
?>