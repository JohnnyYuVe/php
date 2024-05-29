
<?xml version="1.0" encoding="UTF-8"?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head> <title>primo esempio</title> </head>





<body>


<?php
      $sdd='qiaro';
      echo "sono stato $sdd\n";    
?>
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'KHTML') != false) {
?>

<h3>strpos must have returned true</h3>
<center><b>You are using Google chrome</b></center>

<?php
} else {
?>

<h3>strpos must have returned false</h3>
<center><b>You are not using Internet Explorer</b></center>

<?php
}
 $total=10000;
echo $_SERVER['HTTP_USER_AGENT'];
$a = array("primo"=>75,0=>121, 10, "pistacchio", 22.99);

?>

</br>

<?php
$str="caccapupuMSIE";
foreach($a as $chiave=>$valore)
if (is_int($chiave))
echo "\$a[$chiave] = $valore<br />";
else 
echo "\$a[\"$chiave\"] = $valore<br />";


echo  $a[0] . 'qui ce un ritorno a capo concatenato <br/> ';
echo preg_match("/MSE/", $str);


echo " spendiamo $total \"euro\" all'anno";
?>







<!--
il codice php conviene tenerlo separato dal codice html in quanto ci costa tempo visto che il phraser implega tempo per interpretare il codice.

echo server a fare print a video.

fare \n su echo in questo caso non serve a molto in quanto l'interprete non lo riconosce con newline bisogna usare <br /> se si vuole ritornare a capo .

is_int($d) verifica se il tipo della variabile è un intero
isset($d) verifica se la variabile esiste.

Caratteri speciali  ‘\': \n    \r   \ t    \"    \\   \$
*/
-->


</body>
</html>
