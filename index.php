<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="default.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>What do you know?</title>
    
</head>
<body>

    <script type="text/javascript">alert("Please make sure to select an answer at each question, or else the website might not work correctly.")</script>

    <?php


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

    
    ?>

    <h1><u>What do you know?</u><br><u>DO you know things?</u><br><u>Let's find out!</u></h1>
    <div class="container">
        <form action="display.php" method="POST">
            <ul>

                <h2>Section A: How well do you know the Rick & Morty show?</h2>
        
                <!-- Question 1 -->
                
                <ol>
                <p class="question">Question 1: <?php echo $questions["q1"]; ?></p>
                <input id="1a" type="radio" name="question1" value=0>C-132
                <br>
                <input type="radio" name="question1" value=0>C-127
                <br>
                <input type="radio" name="question1" value=1>C-137
                <br>
                <input type="radio" name="question1" value=0>C-126
                <br>
                </ol>
                


                


                <!-- Question 2 -->
                <ol>
                <p class="question">Question 2: <?php echo $questions["q2"]; ?></p>
                <input type="radio" name="question2" value=0>Chundlopia 
                <br>
                <input type="radio" name="question2" value=0>Smegmalon
                <br>
                <input type="radio" name="question2" value=0>Glaagablagaa
                <br>
                <input type="radio" name="question2" value=1>Gazorpazorp
                <br>
                </ol>



                <!-- Question 3 -->
                <ol>
                <p class="question">Question 3:<?php echo $questions["q3"]; ?></p>
                <input type="radio" name="question3" value=1>Garry 
                <br>
                <input type="radio" name="question3" value=0>Larry
                <br>
                <input type="radio" name="question3" value=0>Terry
                <br>
                <input type="radio" name="question3" value=0>Barry
                <br>
                </ol>


                <!-- Question 4 -->
                <ol>
                <p class="question">Question 4: <?php echo $questions["q4"]; ?></p>
                <input type="radio" name="question4" value=0> Astronomer 
                <br>
                <input type="radio" name="question4" value=0>Chef
                <br>
                <input type="radio" name="question4" value=1>Horse Surgeon
                <br>
                <input type="radio" name="question4" value=0>Novel Writer
                <br>
                </ol>



                <!-- Question 5 -->
                <ol>
                <p class="question">Question 5: <?php echo $questions["q5"]; ?></p>
                <input type="radio" name="question5" value=0>Rick's Cat-person frind 
                <br>
                <input type="radio" name="question5" value=1>A currency
                <br>
                <input type="radio" name="question5" value=0>The name of fly-guards
                <br>
                <input type="radio" name="question5" value=0>Rick's favourite food
                <br>
                </ol>

                </ul>
    <!-- </div>

    <div class="container"> -->

                <ul>


                <h2>Section B: General knowledge about animals.</h2>



                <!-- Question 6 -->
                <ol>
                <p class="question">Question 6: <?php echo $questions["q6"]; ?></p>
                <input type="radio" name="question6" value=0>Africa 
                <br>
                <input type="radio" name="question6" value=1>Antarctica
                <br>
                <input type="radio" name="question6" value=0>Australia
                <br>
                <input type="radio" name="question6" value=0>Asia
                <br>
                </ol>


                <!-- Question 7 -->
                <ol>
                <p class="question">Question 7: <?php echo $questions["q7"]; ?></p>
                <input type="radio" name="question7" value=0>Leopord 
                <br>
                <input type="radio" name="question7" value=0>Horse
                <br>
                <input type="radio" name="question7" value=1>Cheetah
                <br>
                <input type="radio" name="question7" value=0>Wolf
                <br>
                </ol>



                <!-- Question 8 -->
                <ol>
                <p class="question">Question 8: <?php echo $questions["q8"]; ?></p>
                <input type="radio" name="question8" value=1>Haast's Eagle 
                <br>
                <input type="radio" name="question8" value=0>Australian Wedge-Tailed Eagle
                <br>
                <input type="radio" name="question8" value=0>Bald Eagle
                <br>
                <input type="radio" name="question8" value=0>Harpy Eagle
                <br>
                </ol>



                <!-- Question 9 -->
                <ol>
                <p class="question">Question 9: <?php echo $questions["q9"]; ?></p>
                <input type="radio" name="question9" value=1>Tiger 
                <br>
                <input type="radio" name="question9" value=0>Leoperd
                <br>
                <input type="radio" name="question9" value=0>Elephant
                <br>
                <input type="radio" name="question9" value=0>Lion
                <br>
                </ol>



                <!-- Question 10 -->
                <ol>
                <p class="question">Question 10: <?php echo $questions["q10"]; ?></p>
                <input type="radio" name="question10" value=0>Chest 
                <br>
                <input type="radio" name="question10" value=0>Tale
                <br>
                <input type="radio" name="question10" value=1>Head
                <br>
                <input type="radio" name="question10" value=0>None of the above
                <br>
                </ol>

                </ul>

    <!-- </div>
    <div class="container"> -->

                <ul>

                <h2>Section C: Do you know the web?</h2>



                <!-- Question 11 -->
                <ol>
                <p class="question">Question 11: <?php echo $questions["q11"]; ?></p>
                <input type="radio" name="question11" value=0>1.9 Billion 
                <br>
                <input type="radio" name="question11" value=0>458 Million
                <br>
                <input type="radio" name="question11" value=0>1.2 Trillion
                <br>
                <input type="radio" name="question11" value=1>3.2 Billion
                <br>
                </ol>



                <!-- Question 12 -->
                <ol>
                <p class="question">Question 12: <?php echo $questions["q12"]; ?></p>
                <input type="radio" name="question12" value=1>1962 
                <br>
                <input type="radio" name="question12" value=0>1944
                <br>
                <input type="radio" name="question12" value=0>1978
                <br>
                <input type="radio" name="question12" value=0>2010
                <br>
                </ol>



                <!-- Question 13 -->
                <ol>
                <p class="question">Question 13: <?php echo $questions["q13"]; ?></p>
                <input type="radio" name="question13" value=0>7.8 Million 
                <br>
                <input type="radio" name="question13" value=0>78 Million
                <br>
                <input type="radio" name="question13" value=0>340 Thousand
                <br>
                <input type="radio" name="question13" value=1>1.9 Billion
                <br>
                </ol>



                <!-- Question 14 -->
                <ol>
                <p class="question">Question 14: <?php echo $questions["q14"]; ?></p>
                <input type="radio" name="question14" value=1>2,646 
                <br>
                <input type="radio" name="question14" value=0>26
                <br>
                <input type="radio" name="question14" value=0>646
                <br>
                <input type="radio" name="question14" value=0>264
                <br>
                </ol>



                <!-- Question 15 -->
                <ol>
                <p class="question">Question 15: <?php echo $questions["q15"]; ?></p>
                <input type="radio" name="question15" value=0>30
                <br>
                <input type="radio" name="question15" value=0>300
                <br>
                <input type="radio" name="question15" value=1>30 000
                <br>
                <input type="radio" name="question15" value=0>300 000
                <br>
                </ol>

                </ul>

    <!-- </div>
    <div class="container"> -->
                
                <ul>


                <h2>Section D: Just random questions because I ran out of ideas.</h2>



                <!-- Question 16 -->
                <ol>
                <p class="question">Question 16: <?php echo $questions["q16"]; ?></p>
                <input type="radio" name="question16" value=0>9 Months
                <br>
                <input type="radio" name="question16" value=0>9 Years
                <br>
                <input type="radio" name="question16" value=0>90 Years
                <br>
                <input type="radio" name="question16" value=1>9 000 Years
                <br>
                </ol>




                <!-- Question 17 -->
                <ol>
                <p class="question">Question 17: <?php echo $questions["q17"]; ?></p>
                <input type="radio" name="question17" value=0>Arachnophobia
                <br>
                <input type="radio" name="question17" value=0>Traphophobia
                <br>
                <input type="radio" name="question17" value=1>Taphophobia
                <br>
                <input type="radio" name="question17" value=0>Cynophobia
                <br>
                </ol>



                <!-- Question 18 -->
                <ol>
                <p class="question">Question 18: <?php echo $questions["q18"]; ?></p>
                <input type="radio" name="question18" value=0>China
                <br>
                <input type="radio" name="question18" value=1>USA
                <br>
                <input type="radio" name="question18" value=0>Japan
                <br>
                <input type="radio" name="question18" value=0>Thailand
                <br>
                </ol>



                <!-- Question 19 -->
                <ol>
                <p class="question">Question 19: <?php echo $questions["q19"]; ?></p>
                <input type="radio" name="question19" value=0>3 Months
                <br>
                <input type="radio" name="question19" value=0>9 Months
                <br>
                <input type="radio" name="question19" value=1>3 Years
                <br>
                <input type="radio" name="question19" value=0>9 Years
                <br>
                </ol>



                <!-- Question 20 -->
                <ol>
                <p class="question">Question 20: <?php echo $questions["q20"]; ?></p>
                <input type="radio" name="question20" value=0>"Shinskididuhspidiskruhu"
                <br>
                <input type="radio" name="question20" value=0>"Soso"
                <br>
                <input type="radio" name="question20" value=0>"Milkness"
                <br>
                <input type="radio" name="question20" value=1> "Susu"
                <br>
                </ol>


            
            
            </ul> 
            <input class="submitt" type="submit">   
        </form>
    </div>

    <p class="credit">Created by: <a href="https://www.instagram.com/i_need.coffee/">Jonre</a></p>


</body>
</html>