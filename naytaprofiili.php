<?php
require_once("config.php");
?>
<?php
$sql="SELECT * FROM Images WHERE Uploader=".$_SESSION['ID']."";
$kysely2 = $DBH->prepare($sql);
$kysely2->execute();

// käsitellään tulostaulun rivit yksi kerrallaan
while($rivi = $kysely2->fetch()){
    // $rivi["nimi"] sisältää nimen (assosiatiivinen taulukko eli indeksit ovat nimikoitu
    // $rivi["hinta"] sisältää hinnan
    $kuvat[]=$rivi;
}
$i=1;
$h=$rivi["Namei"];
echo '<div class="flexgrid">';
foreach ($kuvat as $kuva) {
    $nimi = $kuva["url"];
    echo '<img src="'.$nimi.'" width="300px" height="300px"/>';
    if($i==2){

        //echo "<br/>";
    }
    $i++;
}
echo '</div>';
?>