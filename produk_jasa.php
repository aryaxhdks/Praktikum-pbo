<?php

//
require('./jasa.php');

use pbo\marketplace\jasa;

//Object
$produk = new jasa();

$produk->setkode('P001')
        ->setnama('Laptop')
        ->setharga(1000000)
        ->setstok(5);

//Hasil
echo "Produk: ". $produk->getnama();
echo "<br/>";
echo "Harga: ". $produk->getharga();
echo "<br/>";
echo "Stok: ". $produk->getstok();
echo "<br/>";
echo "pajak: ".$produk->pajak() ."%";
echo "<br/>";
echo "<br/>";
echo "Total harga setelah pajak: Rp.". $produk->total();

echo "<br/>";
echo "<br/>";
echo "Metode Pembayaran: ". $produk->payment('qris');

?>