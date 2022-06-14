<?php include 'fonctionnels/langVerif.php';?>
<?php include 'contenus/contenuQuizz.php';?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	
	<title>Quiz</title>
	
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
            && isset($_POST['question-10-answers'])){
                $answer1 = $_POST['question-1-answers'];
                $answer2 = $_POST['question-2-answers'];
                $answer3 = $_POST['question-3-answers'];
                $answer4 = $_POST['question-4-answers'];
                $answer5 = $_POST['question-5-answers'];
                $answer6 = $_POST['question-6-answers'];
                $answer7 = $_POST['question-7-answers'];
                $answer8 = $_POST['question-8-answers']
                $answer9 = $_POST['question-9-answers'];
                $answer10 = $_POST['question-10-answers'];
                
            }
            $totalCorrect = 0;
?>

	<div class = "containercorp">
        <div class = "text">
		<h1>Quiz général sur la région de Champagne</h1>
		
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
                    <?= $para1[$langue] ?>
                </li>
                

                <?php 
                    if (isset($answer2)){
                        if ($answer2 == "B") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                    <?=$question2[$langue]?>
                    <?= $para2[$langue] ?>
                </li>
                

                <?php 
                    if (isset($answer3)){
                        if ($answer3 == "C") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                    <?=$question3[$langue]?>
                    <?= $para3[$langue] ?>
                </li>
                
                <?php 
                    if (isset($answer4)){
                        if ($answer4 == "B") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                    <?=$question4[$langue]?>
                    <?= $para4[$langue] ?>
                </li>
               
                
                <?php 
                    if (isset($answer5)){
                        if ($answer5 == "A") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                    <?=$question5[$langue]?>
                    <?= $para5[$langue] ?>
                </li>
                
            
                <?php 
                    if (isset($answer6)){
                        if ($answer6 == "A") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                    <?=$question6[$langue]?>
                    <?= $para6[$langue] ?>
                </li>
            

            <?php 
                if (isset($answer7)){
                    if ($answer7 == "C") { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question7[$langue]?>
                <?= $para7[$langue] ?>
            </li>
            

            <?php 
                if (isset($answer8)){
                    if ($answer8 == "B") { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question8[$langue]?>
                <?= $para8[$langue] ?>
            </li>
            

            <?php 
                if (isset($answer9)){
                    if ($answer9 == "A") { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question9[$langue]?>
                <?= $para9[$langue] ?>
            </li>
            

            <?php 
                if (isset($answer10)){
                    if ($answer10[0] == "A" && $answer10[1] == "C") { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                <?=$question10[$langue]?>
                <?= $para10[$langue] ?>
            </li>
            
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
        </div>
	</div>
    <?php include 'footer.php';?>
</body>

</html>