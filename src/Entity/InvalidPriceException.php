<?php

class InvalidPriceException extends Exception {
    public function __construct($message = "Prix invalide", $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}
