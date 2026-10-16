<?php

class Produk {
    // Property
    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    // Constant
    public const PAJAK = 0.11;

    //METHOD STATIC
    public function pajak() {
        return self::PAJAK * 100; //11%
    }

    public function total() {
        return $this->harga + ($produk->harga * self::PAJAK);
    }
}

$produk = new Produk();
$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

echo "Produk: ". $produk->nama;
echo "<br/>";
echo "Harga: ". $produk->harga;
echo "<br/>";
echo "Stok: ". $produk->stok;
echo "<br/>";
echo "pajak: ".$produk->pajak() ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp.". $produk->total();

?>