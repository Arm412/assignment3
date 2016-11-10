<?php
	// This is the file for the parent class

	class List{
	  
	  private $item1;
    private $item2;
    private $item3;
    
		public function __construct($item1, $item2, $item3){
		  $this->item1 = $item1;
      $this->item2 = $item2;
      $this->item3 = $item3;
    }
    
    public function getFirstItem(){
      return $this->item1;
    }
    
    public function getSecondItem(){
      return $this->item2;
    }
    
    public function getThirdItem(){
      return $this->item3;
    }
    
    public function __toString(){
      $string = "I have a list with " . $this->item1 . ", " . $this->item2 . ", and " . $this->item3;
      return $string;
    }
  }
