<?php
  // Gioco (Prodotto)
  class Game extends Product {
    private $type;

    public function __construct($title, $image, $price, $type,Category $category) {
      $this->setTitle($title);
      $this->setImage($image);
      $this->setPrice($price);
      $this->setCategory($category);

      $this->setType($type);
    }

    public function getType() {
      return $this->type;
    }
    public function setType($type) {
      $this->type = $type;
    }
  }