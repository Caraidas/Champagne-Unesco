<?php include 'fonctionnels/langVerif.php';?>

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
                $para1 = array("<p>réponse: Chalon-En-Champagne</p>
                <p>C’est à Chalon-en-Champagne que l’on trouve la préfecture, c’est donc le chef-lieu de la Champagne.</p>
                ",
                "<p>answer: Chalon-En-Champagne</p>
                <p>Chalon-en-Champagne is home to the prefecture, so it’s  the main townl of the Champagne region.</p>
                ");

                $answer2 = $_POST['question-2-answers'];
                $para2 = array("<p>réponse: une AOC</p>
                <p>A la différence de l’AOP qui est une appellation européenne, l'AOC est francais. Cette appellation permet de protéger la tradition française et évite que n’importe qui puisse appeler son vin pétillant du Champagne. </p>
                ",
                "<p>answer: an AOC</p>
                <p>Unlike the AOP which is a European appellation, the AOC is French. This appellation protects the French tradition and prevents anyone from calling their sparkling wine Champagne.</p>
                ");

                $answer3 = $_POST['question-3-answers'];
                $para3 = array("<p>réponse: Non (+1 million d’habitants)</p>
                <p>Et non, le champagne n’est pas une région très peuplée. Pas très étonnant lorsque l’on connaît la place que prennent les vignes champenoises. </p>
                ",
                "<p>answer: No (+1 million inhabitants)</p>
                <p>And no, Champagne is not a very populated region. Not very surprising when you know how much space the Champagne vineyards take up.</p>
                ");

                $answer4 = $_POST['question-4-answers'];
                $para4 = array("<p>réponse: Vrai</p>
                <p>Et oui La région est mondialement reconnue, elle fut intégrée en 2015. Pour plus de détail un article patrimoine existe sur notre site-web.</p>
                ",
                "<p>answer: True</p>
                <p>Yes, the region is world-renowned and was included in 2015. For more details a heritage article exists on our website.</p>
                ");

                $answer5 = $_POST['question-5-answers'];
                $para5 = array("<p>réponse: Nord-Est</p>
                <p>Cette belle région se trouve à 120 km de Paris. Elle s’étend de Maux jusqu'à Epernay et empiète sur la Marne, l’Aube  et l’Aisne</p>
                ",
                "<p>answer: North East</p>
                <p>This beautiful region is 120 km from Paris. It stretches from Maux to Epernay and encroaches on the Marne, Aube and Aisne</p>
                ");

                $answer6 = $_POST['question-6-answers'];
                $para6 = array("<p>réponses : Marché de Noël / Fêtes Johanniques.</p>
                <p>Comme partout, il y a de grands marchés de Noël en Champagne. MAis le plus intéressant sont les fêtes johanniques qui rendent hommage à Jeanne d’Arc et qui fêtent le sacre de Charle VII à Reims, une des plus grandes villes de la Champagne.</p>
                ",
                "<p>answers: Christmas Market / Johannine Festivals.</p>
                <p>Like everywhere, there are great Christmas markets in Champagne. But the most interesting are the Johannine festivals which pay tribute to Joan of Arc and celebrate the coronation of Charles VII in Reims, one of the largest cities in Champagne.</p>
                ");

                $answer7 = $_POST['question-7-answers'];
                $para7 = array("<p>réponse: Bleu Or Blanc</p>
                <p>Ces couleurs représentent bien la Champagne n’est-ce pas? Les deux bandes dorées qu’on appellent des potences symbolisent toutes les châtellenies qui ont constitué le comté de Champagne.</p>
                ",
                "<p>answer: Blue Gold White</p>
                <p>These colours represent Champagne, don't they? The two golden stripes, which are called “potence”, symbolise all the castellanies that made up the county of Champagne.</p>
                ");

                $answer8 = $_POST['question-8-answers'];
                $para8 = array("<p>réponse: 231 millions</p>
                <p>Ce nombre impressionnant montre bien la dévotion des artisans champenois à leur beau métier.</p>
                ",
                "<p>answer: 231 million</p>
                <p>This impressive number shows the devotion of the Champagne craftsmen to their beautiful profession.</p>
                ");

                $answer9 = $_POST['question-9-answers'];
                $para9 = array("<p>réponse:34 000 hectares</p>
                <p>Soit 84 000 terrains de foot. C’est beaucoup.</p>
                ",
                "<p>answer:34,000 hectares</p>
                <p>That's 84,000 football fields. That's a lot of land.</p>
                ");

                $answer10 = $_POST['question-10-answers'];
                $para10 = array("<p>réponse: Vrai</p>
                <p>Et oui la pape Urbain II est née en 1042 à Lagery, commune Champenoise.</p>
                ",
                "<p>answer: True</p>
                <p>Yes, Pope Urban II was born in 1042 in Lagery, a commune in the Champagne region.</p>
                ");
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
                    <h3>Quel est le chef-lieu de la Champagne?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) Chalon en Champagne </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) Reims</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) Troie</label>
                    </div>

                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Epernay</label>
                    </div>
                
                
                </li>
                <?= $para1[$langue] ?>

                <?php 
                    if (isset($answer2)){
                        if ($answer2 == "B") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                
                    <h3>Le champagne (boisson) est :</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">A) une AOP (appellation d’origine protégée)</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">B) une AOC (appellation d’origine contrôlée)</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">C) une AOC (appellation d'origine champenoise)</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">D) Juste un vin qui fait des bulles</label>
                    </div>
                
                </li>
                <?= $para2[$langue] ?>

                <?php 
                    if (isset($answer3)){
                        if ($answer3 == "C") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                
                    <h3>La champagne est elle une grande région?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">A) Oui (+10 million s d'habitants)</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">B) Moyennement (+5 millions d'habitants)</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">C) Non (+1 million d'habitants)</label>
                    </div>
                
                </li>
                <?= $para3[$langue] ?>
                
                <?php 
                    if (isset($answer4)){
                        if ($answer4 == "B") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                
                    <h3>La champagne est situé:</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">A) <img src="../image/cartequiz1.png"></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">B) <img src="../image/cartequiz2.png"></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">C)  <img src="../image/cartequiz3.png"></label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">D)  <img src="../image/cartequiz4.png"></label>
                    </div>
                
                </li>
                <?= $para4[$langue] ?>
                
                <?php 
                    if (isset($answer5)){
                        if ($answer5 == "A") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                
                    <h3>Les couleurs  de la région Champagne-Ardennes sont:</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">A) Bleu Or Blanc</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">B) Bleu Blanc Rouge</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">C) Vert</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">D) Rouge Jaune</label>
                    </div>
                
                </li>
                <?= $para5[$langue] ?>
            
                <?php 
                    if (isset($answer6)){
                        if ($answer6 == "A") { $totalCorrect++; $color = "green"; }
                        else{ $color ="red";} 
                    }
                ?>
                <li class = <?=$color?>>
                
                <h3>La Champagne est reconnu patrimoine mondiale de l’Unesco:</h3>
                
                <div>
                    <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                    <label for="question-6-answers-A">A) VRAI</label>
                </div>
                
                <div>
                    <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                    <label for="question-6-answers-B">B) FAUX</label>
                </div>
            
            </li>
            <?= $para6[$langue] ?>

            <?php 
                if (isset($answer7)){
                    if ($answer7 == "C") { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
            
                <h3>Combien de bouteilles de Champagne ont été produites en 2020?</h3>
                
                <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                    <label for="question-7-answers-A">A) 200 000</label>
                </div>
                
                <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                    <label for="question-7-answers-B">B) 2640</label>
                </div>

                <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-C" value="C" />
                    <label for="question-7-answers-C">C) 231 millions</label>
                </div>
            
            </li>
            <?= $para7[$langue] ?>

            <?php 
                if (isset($answer8)){
                    if ($answer8 == "B") { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
            
                <h3>La surface de vigne représente approximativement:</h3>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                    <label for="question-8-answers-A">A) 1 millions hectare</label>
                </div>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                    <label for="question-8-answers-B">B) 34 000 hectares</label>
                </div>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-C" value="C" />
                    <label for="question-8-answers-C">C) 100 hectares</label>
                </div>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-D" value="D" />
                    <label for="question-8-answers-D">D) 58 hectares</label>
                </div>
            
            </li>
            <?= $para8[$langue] ?>

            <?php 
                if (isset($answer9)){
                    if ($answer9 == "A") { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
            
                <h3>Le pape Urbain II (qui lança les premières croisades) est née en Champagne:</h3>
                
                <div>
                    <input type="radio" name="question-9-answers" id="question-9-answers-A" value="A" />
                    <label for="question-9-answers-A">A) VRAI</label>
                </div>
                
                <div>
                    <input type="radio" name="question-9-answers" id="question-9-answers-B" value="B" />
                    <label for="question-9-answers-B">B) FAUX</label>
                </div>
            
            </li>
            <?= $para9[$langue] ?>

            <?php 
                if (isset($answer10)){
                    if ($answer10[0] == "A" && $answer10[1] == "C") { $totalCorrect++; $color = "green"; }
                    else{ $color ="red";} 
                }
            ?>
            <li class = <?=$color?>>
                    <h3>Quels événements ont lieu en Champagne:</h3>
                    
                    <div>
                        <input type='checkbox' name='question-10-answers[]' id="question-10-answers-A" value='A' /> 
                        <label for="question-10-answers-A">A) Marché de Noel</label>
                    </div>
                    
                    <div>
                        <input type="checkbox" name="question-10-answers[]" id="question-10-answers-B" value="B" />
                        <label for="question-10-answers-B">B) Corrida</label>
                    </div>

                    <div>
                        <input type="checkbox" name="question-10-answers[]" id="question-10-answers-C" value="C" />
                        <label for="question-10-answers-C">C) Fêtes Johanniques</label>
                    </div>

                    <div>
                        <input type="checkbox" name="question-10-answers[]" id="question-10-answers-D" value="D" />
                        <label for="question-10-answers-D">D) Festival de l'Ivresse</label>
                    </div>
            </li>
            <?= $para1[$langue] ?>
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
        </div>
	</div>
    <?php include 'footer.php';?>
</body>

</html>