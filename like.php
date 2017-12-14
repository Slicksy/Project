<?php
require_once ("config.php");

if(empty($_SESSION['ID'])){
    echo 'SOS';
}




if(isset($_GET['kid'])) {



    $img = $_GET['kid'];
    $kysely = $DBH->prepare("
    INSERT INTO Likes (Liker, Imid) VALUES (:liker, :imid)");
        //if($SESSION['ID']=) {

    //}else{
            $kysely->bindParam(':liker', $_SESSION['ID']);
            $kysely->bindParam(':imid', $img);

            $kysely->execute();

            $kysely2 = $DBH->prepare("SELECT COUNT(*) FROM Likes WHERE Imid = :imid");
            $kysely2->bindParam(':imid', $img);

            $kysely2->execute();

            $lkm = $kysely2->fetch();

    echo($lkm[0]);
        //}
}

