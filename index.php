<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>php-oop-2</title>
</head>
<body>
  
</body>
</html>

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

  $products = [
    new Food("Crocchette Cane", "image1", "50€", "Cibo", new Category("Cane", '<i class="fa-solid fa-dog"></i>')),
    new Game("Pallina", "image2", "5€", "Gioco", new Category("Cane", '<i class="fa-solid fa-dog"></i>')),
    new House("Cuccia Grande", "image3", "30€", "Cuccia", new Category("Gatto", '<i class="fa-solid fa-cat"></i>'))
  ];

  foreach ($products as $product) {
    echo "Product: " . $product->getTitle();
    echo "<br>";
    echo "Image: " . $product->getImage();
    echo "<br>";
    echo "Price: " . $product->getPrice();
    echo "<br>";
    echo "Type: " . $product->getType();
    echo "<br>";
    echo "Category: " . $product->getCategory()->getCategoryName();
    echo "<br>";
    echo "Icon: " . $product->getCategory()->getCategoryIcon();
    echo "<hr>";
  }
?>