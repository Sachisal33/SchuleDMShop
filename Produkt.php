<?php
//Definition der Klasse Produkte
class Produkt {
	//Definition der Eigenschaften name, email und password
	public string $Name;
    public int $Preis
    public array $Kategorien;
    public array $Tags;

    public function __construct(string $name, int $preis, array $kategorien, array $tags)
    {
        $this->$Name = $name;
        $this->$Preis = $preis;
        $this->$Kategorien = $kategorien;
        $this->$Tags = $tags;
    }
}

?>