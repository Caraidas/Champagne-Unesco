<?php include 'fonctionnels/langVerif.php';?>
<?php include 'contenus/contenuQuizz.php';?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	
	<title>Quiz</title>
	<link rel="icon" type="image/png" sizes="16x16" href="../image/logoOnglet.png">
	<link rel="stylesheet" type="text/css" href="../css/stylequiz.css" />
</head>

<body>
<?php include 'header.php';?>
<?php

            $color="grey";
            if (isset($_POST['question-1-answers']) 
            && isset($_POST['question-2-answers']) 
            && isset($_POST['question-3-answers']) 
            && isset($_POST['question-4-answers']) 
            && isset($_POST['question-5-answers']) 
            && isset($_POST['question-6-answers']) 
            && isset($_POST['question-7-answers']) 
            && isset($_POST['question-8-answers']) 
            && isset($_POST['question-9-answers']) 
            && isset($_POST['question-10-answers'])
            && isset($_POST['question-11-answers']) 
            && isset($_POST['question-12-answers']) 
            && isset($_POST['question-13-answers']) 
            && isset($_POST['question-14-answers']) 
            && isset($_POST['question-15-answers']) 
            && isset($_POST['question-16-answers']) 
            && isset($_POST['question-17-answers']) 
            && isset($_POST['question-18-answers']) 
            && isset($_POST['question-19-answers'])
            && isset($_POST['question-20-answers'])){
                $answer1 = $_POST['question-1-answers'];
                $answer2 = $_POST['question-2-answers'];
                $answer3 = $_POST['question-3-answers'];
                $answer4 = $_POST['question-4-answers'];
                $answer5 = $_POST['question-5-answers'];
                $answer6 = $_POST['question-6-answers'];
                $answer7 = $_POST['question-7-answers'];
                $answer8 = $_POST['question-8-answers'];
                $answer9 = $_POST['question-9-answers'];
                $answer10 = $_POST['question-10-answers'];
                $answer11 = $_POST['question-11-answers'];
                $answer12 = $_POST['question-12-answers'];
                $answer13 = $_POST['question-13-answers'];
                $answer14 = $_POST['question-14-answers'];
                $answer15 = $_POST['question-15-answers'];
                $answer16 = $_POST['question-16-answers'];
                $answer17 = $_POST['question-17-answers'];
                $answer18 = $_POST['question-18-answers'];
                $answer19 = $_POST['question-19-answers'];
                $answer20 = $_POST['question-20-answers'];
                
                $score = "";
            }
            $totalCorrect = 0;
?>

	<div class = "containercorp">
        <div class = "text">
		<?= $titre[$langue]?>
		
		<form action="quizgeneral.php" method="post" id="quiz">
		
            <ol>
                <?php 
                    if (isset($answer1)){
                        if ($answer1 == "A") { $totalCorrect++; $color = "green";} 
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                    <?=$question1[$langue]?>
                    <?php
                    if($color!="grey"){
                        echo $para1[$langue]; 
                    }
                    ?>
                </li>
                

                <?php 
                    if (isset($answer2)){
                        if ($answer2 == "B") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                    <?=$question2[$langue]?>
                    <?php
                    if($color!="grey"){
                        echo $para2[$langue]; 
                    }
                    ?>
                </li>
                

                <?php 
                    if (isset($answer3)){
                        if ($answer3 == "C") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                    <?=$question3[$langue]?>
                    <?php
                    if($color!="grey"){
                        echo $para3[$langue]; 
                    }
                    ?>
                </li>
                
                <?php 
                    if (isset($answer4)){
                        if ($answer4 == "B") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                    <?=$question4[$langue]?>
                    <?php
                    if($color!="grey"){
                        echo $para4[$langue]; 
                    }
                    ?>
                </li>
               
                
                <?php 
                    if (isset($answer5)){
                        if ($answer5 == "A") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                    <?=$question5[$langue]?>
                    <?php
                    if($color!="grey"){
                        echo $para5[$langue]; 
                    }
                    ?>
                </li>
                
            
                <?php 
                    if (isset($answer6)){
                        if ($answer6 == "A") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                    <?=$question6[$langue]?>
                    <?php
                    if($color!="grey"){
                        echo $para6[$langue]; 
                    }
                    ?>
                </li>
            

            <?php 
                if (isset($answer7)){
                    if ($answer7 == "C") { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question7[$langue]?>
                <?php
                    if($color!="grey"){
                        echo $para7[$langue]; 
                    }
                    ?>
            </li>
            

            <?php 
                if (isset($answer8)){
                    if ($answer8 == "B") { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question8[$langue]?>
                <?php
                    if($color!="grey"){
                        echo $para8[$langue]; 
                    }
                    ?>
            </li>
            

            <?php 
                if (isset($answer9)){
                    if ($answer9 == "A") { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question9[$langue]?>
                <?php
                    if($color!="grey"){
                        echo $para9[$langue]; 
                    }
                    ?>
            </li>
            

            <?php 
                if (isset($answer10)){
                    if ($answer10[0] == "A" && $answer10[1] == "C") { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question10[$langue]?>
                <?php
                    if($color!="grey"){
                        echo $para10[$langue]; 
                    }
                    ?>
            </li>

            <?php 
                if (isset($answer11)){
                    if ($answer11 == "D" ) { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question11[$langue]?>
                <?php
                    if($color!="grey"){
                        echo $para11[$langue]; 
                    }
                    ?>
            </li>

            <?php 
                if (isset($answer12)){
                    if ($answer12 == "C" ) { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question12[$langue]?>
                <?php
                    if($color!="grey"){
                        echo $para12[$langue]; 
                    }
                    ?>
            </li>


            <?php 
                if (isset($answer13)){
                    if ($answer13[0] == "A" && $answer13[1] == "C") { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question13[$langue]?>
                <?php
                    if($color!="grey"){
                        echo $para13[$langue]; 
                    }
                    ?>
            </li>


            <?php 
                if (isset($answer14)){
                    if ($answer14[0] == "C" && $answer14[1] == "D") { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question14[$langue]?>
                <?php
                    if($color!="grey"){
                        echo $para14[$langue]; 
                    }
                    ?>
            </li>

            <?php 
                if (isset($answer15)){
                    if ($answer15 == "C" ) { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question15[$langue]?>
                <?php
                    if($color!="grey"){
                        echo $para15[$langue]; 
                    }
                    ?>
            </li>

            <?php 
                if (isset($answer16)){
                    if ($answer16 == "C" ) { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question16[$langue]?>
                <?php
                    if($color!="grey"){
                        echo $para16[$langue]; 
                    }
                    ?>
            </li>

            <?php 
                if (isset($answer17)){
                    if ($answer17 == "B" ) { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question17[$langue]?>
                <?php
                    if($color!="grey"){
                        echo $para17[$langue]; 
                    }
                    ?>
            </li>
            
            <?php 
                if (isset($answer18)){
                    if ($answer18 == "A" ) { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question18[$langue]?>
                <?php
                    if($color!="grey"){
                        echo $para18[$langue]; 
                    }
                    ?>
            </li>


            <?php 
                if (isset($answer19)){
                    if ($answer19 == "A" ) { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question19[$langue]?>
                <?php
                    if($color!="grey"){
                        echo $para19[$langue]; 
                    }
                    ?>
            </li>


            <?php 
                if (isset($answer20)){
                    if ($answer20 == "C" ) { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question20[$langue]?>
                <?php
                    if($color!="grey"){
                        echo $para20[$langue]; 
                    }
                    ?>
            </li>
           
                <?php 
                if(isset($score)){
                    $score = array( " <div class='score grey'> <p>Vous avez un score de " .$totalCorrect."/20 !</p></div>",   "<div class='score grey'> <p>You have a score of " .$totalCorrect."/20 !</p></div>");
                    echo $score[$langue];
                }
                else{
                    $submit = array('Envoyer', 'Submit');
                    $value = $submit[$langue];
                    echo  "<input type='submit' value='$value' class='submitbtn' />";
                }
                ?>
            
            </ol>
            
           

		</form>
        </div>
	</div>
    <?php include 'footer.php';?>
</body>

</html>