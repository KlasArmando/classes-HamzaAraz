<?php

class Product{
    public $merk;
    public $prijs;

    public function __construct($merk, $prijs)
    {
        $this->merk = $merk;
        $this->prijs = $prijs;

    }
}

$Product = new Product("Gucci" , "$500");

echo $Product->merk;
echo $Product->prijs;

echo nl2br("\n");



class Klant{
    public $naam;
    public $leeftijd;
    public $klantnummer;

    public function __construct($naam, $leeftijd, $klantnummer)
    {
        $this->naam = $naam;
        $this->leeftijd = $leeftijd;
        $this->klantnummer = $klantnummer;
    }
}

$Klant = new Klant("Hamza", "18", "2");

echo $Klant->naam;
echo $Klant->leeftijd;
echo $Klant->klantnummer;
?>