Write a function that takes an array of words and smashes them together into a sentence and returns the sentence.

function smash(array $words): string {
   return join(' ', $words);
}

['hello', 'world', 'this', 'is', 'great']  =>  'hello world this is great'




Write a function get_char() / getChar() which takes a number and returns the corresponding ASCII char for that value.

function getChar($c) {
  return chr($c);
}
get_char(65)
should return:
'A'


Write function RemoveExclamationMarks which removes all exclamation marks from a given string.

function remove_exclamation_marks($string) {
   return str_replace( array( '!' ), '', $string);
}

function remove_spaces(string $s): string {
  return str_replace(' ', '', $s);
}



Complete the square sum function so that it squares each number passed into it and then sums the results together.
For example, for [1, 2, 2] it should return 9 because 1^2 + 2^2 + 2^2 = 9.

function square_sum(array $numbers) : int {
  $sum = 0;
  foreach($numbers as $number) {
    $sum += $number * $number;
  }
  return $sum;
}


Returning an array

function getSize($w, $h, $d) {
  $surface_area = 2 * ($w * $h + $w * $d + $h * $d);
  $volume = $w * $h * $d;
  return [$surface_area, $volume];
}