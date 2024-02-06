<?php

  // $products = [
  //   new Food("Crocchette Cane", "image1", "50€", "Cibo", new Category("Cane", '<i class="fa-solid fa-dog"></i>')),
  //   new Game("Pallina", "image2", "5€", "Gioco", new Category("Cane", '<i class="fa-solid fa-dog"></i>')),
  //   new House("Cuccia Grande", "image3", "30€", "Cuccia", new Category("Gatto", '<i class="fa-solid fa-cat"></i>'))
  // ];

  // Categorie
  $category_dog = new Category("Cane", '<i class="fa-solid fa-dog"></i>');
  $category_cat = new Category("Gatto", '<i class="fa-solid fa-cat"></i>');

  // Prodotti
  $product_croccantini = new Food("Croccantini", "img1", 35, "10/05/2024", $category_cat);
  $product_cuccia = new House("Cuccia per cani", "img2", 100, "100x45x40", $category_dog);
  $product_pallina = new Game("Pallina", "img3", 5, "gomma", $category_dog);

  $products = [$product_croccantini, $product_cuccia, $product_pallina];