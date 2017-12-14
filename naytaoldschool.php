<?php
//require_once("config.php");
?>
<?php
$sql="SELECT * FROM Images WHERE Images.Category='1'";
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
     if(empty($_SESSION['ID'])){
         echo '<div class="imgContainer">  
              <img src="'.$nimi.'" width="300px" height="300px"/>
              </div>';
     } else {
         echo '<div class="Container">
                <style>
                    .button{
                     background-color: red ;
                     border-radius: 12px;
                     color: white;
                     width: 80%;
                     text-align: center;
                     float: left;
                     } 
                     .floating-box {
                     float: right;
                     width: 20%;
                     text-align: center;
                     color: red;
                     border: solid 3px red;
                     border-radius: 12px;
                     }
                 </style>  
              <div>
              <img class="image" src="'.$nimi.'" width="300px" height="300px"/>
              
              
              </div>
                    <div><button class="button" data-kid="'.$kuva['IMAID'].'">LIKE</button></div>
                    <div class="floating-box">
                    <p id="kuva'.$kuva['IMAID'].'">';

         $kyselyx = $DBH->prepare("SELECT COUNT(*) FROM Likes WHERE Imid = :imid");
         $kyselyx->bindParam(':imid', $kuva['IMAID']);

         $kyselyx->execute();

         $lkm = $kyselyx->fetch();

         echo($lkm[0]);


         echo '</p>
                    </div> 
              </div>            
              '; }
    if($i==3){

    	//echo "<br/>";
    }
    $i++;
}
echo '</div>';
?>