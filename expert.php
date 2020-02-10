<?php
// === Exercise 1 === >>> Errors: Function was not called. Debugging said "undefined variable" on line 11. Solution: variable $x defined by adding a parameter in the function call

function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;
}
new_exercise(1);

// === Exercise 2 === >>> Errors: When breaking the 'week' array as a point, '$week' indicates the array numbers. '1' will display Tuesday. Solution: echo '[0]' because it's the first element of the array

new_exercise(2);
$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0]; // key changed to O instead of 1

echo $monday;

// === Exercise 3 === >>> Errors: - 'Expression result is not used anywhere'. Solution: Wrong double quotes

new_exercise(3);
$str = "Debugged ! Also very fun"; // double quotes changed
echo substr($str, 0, 10);

// === Exercise 4 === Solution: & enables the array to be modified
new_exercise(4);

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);

// === Exercise 5 === >>>
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array

new_exercise(5);

$arr = [];
for ($letter = 'a'; $letter <= 'z' && $letter != "aa"; $letter++) {
    array_push($arr, $letter);

}
print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array

// === Final exercise === >>> Solution: function RandomGenerate deleted because it was not called
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!

new_exercise(6);
$arr = [];


function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    foreach($params as &$param) {
        if ($param == "") {
            $param = randomHeroName();
        }
    }
    echo implode($params, " - ");
}

function randomHeroName()
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"]; // semicolon was missing
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[rand(0,count($heroes))][rand(0, 10)];

    echo $randname;
}

echo "Here is the name: " . combineNames();

new_exercise(7);
function copyright(int $year) {
    return "&copy; $year BeCode";
}
//print the copyright
copyright(date('Y'));

?>


