<?php
    class Product
    {
        public string $title;

        public float $price;

        public int $quantity;

        public float $total;

        function totalPrice() :float
        {
            return $this->total = $this->price * $this->quantity;
        }
    }

    $commode = new Product();
    $chaise = new Product();

    $commode->title = 'ikea';
    $commode->price = 50.02;
    $commode->quantity = 10;
    $commode->totalPrice();

    $chaise->title = 'ikea';
    $chaise->price = 20;
    $chaise->quantity = 2;
    $chaise->totalPrice();

    echo "<p>Les commodes " . $commode->title . " coûtent au total " . $commode->total . "</p>";

    echo "<p>Les chaîses " . $chaise->title . " coûtent au total " . $chaise->total . "</p>";