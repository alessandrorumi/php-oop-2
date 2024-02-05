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
    public function setPrice($price)
    {
      $this->price = $price;
    }

    public function getCategory() {
    return $this->category;
  }

    public function setCategory($category) {
      $this->category = $category;
    }
  }

  class Category {
    private $category_name;
    private $category_icon;

    public function __construct($category_name, $category_icon) {
      $this->category_name = $category_name;
      $this->category_icon = $category_icon;
    }

    public function getCategoryName() {
      return $this->category_name;
    }

    public function setCategoryName($category_name) {
      $this->category_name = $category_name;
    }

    public function getCategoryIcon() {
      return $this->category_icon;
    }

    public function setCategoryIcon($category_icon) {
      $this->category_icon = $category_icon;
    }
  }

  // Cibo (Prodotto)
  class Food extends Product {
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

  // Cucce (Prodotto)
  class House extends Product {
    private $type;

    public function __construct($title, $image, $price, $type, Category $category) {
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