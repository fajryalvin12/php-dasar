<?php 
    class Product {
        public $name;
        public $price;
        public $quantity;

        public function __construct($name, $price, $quantity)
        {
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
        }

        public function getTotalPrice() {
            return $this->price * $this->quantity;
        }
    }

    // $cart1 = new Product("iPhone 16", 2500, 2);
    // $cart2 = new Product("Samsung S24", 1700, 4);
    // $cart3 = new Product("Asus Notebook Series", 4000, 1);

    // echo "List of goods : " . $cart1->name . ", " . $cart2->name . ", " . $cart3->name .  "<br>"; 
    // echo "Total price : " . $cart1->getTotalPrice() + $cart2->getTotalPrice() + $cart3->getTotalPrice();

    $cart = [
        new Product("iPhone 16", 2500, 2),
        new Product("Samsung S24", 1700, 4),
        new Product("Asus Notebook Series", 4000, 1)
    ];

    foreach($cart as $product) {
        echo "List of goods : " . $product->name . "<br>";
    }

    $totalPrice = 0;
    foreach ($cart as $price) {
        $totalPrice += $price->getTotalPrice();
    }

    echo "Total Price : " . number_format($totalPrice, 2)
?>