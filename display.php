<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="default.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php


//  Pasting this code over for showing the correct anwers.

    $questions["q1"] = "What dimension is the original Rick from?";
    $questions["q2"] = "What planet is Morty's sex robot form?";
    $questions["q3"] = "What is the name of Jerry's gay lover alien parasite?";
    $questions["q4"] = "What Job does Beth have?";
    $questions["q5"] = "What is \"Schmeckle\"?";
    $questions["q6"] = "Bees are found on every continent of earth except for one, which is it?";
    $questions["q7"] = "What is the fastest land animal in the world?";
    $questions["q8"] = "What is the world's largest Eagle breed?";
    $questions["q9"] = "What is the largest type of ‘big cat’ in the world?";
    $questions["q10"] = "Where is the heart of the shrimp located?";
    $questions["q11"] = "How many internet users are there in the world?";
    $questions["q12"] = "When was a firm concept of the Internet first proposed?";
    $questions["q13"] = "How many websites were there worldwide at the end of 2017?";
    $questions["q14"] = "How many web pages does the average Internet user visit in one month?";
    $questions["q15"] = "How many websites are hacked on a daily basis?";
    $questions["q16"] = "How old is the oldest piece of chewing gum?";
    $questions["q17"] = "What is the fear of being buried alive known as?";
    $questions["q18"] = "Where was the fortune cookie invented?";
    $questions["q19"] = "How much time, on an average, does a person spend in the toilet in his lifetime?";
    $questions["q20"] = "What is \"milk\" called in Indonesia?";


    $quesArray["q1"] = $_POST["question1"][0];
    $quesArray["q2"] = $_POST["question2"][0];
    $quesArray["q3"] = $_POST["question3"][0];
    $quesArray["q4"] = $_POST["question4"][0];
    $quesArray["q5"] = $_POST["question5"][0];
    $quesArray["q6"] = $_POST["question6"][0];
    $quesArray["q7"] = $_POST["question7"][0];
    $quesArray["q8"] = $_POST["question8"][0];
    $quesArray["q9"] = $_POST["question9"][0];
    $quesArray["q10"] = $_POST["question10"][0];
    $quesArray["q11"] = $_POST["question11"][0];
    $quesArray["q12"] = $_POST["question12"][0];
    $quesArray["q13"] = $_POST["question13"][0];
    $quesArray["q14"] = $_POST["question14"][0];
    $quesArray["q15"] = $_POST["question15"][0];
    $quesArray["q16"] = $_POST["question16"][0];
    $quesArray["q17"] = $_POST["question17"][0];
    $quesArray["q18"] = $_POST["question18"][0];
    $quesArray["q19"] = $_POST["question19"][0];
    $quesArray["q20"] = $_POST["question20"][0];

    $total = 0;

    foreach ($quesArray as $ques) {
        $total = $total + (int)$ques;
        $newTotal = $total;
    }


//Output

    $score = "You got " . $newTotal . " out of 20.";


    if($total <= 5){
        echo "
            <h1><u>What do you Know?</u> <br><u> Do you know things? </u><br> <br><u class=\"bad\"> <em>WOW! WELL DONE!(said no one) </em> </u> </h1>
            <h1>$score</h1>
        ";}   elseif($total <= 10){
                echo "
                <h1><u>What do you Know?</u> <br><u> Do you know things? </u><br> <br><u class=\"bad\"> <em>WOW! WELL DONE!(said no one) </em> </u> </h1>
                <h1><$score.</h1>
                ";
            }   elseif($total <= 15){
                    echo "
                    <h1><u>What do you Know?</u> <br><u> Do you know things? </u><br> <br><u class=\"bad\"> <em>Congratulations! On being extremely average. </em> </u> </h1>
                    <h1>$score</h1>
                    ";
                }   elseif($total <= 20){
                        echo "
                        <h1><u>What do you Know?</u> <br><u> Do you know things? </u><br> <br><u class=\"bad\"> <em>Well done on always being on the internet and never going outside.</em> </u> </h1>
                        <h1>$score</h1>
                        ";
                    } 

           





?>

<div class="container">
<h2>Find the correct answers below:</h2>

    <ul>

        <ol>
            <p class="question">Question 1: <?php echo $questions["q1"]; ?></p>
            <li>Correct answer: C-137</li>
        </ol>



        <ol>
            <p class="question">Question 2: <?php echo $questions["q2"]; ?></p>
            <li>Correct answer: Gazorpazorp</li>
        </ol>



        <ol>
            <p class="question">Question 2: <?php echo $questions["q3"]; ?></p>
            <li>Correct answer: Garry</li>
        </ol>



        <ol>
            <p class="question">Question 4: <?php echo $questions["q4"]; ?></p>
            <li>Correct answer: Horse Surgeon</li>
        </ol>



        <ol>
            <p class="question">Question 5: <?php echo $questions["q5"]; ?></p>
            <li>Correct answer: A currency</li>
        </ol>



        <ol>
            <p class="question">Question 6: <?php echo $questions["q6"]; ?></p>
            <li>Correct answer: Antarctica</li>
        </ol>



        <ol>
            <p class="question">Question 7: <?php echo $questions["q7"]; ?></p>
            <li>Correct answer: Cheetah</li>
        </ol>



        <ol>
            <p class="question">Question 8: <?php echo $questions["q8"]; ?></p>
            <li>Correct answer: Haast's Eagle</li>
        </ol>



        <ol>
            <p class="question">Question 9: <?php echo $questions["q9"]; ?></p>
            <li>Correct answer: Tiger</li>
        </ol>



        <ol>
            <p class="question">Question 10: <?php echo $questions["q10"]; ?></p>
            <li>Correct answer: Head</li>
        </ol>




        <ol>
            <p class="question">Question 11: <?php echo $questions["q11"]; ?></p>
            <li>Correct answer: 3.2 Billion</li>
        </ol>



        <ol>
            <p class="question">Question q12: <?php echo $questions["q12"]; ?></p>
            <li>Correct answer: 1962</li>
        </ol>



        <ol>
            <p class="question">Question q13: <?php echo $questions["q13"]; ?></p>
            <li>1.9 Billion</li>
        </ol>



        <ol>
            <p class="question">Question q14: <?php echo $questions["q14"]; ?></p>
            <li>Correct answer: 2,646</li>
        </ol>




        <ol>
            <p class="question">Question 15: <?php echo $questions["q15"]; ?></p>
            <li>Correct answer: 30 000</li>
        </ol>



        <ol>
            <p class="question">Question 16: <?php echo $questions["q16"]; ?></p>
            <li>Correct answer: 9 000 Years</li>
        </ol>



        <ol>
            <p class="question">Question 17: <?php echo $questions["q17"]; ?></p>
            <li>Correct answer: Taphophibia</li>
        </ol>



        <ol>
            <p class="question">Question 18: <?php echo $questions["q18"]; ?></p>
            <li>Correct answer: USA</li>
        </ol>



        <ol>
            <p class="question">Question 19: <?php echo $questions["q19"]; ?></p>
            <li>Correct answer: 3 Years</li>
        </ol>



        <ol>
            <p class="question">Question 20: <?php echo $questions["q20"]; ?></p>
            <li>Correct answer: "susu"</li>
        </ol>
        


    </ul>
</div>

    <p class="credit">Created by: <a href="https://www.instagram.com/i_need.coffee/">Jonre</a></p>



</body>
</html>


