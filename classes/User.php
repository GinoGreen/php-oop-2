<?php

   class User {
      private $firstname;
      private $lastname;
      private $email;
      private $password;
      private $purchasedProduct;
      protected $discountPercentage = 0;
      private $creditCard;

      function __construct($_firstname, $_lastname) {
         $this->firstname = $_firstname;
         $this->lastname = $_lastname;
      }


      public function setFirstname($_firstname) {
         $this->firstname = $_firstname;
      }
      public function setLastname($_lastname) {
         $this->lastname = $_lastname;
      }
      public function setEmail($_email) {
         $this->email = $_email;
      }
      public function setDiscountPercentage($_discountPercentage) {
         $this->discountPercentage = $_discountPercentage;
      }
      public function setCreditCard($_creditCard) {
         $this->creditCard = $_creditCard;
      }
      public function hasPurchased($_product) {
         $this->purchasedProduct = $_product;
      }


      public function getFirstname() {
         return $this->firstname;
      }
      public function getLastname() {
         return $this->lastname;
      }
      public function getEmail() {
         return $this->email;
      }
      public function getDiscountPercentage() {
         return $this->discountPercentage;
      }
      public function getCreditCard() {
         return $this->creditCard;
      }


      public function getDiscountedPrice() {
         $originalPrice = $this->purchasedProduct->getPrice();
         $discountedPrice = $originalPrice - ($originalPrice * $this->discountPercentage) / 100;
         return number_format($discountedPrice, 2, ',', '');
      }
      
   }