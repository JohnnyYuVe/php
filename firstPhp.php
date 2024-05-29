<?php
   echo '<?xml version="1.0" encoding="UTF-8"?>';
?>

<!DOCTYPE html
PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head> <title>primo esempio</title> </head>
<body>

<p style="color:green; text-align:center">
   <?php echo "testo prodotto da uno script php!"; ?>
</p>


      <?php
        echo "<p style=\"color:red; text-align:center\">";
        echo "testo prodotto da uno script php, ma di pi\&ugrave;";
        echo "</p>";
?>

<p>Se guardi il codice di questo script (non del file html prodotto dallo script ...) vedi che l'incipit xml e' prodotto con una istruzione echo ... beh, non e' indispensabile fare cosi', ma e' un modo per produrre quell'intestazione</p>


<?php

#questo è un commento
/*questo è un commento*/
//questo è un commento
?>

</body>
</html>
