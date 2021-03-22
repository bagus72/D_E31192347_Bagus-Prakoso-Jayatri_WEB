<?php
#1
class Kalkulator{
  #2
  private $a1 = 1, $a2 = 5, $hasil;
  #3
  public function tambah()
  {
    $this->hasil = $this->a1 + $this->a2;
    return $this->hasil;
  }

  public function kurang()
  {
    $this->hasil = $this->a1 - $this->a2;
    return $this->hasil;
  }

  public function bagi()
  {
    $this->hasil = $this->a1 / $this->a2;
    return $this->hasil;
  }

  public function kali()
  {
    $this->hasil = $this->a1 * $this->a2;
    return $this->hasil;
  }
}
#4
$hitung = new Kalkulator();

echo $hitung -> tambah();
echo "<br/>";
echo $hitung -> kurang();
echo "<br/>";
echo $hitung -> bagi();
echo "<br/>";
echo $hitung -> kali();
echo "<br/>";