<?php
#PRIVATE
class Tablet{
    public $merk;
    public $camera;
    public $memory;

    public function __construct($merk,$camera,$memory)
    {
        $this->merk=$merk;
        $this->camera=$camera;
        $this->memory=$memory;
    }
}

class handphone extends Tablet
{
    private function beli_handphone()
    {
        echo "handphone dengan merk : " . $this->merk . ", camera : " . $this->camera . " dan memory : " . $this->memory;
    }
}

$handphone_baru = new handphone("Samsung","8mp","32GB");
$handphone_baru->beli_handphone();
?>