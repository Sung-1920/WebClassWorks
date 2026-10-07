<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture_3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form method="post" >
 <h2>დახურული კითხვები  </h2>
    1.<input type="text">
    <br>
    <input type="radio" name="Q1" value="A-correct"><input type="text">
    <br>
    <input type="radio" name="Q1" value="B"><input type="text">
    <br>
    <input type="radio" name="Q1" value="C"><input type="text">
    <br>
    <input type="radio" name="Q1" value="D"><input type="text">
    <br><br>

    2.<input type="text">
    <br>
    <input type="radio" name="Q2" value="A-correct"><input type="text">
    <br>
    <input type="radio" name="Q2" value="B"><input type="text">
    <br>
    <input type="radio" name="Q2" value="C"><input type="text">
    <br>
    <input type="radio" name="Q2" value="D"><input type="text">
    <br><br> 

    3.<input type="text">
    <br>
    <input type="radio" name="Q3" value="A-correct"><input type="text">
    <br>
    <input type="radio" name="Q3" value="B"><input type="text">
    <br>
    <input type="radio" name="Q3" value="C"><input type="text">
    <br>
    <input type="radio" name="Q3" value="D"><input type="text">
    <br><br>

    <h2>ღია კითხვები</h2>

    <br>

    4.<input type="text" name=Q4 value="დაწერეთ კითხვა" class="Q4">
    <br>
    <input type="text" name="Q4"value="correct">
    <input type="text" name="Q4"value="wrong">
    <br>
    <input type="text" name="Q4"value="wrong">
    <input type="text" name="Q4"value="wrong">

    <br><br>
    
    5.<input type="text" name=Q4 value="დაწერეთ კითხვა" class="Q5">
    <br>
    <input type="text" name="Q4"value="correct">
    <input type="text" name="Q4"value="wrong">
    <br>
    <input type="text" name="Q4"value="wrong">
    <input type="text" name="Q4"value="wrong">
    <br><br>
    <button type="submit">გაგზავა</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $answer_1 = $_POST['Q1'] ?? '';
    $answer_2 = $_POST['Q2'] ?? '';
    $answer_3 = $_POST['Q3'] ?? '';

    $score = 0;

    if ($answer_1 == "A-correct") {
        $score++;
    }

    if ($answer_2 == "A-correct") {
        $score++;
    }

    if ($answer_3 == "A-correct") {
        $score++;
    }

    echo "სწორი პასუხების რაოდენობა: $score/5";
}


?>
</body>
</html>
