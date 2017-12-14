<?php
require_once('config.php');
?>

<?php


if(isset($_POST['but_upload'])){

    $name =$_FILES['file']['name'];
    $target_dir = 'kuvat/';
    $target_file = $target_dir . basename($_FILES['file']['name']);
    $descript =$_POST ['descript'];
    $Category =$_POST ['Category'];
//echo ('desc'.$desc);
    $filename=($_FILES['file']['name']);
  //  echo($filename);
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Valid file extensions
    $extensions_arr = array("jpg","jpeg","png","gif","mp4","mp3");

    // Check extension
    if( in_array($imageFileType,$extensions_arr) ){


        $param = array('url' => $target_file, 'nimi' => $filename, 'descript' => $descript, 'Category' => $Category);

        $kysely = $DBH->prepare("INSERT INTO Images (Uploader, Namei, Description, Category, url) VALUES (".$_SESSION['ID'].", :nimi, :descript, :Category, :url);");
        $kysely->execute($param);


        // Upload file
        move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);

    }

}
redirect('profile.php');
?>