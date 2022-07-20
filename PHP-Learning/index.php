<?php



$greeting = 'Hello World24245';



$names = ['Jeff', 'John','Mary'];

$animals = ['Monkey','Tiger', 'Giraffe', 'Bear', 'Eagle'];

$animals[] = 'Elephant';





$person = [
    'age' => 31, 
    'hair' => 'brown', 
    'career' => 'web developer'
];

$person['name'] = 'Jeffrey';

echo '<pre>';
var_dump($person);
echo '</pre>';

var_dump($person);




$task = [
    'title' => 'Finish homework', 
    'due' => 'today', 
    'assigned_to' => 'Jeffrey',
    'completed' => false
];
require 'index.view.php';
require 'functions.php';
checkAge(22);
checkAge(12);


class Task {
    public $description;

    public $completed = false; 

    public function __construct($description)
    {
        $this->description = $description; 
    }

    public function complete()
    {
        $this->completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
}

$tasks = [
    new Task('Go to the store'),
    new Task('Get groceries'),
    new Task('Make Dinner'),
];

$tasks[1]->complete();

new PDO('mysql:host=127.0.0.1;dbname=');