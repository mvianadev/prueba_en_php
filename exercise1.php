<?php

class longWord {
  public $string;
  public $large;
  public $newString;

  function __construct($string)
  {
    if(!is_string($string)){
      throw new Exception("This not a string: $string", 1);
    }
    $this->string = strval($string);
    $this->newString = explode(" ",$string);
  }

  function long(){
    
    $mapping = array_combine($this->newString, 
      array_map('strlen', $this->newString));
    
    $this->large = array_keys($mapping, max($mapping));
    
    return $this->large;
  }
}

$newWord = new longWord("esta es la palabr'a' mas larga en este string");
var_dump($newWord->long());

?>
