<?php
  // Cucce (Prodotto)
  class House extends Product {
    private static $typology = "Cuccia";
    private $size;

    public function __construct($title, $image, $price, $size, Category $category) {
      $this->setTitle($title);
      $this->setImage($image);
      $this->setPrice($price);
      $this->setCategory($category);

      $this->setSize($size);
    }

    public function getSize() {
      return $this->size;
    }
    public function setSize($size) {
      $this->size = $size;
    }

    public function getTypology() {

      return self :: $typology;
    }
  }