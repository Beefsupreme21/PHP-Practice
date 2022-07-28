<?php

// Write a function that takes an array of words and smashes them together into a sentence and returns the sentence.

function smash(array $words): string {
   return join(' ', $words);
}

// ['hello', 'world', 'this', 'is', 'great']  =>  'hello world this is great'




// Write a function get_char() / getChar() which takes a number and returns the corresponding ASCII char for that value.

function getChar($c) {
  return chr($c);
}
// get_char(65) should return: 'A'




// Write function RemoveExclamationMarks which removes all exclamation marks from a given string.

function remove_exclamation_marks($string) {
   return str_replace( array( '!' ), '', $string);
}

function remove_spaces(string $s): string {
  return str_replace(' ', '', $s);
}

// Remove n exclamation marks in the sentence from left to right. n is positive integer.
function remove(string $s, int $n): string {
  return preg_replace('/!/', "", $s, $n);
}



// Complete the square sum function so that it squares each number passed into it and then sums the results together.
// For example, for [1, 2, 2] it should return 9 because 1^2 + 2^2 + 2^2 = 9.

function square_sum(array $numbers) : int {
  $sum = 0;
  foreach($numbers as $number) {
    $sum += $number * $number;
  }
  return $sum;
}

// Write a function that accepts an integer n and a string s as parameters, and returns a string of s repeated exactly n times.
function repeatStr($n, $str) {
  return str_repeat($str, $n);
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


// Given an array of integers as strings and numbers, return the sum of the array values as if all were numbers.

function sum_mix($a) {
  return array_sum($a);
  
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