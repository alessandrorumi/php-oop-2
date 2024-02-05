<?php

  class Product {
    private $title;
    private $image;
    private $price;

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

    public function __construct($title, $image, $price, $type) {
      $this->setTitle($title);
      $this->setImage($image);
      $this->setPrice($price);

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

    public function __construct($title, $image, $price, $type) {
      $this->setTitle($title);
      $this->setImage($image);
      $this->setPrice($price);

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
  class Doghouse extends Product {
    private $type;

    public function __construct($title, $image, $price, $type) {
      $this->setTitle($title);
      $this->setImage($image);
      $this->setPrice($price);

      $this->setType($type);
    }

    public function getType() {
      return $this->type;
    }
    public function setType($type) {
      $this->type = $type;
    }
  }

  $category = new Category("Cane", '<i class="fa-solid fa-dog"></i>');

  $product = new Product("Guybrush", "image1", "10€", $category );
  var_dump($product);

  echo "<br>";

  echo "Product: " . $product->getTitle();
  echo "<br>";
  echo "Image: " . $product->getImage();
  echo "<br>";
  echo "Price: " . $product->getPrice();
  echo "<br>";
  echo "Categoria: " . $product->getCategory()->getCategoryName();
?>