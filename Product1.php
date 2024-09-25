<?php
    class Product1
    {
        private string $title;

        private float $price;

        private int $quantity;

        public function setTitle(string $title) : static 
    {
        $this->title = $title;
        return $this;
    }

    public function getTitle() : ?string
    {
        return $this->title;
    }

    public function setPrice(float $price) : static
    {
        $this->price = $price;
        return $this;
    }

    public function getPrice() : ?float
    {
        return $this->price;
    }

    public function setQuantity(int $quantity) : static
    {
        $this->quantity = $quantity;
        return $this;
    }

    public function getQuantity() : ?int
    {
        return $this->quantity;
    }

    public function getTotalPrice() : ?float
    {
        return $this->getPrice() * $this->getQuantity();
    }

    }

    $commode = new Product1();
    $chaise = new Product1();

    $commode->setTitle('Ikea');
    $commode->setPrice(10.14)->setQuantity(2);

    $chaise->setTitle('Ikea')->setPrice(20.50)->setQuantity(5);

    echo "<p>Les commodes d'" . $commode->getTitle() . " coûtent " . $commode->getPrice() . " et au total cela fait " . $commode->getTotalPrice() . "</p>";

    echo "<p>Les chaîses d'" . $chaise->getTitle() . " coûtent " . $chaise->getPrice() . " et au total cela fait " . $chaise->getTotalPrice() . "</p>";
