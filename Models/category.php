<?php
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