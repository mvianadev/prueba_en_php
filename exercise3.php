<?php

function isPrime($num){
  //eliminate the numbers that cannot be prime
  if($num === 0 || $num === 2 || $num === 4){
    return false;
  }
  for ($i = 2;$i < $num / 2; $i++) { 
    if($num % $i === 0){
      return false;
    }	
  }
  //returns true if the number is prime
  return true;
}

//this function returns the list of dibisible numbers
//and uses the isPrime function to return the list of divisible 
//numbers that are prime
function divisibleNumber($number){
  if(!is_numeric($number)){
    throw new Exception("only numbers are allowed", 1);
  }

  $listOfPrime = [];
  $divisibleList = [];

  //this for loop finds all numbers divisible by $number
  //and insert in a list
  for ($i=0; $i < $number + 1; $i++) { 
    if($i > 1){
      if($number % $i === 0){
	array_push($divisibleList, $i);
      }
    }
  }
  
  //this foreach checks the prime numbers of the divisible list
  foreach ($divisibleList as $value) {
    if(isPrime($value) === true){
      array_push($listOfPrime, $value);
    }
  }
  
  return ("$number is divisible by: ". implode(",",$divisibleList) . 
    " and the numbers prime are: ". implode(",",$listOfPrime));
}

print(divisibleNumber(159));

?>
