<?php

class ProduitFactory {
    public static function createProduit($type) {
        if ($type == "Type1") {
            return new ProduitType1();
        } elseif ($type == "Type2") {
            return new ProduitType2();
        }
        
    }
}
