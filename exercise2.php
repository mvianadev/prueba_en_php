<?php 

$votes1 = [1,2,1,2,1,1,1,2,1];
$votes2 = ["apple","oragen","banana","banana","apple","banana"];
$votes3 = [null, 0, "apple", "apple", null, false];

function mostVoted($votes){
  $votes = array_values(array_filter($votes));
  $count = count($votes);
  if(!is_array($votes)){
    throw new Exception("Only Arrays are allowed.", 1);
  }
  $mostCurrent = array_count_values($votes);
  ksort($mostCurrent);
  foreach ($mostCurrent as $key => $value) {
    if($value >= $count / 2){
      $result = "$key: is the most voted and appears: $value <br>";
    }
  }
  return $result;
}

print(mostVoted($votes1));
print(mostVoted($votes2));
print(mostVoted($votes3));
?>
