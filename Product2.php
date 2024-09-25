ceer un fichier Product2.php

Créer la classe Product2 avec le même code que product1.

Puis modifier votre classe Product2 en incluant une methode statique qui verifie que ni la quantité ni le prix est nulle avant de retourner le total.

Rajouter egalement une constante € pour l’utiliser dans la méthode calculeTotal.

<?php
    

class Product2
{//PROPRIETE PAS UNE FONCTION
    private string $title;
    private float $price;
    private int $quantity;
    private const UNITE = "€";

    public function calculTotal()
    {
        if(self::verifValeur($this->price, $this->quantity)){
            return $this->price * $this->quantity . self::UNITE;
        }else{
            return "L'une des valeurs n'est pas bonne!";
        }
    }
//$quantity, $prices) PREND "DEUX ARGUMENT "    = :  bool sont type 
    static function verifValeur($prix, $quantite): bool
    {
        if($quantite > 0 && $prix > 0){
            return true;
        }else{
            return false;
        }
    }

    //J'ai les setter et getter// get permet de recupérer la données  les get et les set  en projet ce mettent toujours en bas .
    public function setPrice(float $value) : static
    {
        $this->price = $value;
        return $this;
    }
// ? MIS AVANT =  si c'estEUT ETRE car pas sure 
    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setTitle(string $value) : static
    {
        $this->title = $value;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
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
}

$commode = new Product2();
$commode->setQuantity(10);
$commode->setPrice(30);
$commode->setTitle('Commode en bois');
echo "<p>" . $commode->calculTotal() . "</p>";