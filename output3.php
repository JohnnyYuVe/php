<?xml version="1.0" encoding="UTF-8"?>


<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">



	<head>
			<link rel="stylesheet" type="text/css" href="style3.css">
			<title>	</title>
	</head>	

	
	<body>

		<h1 style="text-align:center;">ecco il risultato dei dati da te inseriti</h1>



		<?php
//Controllo le variabili nome e cognome per vedere se è stato inserito qualcosa siccome un blank e e considerato un carattere
				if($_POST["nome"]==" " || $_POST["cognome"]==" "){
									echo "<p>hey non mi hai detto il tuo nome e il tuo cognome</p>";
				}
				else{
					echo "<p> Ciao".$_POST["nome"]."-". $_POST["cognome"] .", ti ringrazio di aver compilato il form!</p>";
				}
			
				echo "<p>vediamo un po' quali sono i tuoi gusti...</p>";


//Controllo della variabile Genere dentro l'array di default _POST 
				if(!isset($_POST["Genere"])){
											echo "<p>Non hai scelto nessun genere letterario</p>";
				}
				
				else{
					switch ($_POST["Genere"]) {
						
						case 'Giallo':
									echo "<p>ti piace il veramente ilGiallo? che noioso...</p>";
						break;
						
						case 'Fantascienza':
										echo "<p>ti piace la Fantascienza Wow</p>";
						break;
						
						case 'Horror':
									echo "<p>ti piace l'horror, Coraggioso!</p>";
						break;			
					}
				}

//Controllo della variabile PrefSquadra dentro l'array di default _POST e vedo quali fiori ha scelto 
				if(!isset($_POST["PrefSqadra"])){
												echo "<p>hey non hai scelto nessuna squadra</p>";
				}
				else{
					echo"<h1>Hai scelto le seguenti squadre</h1>";
					echo"<p>";
						foreach ($_POST["PrefSqadra"] as $Pos => $value) {
								
							echo "<li>" . $Pos . "-" . $value ."</li>";

						}
					echo"</p>";	

				}


				if(!isset($_POST["fiori"])){
												echo "<p>hey non hai scelto nessun fiore!</p>";
				}
				else{
					echo"<h1>Hai scelto i seguenti fiori</h1>";
					echo"<p>";
						foreach ($_POST["fiori"] as $Pos => $value) {
								
							echo "<li>" . $Pos . "-" . $value. "</li>";

						}
					echo"</p>";

					}	

					if(!isset($_POST['color'])){
													echo"<p>";
													echo"<h1>codice colore:</h1>";
													
													echo  $_POST['ColoreSfondo'];
													echo"</p>";	
				}


		?>





	
	</body>


</html>