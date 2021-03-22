<?php
class mobiLengkap{
    public function nonton()
    {
        echo "Tv dihidupkan, Tv Mencari Chanel, Tv Menampilkan gambar";
    }
}
class MobilBMW extends mobiLengkap
{
    public function bmw()
    {
        $this->nonton();
    }
}
class MobilBMWberaksi extends MobilBMW
{
    public function HidupkanMobil()
    {
        echo "Mobil dihidupkan";
        echo "<br>";
    }
    public function MatikanMobil()
    {
        echo "Mobil dimatikan";
        echo "<br>";
    }
    public function ubahGigi()
    {
        echo "Gigi diubah";
        echo "<br>";
    }
    public function message()
    {
        $this->bmw();
        $this->HidupkanMobil();
        $this->MatikanMobil();
        $this->ubahGigi();
    }
}

$car = new MobilBMWberaksi();

$car->message();
?>