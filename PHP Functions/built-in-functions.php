<?php

// Write a function that accepts an integer n and a string s as parameters, and returns a string of s repeated exactly n times.
function repeatStr($n, $str) {
  return str_repeat($str, $n);
}

// Write a function that takes an array of words and smashes them together into a sentence and returns the sentence.
function smash(array $words): string {
    return join(' ', $words);
 }
 // ['hello', 'world', 'this', 'is', 'great']  =>  'hello world this is great'




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
 

  // Write a function get_char() / getChar() which takes a number and returns the corresponding ASCII char for that value.
function getChar($c) {
    return chr($c);
  }
  // get_char(65) should return: 'A'


  // In this kata, we will make a function to test whether a period is late.
function periodIsLate($last, $today, $cycleLength) {
    return ((date_diff($today, $last)->days) > $cycleLength);   
  }
  
  
  // Calculator
  function calculator($a, $b, $sign) {
    if(!is_numeric($a) || is_string($a) || !is_numeric($b) || is_string($b)) return "unknown value";
      switch($sign){
        case '+' : return $a + $b;
        case '-' : return $a - $b;
        case '/' : return $a / $b;
        case '*' : return $a * $b;
        default: return "unknown value";
      }
    }
  
  
  // Given an array of integers as strings and numbers, return the sum of the array values as if all were numbers.
  
  function sum_mix($a) {
    return array_sum($a);
  }
  
  
  function DNA_strand($dna) {
    return strtr($dna, 'ACGT', 'TGCA');
  }