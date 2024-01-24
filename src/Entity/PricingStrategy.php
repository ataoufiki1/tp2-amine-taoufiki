<?php

interface PricingStrategy {
    public function calculatePrice($amount);
}
