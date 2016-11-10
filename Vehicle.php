<?php

class Vehicle
{
   private $name;
   private $year;

   public function __construct($n, $y)
   {
      $this->name = $n;
      $this->year = $y;
      echo "<p>Created " . $this->name . "</p>";
   }

   function __destruct()
   {
     echo "<p>Say goodbye to " . $this->name . "</p>";
   }
   
   public function __toString()
   {
      $ans = "I am a vehicle named " . $this->name;
      return $ans;
   }
   
   public function getName(){
      return $this->name;
   }
   
   public function getYear(){
      return $this->year;
   }
   
   public function move(){
      echo "<p>The wheels are spinning </p>";
   }
   
}
?>
