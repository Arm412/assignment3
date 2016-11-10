<?php
class Motorcycle extends Vehicle
{
   public function __construct($name, $year)
   {
      parent::__construct($name, $year);
      $this->about();
   }

   function __destruct()
   {
     echo "<p>This motorcycle no longer works </p>";
     parent::__destruct();
   }
     
   public function characteristics()
   {
      echo "<p>I am Small but powerful</p>";
   }
   
   public function about(){
      $this->move();
      $this->characteristics();
      $this->yearCreated();
   }

   public function yearCreated(){
      echo "<p>" . parent::getName() . " was made in " . parent::getYear();
   }
   
   public function move()
   {
      parent::move();
      echo "<p>The wind is refreshing</p>";
   }
   
   public function __toString()
   {
      parent::__toString();
      $ans =  "I am a motorcycle named " . parent::getName();
      return $ans;
   }
}
?>
