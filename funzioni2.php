<?php /* funzione di scambio, con passaggio dei parametri "per riferimento" */
function scambia(&$p, &$s) {
  $aux=$p;   // $aux var locale
  $p=$s;
  $s=$aux;
}
?>
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
   <title>Form che esegue un'operazione </title>
  </head>

<body>
<p>riceve due numeri, dalla form di cui e' action, e poi esegue l'operazione aritmetica richiesta dalla form</p>

<h2 style="color: blue;">stampa di $_POST[]
<br />
<?php print_r($_POST) ?>
</h2>

<h3>
primo valore:
<?php echo $_POST['primoValore']; ?>
<br />
secondo valore:
<?php echo $_POST["secondoValore"]; ?>
</h3>

<hr />

<?php
 $msg="vuota!";    // messaggio di errore: inizializzazione
 $color = "blue";  // colore con cui verra' stampata $msg
 
 if ($_POST["primoValore"]=="") {
   $msg="<br />ERRORE: primo non assegnato<br />";
   $color = "red";
 }
 
 if ($_POST["secondoValore"]=="") {
   if ($msg =="vuota!")
       $msg = "\n<br />\nERRORE: secondo non assegnato\n<br />\n";
   else $msg = $msg . "\n<br />\nERRORE: secondo non assegnato\n<br />\n";
   $color = "red";
 }
 
 if ($msg=="vuota!") {
   $msg = "risultato operazione richiesta (".$_POST["invio"]."): ";
          // calcolo risultato in base al bottone scelto
   if ($_POST["invio"]=="primo - secondo")
     $msg .= $_POST["primoValore"] - $_POST["secondoValore"];
   else $msg .= $_POST["secondoValore"] - $_POST["primoValore"];
 }
?>

<p style="margin-left: 30%; width: 30%; border: solid blue thick; color: <?php echo $color; ?>;">
<?php echo $msg; ?>
</p>

</body>
</html>