<?php
// Complete the square sum function so that it squares each number passed into it and then sums the results together.
// For example, for [1, 2, 2] it should return 9 because 1^2 + 2^2 + 2^2 = 9.
function square_sum(array $numbers) : int {
  $sum = 0;
  foreach($numbers as $number) {
    $sum += $number * $number;
  }
  return $sum;
}


// Combining a for each statement with an if statement
function positive_sum($numbers) {
  $sum = 0;
  foreach($numbers as $number) {
    if ($number > 0){
      $sum += $number;
      }
    }
  return $sum;
}

// Returning an array
function getSize($w, $h, $d) {
  $surface_area = 2 * ($w * $h + $w * $d + $h * $d);
  $volume = $w * $h * $d;
  return [$surface_area, $volume];
}


function sum_mix2($a) {
  $sum = 0;
  foreach($a as $num) {
    $sum += (int) $num;
  }
  return $sum;
}


function shark(int $pontoonDistance, int $sharkDistance, int $youSpeed, int $sharkSpeed, bool $dolphin): string {
  if ($dolphin) {
    $sharkSpeed *= 0.5;
  }
  $sharkPathTime = $sharkDistance / $sharkSpeed;
  $youPathTime = $pontoonDistance / $youSpeed;
  return $youPathTime < $sharkPathTime ? 'Alive!' : 'Shark Bait!';
}



function how_much_i_love_you(int $nb_petals): string {
  $arr = [
    '1' => 'I love you',
    '2' => 'a little',
    '3' => 'a lot',
    '4' => 'passionately',
    '5' => 'madly',
    '6' => 'not at all'
  ];
  
  while ($nb_petals > 6) {
    $nb_petals = $nb_petals - 6;
  }
  
  return $arr[$nb_petals];
}

