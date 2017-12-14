<?php

require_once("config.php");

$sql="SELECT Images.IMAID, Images.Namei,
COUNT(Likes.LIKID) AS likes
FROM Images
LEFT JOIN Likes ON Images.IMAID = Likes.Imid 
GROUP BY Images.IMAID";
$kysely = $DBH->prepare($sql);
$kysely->execute();

while($rivi = $kysely->fetch()){
    $liket[]=$rivi;
}
$i=1;
 $h=$rivi["likes"];
 echo '<div class="flexgrid">';
 foreach ($liket as $like) {
     $count = $like["likes"];
 }
 $i ++;

 echo '<prep>', print_r($count, true), '</prep>';

