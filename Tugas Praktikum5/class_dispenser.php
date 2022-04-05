<?php
class Dispenser{
    protected $volume;
    protected $harga;
    const VOLUME_GELAS = 500;
    public $nama;

    public function __construct($nama, $volume, $harga){
        $this->nama = $nama;
        $this->volume = $volume;
        $this->harga = $harga;

        echo $this->nama ." :";
        echo "<br>- Volume dari galon tersebut adalah " .$this->volume ." ML";
        echo "<br>- Pergelas seharga Rp." .$this->harga;
    }
    public function volume(){
        return "<br>- Sasa membeli segelas air dengan volume " .self::VOLUME_GELAS ." ML";
    }
    public function hasilAkhir(){
        $hasil = $this->volume-self::VOLUME_GELAS;
        echo "<br>- Volume dari galon sekarang ialah " .$hasil ." ML";
    }
}

$Sasa = new Dispenser("Le Minerale", 2000, 4000);
echo $Sasa->volume();
echo $Sasa->hasilAkhir();
?>