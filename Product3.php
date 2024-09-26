<?php
    class Product3
        {
            private string $title;
            private float $price;
            private int $quantity;
            private const UNITE = "€";

            public function __construct(string $title, float $price, int $quantity)
            {
                $this->$title;
                $this->$price;
                $this->$quantity;
            }

            static function check($quantity, $price): bool
            {
                if($quantity > 0 && $price > 0){
                    return true;
                }else{
                    return false;
                }
            }
    
            public function calculTotal()
            {
                if(self::check($this->price, $this->quantity)){
                    return $this->price * $this->quantity . self::UNITE;
                }else{
                    return "La valeur n'est pas bonne";
                }
            }
    
            static function euro(): string
            {
                return '€';
            }

            //On mets les getter et setter après les méthode
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

        $commode = new Product3('Ikea', 10.14, 2);
        echo "<p>" . $commode->calculTotal() . "</p>";