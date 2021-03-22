<?php 

class Dealer {
    public $jenisMotor;
    public $warna;
    public $merk;
    public $harga;
    public $jumlahMotor;
    public $diskon;

    public function __construct( $jenisMotor = "jenis", $warna = "warna", $merk = "merk", $harga = 0, $jumlahMotor = 0 ) {
        $this->jenis = $jenisMotor;
        $this->warna = $warna;
        $this->merk = $merk;
        $this->harga = $harga;
        $this->jumlahMotor = $jumlahMotor;
    }

    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;
    }

    public function getHarga() {
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    public function getLabel() {
        return "$this->jenis, $this->warna";
    }

    public function getInfoMotor() {
        $str = "Jenis Motor : {$this->jenis} <br> Warna : {$this->warna} <br> Merk : {$this->merk} <br> Harga : Rp ".number_format($this->getHarga(), 0, ",", ".")." <br> Jumlah Motor : {$this->jumlahMotor}";
        return $str;
    }

}

$motor1 = new Dealer("Matic", "Merah", "Honda", 28000000, 1);
$motor1->setDiskon(11);
echo $motor1->getInfoMotor();