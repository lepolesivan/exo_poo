<?php
    abstract class Product4
        {
            private string $title;
            private float $price;
            private int $quantity;
            private const UNITE = "€";

            public function __construct(string $title, float $price, int $quantity)
            {
                $this->title = $title;
                $this->price = $price;
                $this->quantity = $quantity;
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

            class Meuble extends Product4
            {
                private string $couleur;

                public function setCouleur( string $couleur): static
                {
                    $this->couleur = $couleur;
                    return $this;
                }

                public function getCouleur(): string
                {
                    return $this->couleur;
                }
            }
            class Vetement extends Product4
            {
                private float $taille;

                public function setTaille($taille): static
                {
                    $this->taille = $taille;
                    return $this;
                }

                public function getTaille(): float
                {
                    return $this->taille;
                }
            }

        $commode = new Meuble('Ikea', 10.14, 2);
        $commode->setCouleur('rose');
        echo "<pre>";
        var_dump($commode);
        echo "</pre>";

        $robe = new Vetement('Ikea', 10, 2);
        $robe->setTaille(38);
        echo "<pre>";
        var_dump($robe);
        echo "</pre>";