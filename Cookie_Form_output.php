<?php			

define("Stile_default","body{background-color:#666; color:#650; text-align:center; font-size:25px }");
	
$Stile_IN_Uso=Stile_default;

if($_POST['ColoreFont'] && $_POST['ColoreSfondo']){
										echo "<p>Salvataggio cookie<br /></p>";
										setcookie("ColoreSfondo",$_POST['ColoreSfondo'] ,time() + (600));
										setcookie("ColoreFont",$_POST['ColoreFont'],time() + (600));

										if($_COOKIE['ColoreFont'] && $_COOKIE['ColoreSfondo']){

										echo "<p>$ _COOKIE[ColoreSfondo]=" . $_COOKIE['ColoreSfondo'] ."<br /></p>";
										echo "<p>$ _COOKIE[Colorefont]=" . $_COOKIE['ColoreFont'] ."<br /></p>";
									}
	$Stile_IN_Uso="body{". 
						"background-color:". $_POST['ColoreSfondo'].";".
						"color:".$_POST['ColoreFont'].";" .
					"}";

}else{
		if(!$_POST['ColoreFont']){echo "Font color not ok<br/>";}
		if(!$_POST['ColoreSfondo']){echo "background color not ok<br/>";}	
}


			


 			?>
<!-- --------------------------------------------------------------------------------------INIZIO DELLA PAGINA------------------------------------------------------------------------------------------ -->
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

	<head>	
			<title>Pagina personalizzabile</title>	
			<style>
					<?php echo $Stile_IN_Uso;?>
			</style>	
			

	</head>	

	
	<body>

		<h1> sono nel body</h1>
		<h1> Stampo un po di informazioni</h1>


		<?php  
				echo"<pre>";
				 print_r($_COOKIE);
				echo"</pre>";
				
		?>


	</body>


</html>

<!-- 
	il tag<pre> mi permette di mantenere i breakline e i vari spazi con dimensione di lunghezza fissa;

	è preferibile usare isset() per un controllo più preciso	
	
	i dati che passo alla form devono essere controllati per un corretto funzionamento del codice;

	setcookie() mi permette di salvare dei dati a mia scelta dentro l'array $_COOKIE[];
	print_r() mi stampa tutto il contenuto di un array;

	Differenza tra cookie e Sessione
	-i cookie sono file del lato client e vengono salvati localmente su un pc con informazioni innerente all'utente;
	-i cookie hanno una capienza di dati più limitata rispetto ad una sessione;
	-i cookie scadono dopo una certa durata(che è specificata dall'utente);
	-Sono meno sicuri

	-Le Sessioni invece sono file del lato server nella quale sono memorizzati le informazioni dell'utente;
	-Le Sessioni scadono una volta che si è disconessi dal browser;
	-neccessità l'utilizzo di metodi per avviare la sessione start();
	-Sono più sicure, in quanto i dato vengono criptati, leggibili solo dall'utente;

-->