<?php 
    require_once __DIR__ . "/Products.php";

    class Food extends Product {
        public $flavor;
        public $quantity;
        public $calories;
        public $proteins;
        public $fats;
        public $fibers;
        public $allergens;

        function __construct($animal, string $brand, $type, float $price, $image, string $flavor, float $quantity, int $calories, string $proteins, string $fats, string $fibers, array $allergens)
    {
        parent::__construct($animal, $brand, $type , $price , $image);
        
        $this->flavor = $flavor; 
        $this->quantity = $quantity;
        $this->calories = $calories;
        $this->proteins = $proteins;
        $this->fats = $fats;
        $this->fibers = $fibers;
        $this->allergens = $allergens;

    }
    }
?>