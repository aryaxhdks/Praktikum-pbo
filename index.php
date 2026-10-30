<?php

//
require('./method-static.php');

use pbo\marketplace\Produk;

//Object
$produk = new Produk('P001', 'Laptop', 1000000, 5);

//Hasil
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