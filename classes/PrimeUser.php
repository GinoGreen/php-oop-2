<?php

   require_once __DIR__ . '/User.php';

   class PrimeUser extends User {

      function __construct() {
         $this->discountPercentage = 27;
      }

      public function setDiscountPercentage($_discount) {
         $this->discount += $_discount;
      }
   }