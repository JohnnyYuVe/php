<?php
error_reporting(E_ALL & ~E_NOTICE);

if (!isset($_POST["primoValore"]) || ($_POST["invio"]=="azzera")) {
   $som=0;
   $sot=0;
   echo "<h3>init (prima versione)</h3>";
} else {                                // arriviamo dalla form
   $msg="";
   $som=$_POST['somme'];
   $sot=$_POST['sottrazioni'];
   // per debugging echo "prima ---$som---$sot---";

   if ($_POST["primoValore"]=="")
      $msg="<br />ERRORE: primo non assegnato<br />";

   if ($_POST["secondoValore"]=="")
      $msg = $msg . "<br />ERRORE: secondo non assegnato<br />";

   if ($msg=="") {
      $msg = "risultato operazione richiesta (".$_POST["invio"]."): ";

      if ($_POST["invio"]=="primo + secondo") {
         $som++;
         $msg .= $_POST["primoValore"] + $_POST["secondoValore"];
      } else {
         $sot++;
         $msg .= $_POST["primoValore"] - $_POST["secondoValore"];

      }
         // per debug
         //   echo "dopo ---$som---$sot---";
   }
}

echo '<?xml version="1.0" encoding="ISO-8859-1"?>';
?>
<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<title>conteggi con hidden</title>
</head>
<body>

<body>
<p style="color: red; font-size: 120%">

<?php
if (!isset($msg)){}else{echo $msg;}

?>
</p>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">

<p>
primo valore: <input type="text" name="primoValore" size="5">
</p>

<p>
secondo valore: <input type="text" name="secondoValore" size="5">
</p>

<input type="hidden" name="somme" value="<?php echo $som ?>">
<input type="hidden" name="sottrazioni" value="<?php echo $sot; ?>">
<p><?php echo "----".$som."----".$sot."----";?> </p>
<p>
<input type="submit" name="invio" value="primo + secondo">
<input type="submit" name="invio" value="primo - secondo">
</p>
<p>
<input type="reset" value="Annulla le scelte">
<input type="submit" name="invio" value="azzera">
</p>

</form>











































































<?php
if (!isset($msg)) 


?>
</body>
</html>