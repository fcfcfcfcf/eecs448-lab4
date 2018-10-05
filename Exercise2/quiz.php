<?php

$ans1 = $_POST["world"];
$ans2 = $_POST["highUSA"];
$ans3 = $_POST["highKansas"];
$ans4 = $_POST["lowUSA"];
$ans5 = $_POST["mars"];

echo "Where is the tallest mountain in the world located? <br>";
echo "You answered: " . $ans1 . "<br>";
echo "Correct answer: Nepal <br><br>";

echo "What state is the tallest mountain in the USA located in? <br>";
echo "You answered: " . $ans2 . "<br>";
echo "Correct answer: Alaska <br><br>";

echo "What is the name of the highest point in Kansas? <br>";
echo "You answered: " . $ans3 . "<br>";
echo "Correct answer: Mt. Sunflower <br><br>";

echo "Where is the name of the lowest place in the USA? <br>";
echo "You answered: " . $ans4 . "<br>";
echo "Correct answer: Death Valley <br><br>";

echo "What is the highest point on Mars called? <br>";
echo "You answered: " . $ans5 . "<br>";
echo "Correct answer: Olympus Mons <br><br>";

$score = 0;

if($ans1 == "Nepal"){
  $score = $score + 20;
}
if($ans2 == "Alaska"){
  $score = $score + 20;
}
if($ans3 == "Mt. Sunflower"){
  $score = $score + 20;
}
if($ans4 == "Death Valley"){
  $score = $score + 20;
}
if($ans5 == "Olympus Mons"){
  $score = $score + 20;
}
echo "Score: " . $score . "%<br>";


?>
