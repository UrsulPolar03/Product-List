<?php

class Product {

    public function __construct($sku, $name, $price) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
    }

    public function printObj() {
        return "{$this->sku}\n
                {$this->name}\n
                {$this->price}$\n";
    }

    public function __toString() {
        return $this->sku;
    }

    public function getSku() {
        return $this->sku;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getSize() {

        return $this->size;
    }

    public function getWeight() {

        return $this->weight;
    }

    public function getHeight() {

        return $this->height;
    }

    public function getWidth() {

        return $this->width;
    }

    public function getLength() {

        return $this->length;
    }

}

set_error_handler(function ($errno, $errstr, $errfile, $errline) {

    if (0 === error_reporting()) {
        return false;
    }

    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});

class Dvd extends Product {

    public function __construct($sku, $name, $price, $size) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->size = $size;
    }

    public function printObj() {
        return "{$this->sku}\n{$this->name}\n{$this->price}$\n
                {$this->size}MB\n";
    }

}

class Book extends Product {

    public function __construct($sku, $name, $price, $weight) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->weight = $weight;
    }

    public function printObj() {
        return "{$this->sku}\n
                {$this->name}\n
                {$this->price}$\n
                {$this->weight}KG\n";
    }

}

class Furniture extends Product {

    public function __construct($sku, $name, $price, $height, $width, $length) {
        $this->sku = $sku;
        $this->name = $name;
        $this->price = $price;
        $this->height = $height;
        $this->width = $width;
        $this->length = $length;
    }

    public function printObj() {
        return "{$this->sku}\n
                {$this->name}\n
                {$this->price}$\n
                Dimensions: {$this->height}x{$this->width}x{$this->length}\n";
    }

}
