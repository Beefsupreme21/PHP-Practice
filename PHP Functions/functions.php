Write a function that takes an array of words and smashes them together into a sentence and returns the sentence.

function smash(array $words): string {
   return join(' ', $words);
}

['hello', 'world', 'this', 'is', 'great']  =>  'hello world this is great'