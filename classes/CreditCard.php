<?php

   class CreditCard {
      private $cardNumber;
      private $cvv;
      private $expirationMonth;
      private $expirationYear;
      private $circuit;
      
      function __construct($_cardNumber, $_cvv, $_expirationMonth, $_expirationYear) {
         $this->cardNumber = $_cardNumber;
         $this->cvv = $_cvv;
         $this->expirationMonth = $_expirationMonth;
         $this->expirationYear = $_expirationYear;
      }


      public function setCardNumber($_cardNumber) {
         $this->cardNumber = $_cardNumber;
      }
      public function setCvv($_cvv) {
         $this->cvv = $_cvv;
      }
      public function setExpirationMonth($_expirationMonth) {
         $this->expirationMonth = $_expirationMonth;
      }
      public function setExpirationYear($_expirationYear) {
         $this->expirationYear = $_expirationYear;
      }
      public function setCircuit($_circuit) {
         $this->circuit = $_circuit;
      }


      public function getCardNumber() {
         return $this->cardNumber;
      }
      public function getCvv() {
         return $this->cvv;
      }
      public function getExpirationMonth() {
         return $this->expirationMonth;
      }
      public function getExpirationYear() {
         return $this->expirationYear;
      }
      public function getCircuit() {
         return $this->circuit;
      }
   }