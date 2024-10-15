<?php
require_once('classes/compte.php');
require_once('classes/compteEpargne.php');
require_once('classes/comptePayant.php');
 
$compte3= new comptePayant(100);
?>
<h4>Compte Epargne</h4>
<?php
$compte2= new compteEpargne(100);
echo $compte2->deposer(100);
echo"<br>";
echo $compte2->retirer(10);
echo"<br>";
echo $compte2->__toString();
?>
<h4>Compte Payant</h4>
<?php
echo $compte3->deposer(100);
echo"<br>";
echo $compte3->retirer(10);
echo"<br>";
echo $compte3->__toString();






