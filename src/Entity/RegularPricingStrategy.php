<?php

class RegularPricingStrategy implements PricingStrategy {
    public function calculatePrice($amount) {
        return $amount;
    }
}

class DiscountPricingStrategy implements PricingStrategy {
    public function calculatePrice($amount) {
        return $amount * 0.9; 
    }
}
