<?php

namespace pbo\marketplace;

class Produk {
    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    public const PAJAK = 0.11;

    // METHOD STATIC
    public function pajak() {
        return self::PAJAK * 100; //11%
    }

    //Construct destruct
    public function __construct($kode, $nama, $harga, $stok) {
        $this->kode = $kode;
        $this->nama = $nama;
        $this->harga = $harga;
        $this->stok = $stok;
    }

    public function total() {
        return $this->harga + ($this->harga * self::PAJAK);
    }
}

?>