<?php

namespace pbo\marketplace;

trait Produk {
    // Property
    private string $kode;
    private string $nama;
    private int $harga;
    private int $stok;

    // Constant
    public const PAJAK = 0.11;

    // METHOD STATIC
    public function pajak() {
        return self::PAJAK * 100; //11%
    }

    //Construct destruct
    public function __construct() {
    }

    //Setter
    public function setkode($kode) {
        $this->kode = $kode;
        return $this;
    }
    public function setnama($nama) {
        $this->nama = $nama;
        return $this;
    }
    public function setharga($harga) {
        if ($harga <= 0){
            echo "Harga tidak boleh 0";
            exit();
        }
        $this->harga = $harga;
        return $this;
    }
    public function setstok($stok) {
        if ($stok <= 0){
            echo "stok tidak boleh 0";
            exit();
        }
        $this->stok = $stok;
        return $this;
    }

    //Getter
    public function getkode(){
        return $this->kode;
    }
    public function getnama(){
        return $this->nama;
    }
    public function getharga(){
        return $this->harga;
    }
    public function getstok(){
        return $this->stok;
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

?>