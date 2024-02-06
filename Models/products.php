<?php

  class Product {
    private $title;
    private $image;
    private $price;
    private $category;

    public function __construct($title, $image, $price, Category $category) {
      $this->setTitle($title);
      $this->setImage($image);
      $this->setPrice($price);
      $this->setCategory($category);
    }

    public function getTitle() {
      return $this->title;
    }
    public function setTitle($title) {
      $this->title = $title;
    }

    public function getImage() {
      return $this->image;
    }
    public function setImage($image)
    {
      $this->image = $image;
    }

    public function getPrice() {
      return $this->price;
    }
    public function setPrice($price) {
      if ($price <= 0) {
        throw new Exception("Il prezzo deve essere > 0");
      }
      $this->price = $price;
    }

    public function getCategory() {
    return $this->category;
    }

    public function setCategory($category) {
      $this->category = $category;
    }
  }