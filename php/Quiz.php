<?php
//access the global array called $_POST to get the values from the text fields
$answers = array($_POST["question1"],$_POST["question2"], $_POST["question3"], $_POST["question4"], $_POST["question5"]);
$correct_answers = array("5","4","Eaton","Billy Mays", "Kansas JayHawK");
$count = 0;
echo ("<p> Question 1: How many questions are in this quiz?<br>You answered: $answers[0] <br>The correct answer was: $correct_answers[0] <br>");
echo ("<p> Question 2: For which lab is this assignment?<br>You answered: $answers[1] <br>The correct answer was: $correct_answers[1] <br>");
echo ("<p> Question 3: In which building does the lecture take place?<br>You answered: $answers[2] <br>The correct answer was: $correct_answers[2] <br>");
echo ("<p> Question 4: Which of these is NOT a middle school in Lawrence, KS?<br>You answered: $answers[3] <br>The correct answer was: $correct_answers[3] <br>");
echo ("<p> Question 5: KJHK stands for what?<br>You answered: $answers[4] <br>The correct answer was: $correct_answers[4] <br>");

for($i = 0; $i < 5; $i++){
  if ($answers[$i] == $correct_answers[$i]){
    $count++;
  }
}
echo ("You answered $count question(s) correctly!<br>Your score is " . $count/5 * 100 . "%!");
?>
