<?php

namespace pbo\marketplace;

require_once('./propertyConstant.php');

use pbo\marketplace\Produk;

class jasa {
    use Produk;

    public function payment($tipe) {
        return match ($tipe) {
            "virtual" => "Virtual Account",
            "qris" => "Qris",
            default => "hanya bisa pakai VA dan Qris"
        };
    }
}