<?php 
	// this file will extend ParentClass.php

	class GroceryList extends aList {
    private $item1;
    private $item2;
    private $item3;
    
    public function __construct($item1, $item2, $item3){
      $this->item1 = $item1;
      $this->item2 = $item2;
      $this->item3 = $item3;
    }
    
    public function changeFirstItem(){
      return parent::getFirstItem();
  }
    
    public function changeSecondItem(){
      return parent::getSecondItem();
    }
    
    public function changeThirdItem(){
      return parent::getThirdItem();
    }
    
    public function __toString(){
      $string = "I need to get " . $this->item1 . ", " . $this->item2 . ", and " . $this->item3;
      return $string;
    }
	}
