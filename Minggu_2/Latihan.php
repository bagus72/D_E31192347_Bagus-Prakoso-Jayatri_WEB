<?php
#1
class Laptop{
  #2
  public $pemilik, $merk;

  public function __construct( $merk, $pemilik){
    $this->pemilik = $pemilik;
    $this->merk = $merk;
  }  

  public function hidupkan_laptop(){
    #3
	return "Hidupkan laptop $this->merk punya $this->pemilik\n";
  }

  public function matikan_laptop(){
    #4
	return "Matikan laptop $this->merk punya $this->pemilik\n";
  }

  public function restart_laptop(){
    #5
	return "Matikan laptop $this->merk punya $this->pemilik, Hidupkan laptop $this->merk punya $this->pemilik\n";
  }
}
#6
$asusA = new Laptop('Asus', 'A'); 
$acerB = new Laptop('Acer', 'B'); 
$lenovoC = new Laptop('Lenovo', 'C'); 

echo($asusA->hidupkan_laptop());
echo "<br>";
echo($acerB->matikan_laptop());
echo "<br>";
echo($lenovoC->restart_laptop());
?>