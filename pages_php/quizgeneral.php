<!DOCTYPE html>
<head>
	<meta charset="UTF-8" />
	
	<title>Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="../css/stylequiz.css" />
</head>

<body>

<?php include 'header.php';?>
	<div class = "containercorp">
        <div class = "text">
		<h1>Quiz général sur la région de Champagne</h1>
		
		<form action="resultgeneral.php" method="post" id="quiz">
		
            <ol>
            
                <li>
                
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
                
                <li>
                
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
                
                <li>
                
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
                
                <li>
                
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
                
                <li>
                
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
            
                <li>
                
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

            <li>
            
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

            <li>
            
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

            <li>
            
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


            <li>
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
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
		
		</form>
        </div>
	</div>


</body>

</html>