<?php
class celana{
    public $model;
    public $tipe;

    public function __construct($model,$tipe)
    {
        $this->model=$model;
        $this->tipe=$tipe;
    }

    public function pant()
    {
        echo "model celana : " . $this->model . "dan memiliki tipe : " . $this->tipe;
        echo "<br>";
    }
}
class topi extends celana
{
    public function hat()
    {
        echo "topi memiliki model : " . $this->model;
        echo "<br>";
    }
}
class baju extends topi
{
    public function cloth()
    {
        echo "baju memiliki tipe : " . $this->tipe;
        echo "<br>";
    }
    public function clothes()
    {
        $this->pant();
        $this->hat();
        $this->cloth();
    }
}
$pakaian = new baju("Levis","panjang");

$pakaian->clothes();
?>