<?php
require_once ('config.php');
?>

<?php
$kysely2 = $DBH->prepare("SELECT * FROM Profiili WHERE Uploader=".$_SESSION['ID']." ORDER BY PVM DESC" ) ;


$kysely2->execute();
//kuvia varten kansio!

$rivi = $kysely2->fetch() ;
$s = $rivi["url"];


echo "<img src='$s' alt='showimage' width='240' height='240'>";