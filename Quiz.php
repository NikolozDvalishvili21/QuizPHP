<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <h3>When was PHP created?</h3>
        <input type="radio" name="quest1answer" id="quest1ans1">
        <label for="quest1ans1">2015</label><br>

        <input type="radio" name="quest1answer" id="quest1ans2">
        <label for="quest1ans2">2000</label><br>

        <input type="radio" name="quest1answer" id="quest1ans3">
        <label for="quest1ans3">1990</label><br>

        <input type="radio" name="quest1answer" id="quest1ans4">
        <label for="quest1ans4">1994</label><br>

        <h3>Which animal is on the logo of PHP?</h3>
        <input type="radio" name="quest2answer" id="quest2ans1">
        <label for="quest2ans1">Elephant</label><br>

        <input type="radio" name="quest2answer" id="quest2ans2">
        <label for="quest2ans2">Snake</label><br>

        <input type="radio" name="quest2answer" id="quest2ans3">
        <label for="quest2ans3">Eagle</label><br>

        <input type="radio" name="quest2answer" id="quest2ans4">
        <label for="quest2ans4">Dog</label><br>

        <h3>What is the original name of PHP?</h3>
        <input type="radio" name="quest3answer" id="quest3ans1">
        <label for="quest3ans1">Hypertext Preprocessor</label><br>

        <input type="radio" name="quest3answer" id="quest3ans2">
        <label for="quest3ans2">Personal Home Page</label><br>

        <input type="radio" name="quest3answer" id="quest3ans3">
        <label for="quest3ans3">Cascading Style Sheets</label><br>

        <input type="radio" name="quest3answer" id="quest3ans4">
        <label for="quest3ans4">Python</label><br>



        <h3>Who designed PHP?</h3>
        <input type="text" name="quest4ans1">
        <br><br>

        <h3>In what programming language was PHP written?</h3>
        <input type="text" name="quest4ans2">
        <br><br>



        <button type="submit">Submit</button>
    </form>



    <?php

    $correctAnswers = array(
        "quest1answer" => "1994",
        "quest2answer" => "Elephant",
        "quest3answer" => "Personal Home Page",
    );


    $numCorrect = 0;

    if ($_POST) {

        foreach ($correctAnswers as $question => $correctAnswers) {
            if (isset($_POST[$question]) && $_POST[$question] == $correctAnswers) {
                $numCorrect++;
            }
        }

        if (isset($_POST["quest4ans1"]) && $_POST["quest4ans1"] === "Rasmus Lerdorf") {
            $numCorrect++;
        }

        if (isset($_POST["quest4ans2"]) && $_POST["quest4ans2"] === "C") {
            $numCorrect++;
        }


        echo "You have $numCorrect out of 5 questions";
    }








    ?>






</body>

</html>