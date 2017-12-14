<?php
//session_save_path('/home2-3/j/jessesaa/public_html/testiupload/session');
session_start();

$user = 'joonaaa'; //TÄNNE OMAT
$pass = 'jesseonparas';
$host = 'mysql.metropolia.fi';
$dbname = 'joonaaa';

//Tietokantayhteys sulkeutuu automaattisesti kun </htm> eli sivun scripti loppuu
//Normaali olion elinkaari
try { //Avataan kahva tietokantaan
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    // virheenkäsittely: virheet aiheuttavat poikkeuksen
    $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    // käytetään  yleistä merkistöä utf8
    $DBH->exec("SET NAMES utf8;");
} catch(PDOException $e) {
    echo "Yhteysvirhe.";
    file_put_contents('log/dbERRORS.txt', 'Connection: '.$e->getMessage()."\n", FILE_APPEND);
}//HUOM hakemistopolku!

function redirect($url){
    if (!headers_sent()){    //If headers not sent yet... then do php redirect
        header('Location: '.$url); exit;
    }else{            //If headers are sent... do java redirect... if java disabled, do html redirect.
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; exit;
    }
}

function SSLon() {
    if ($_SERVER ['HTTPS'] != 'on') {
        $url = "https://" . $_SERVER ['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        redirect ( $url );
    }
}
/**
 * Turn Off HTTPS -- Detect if HTTPS, if so, then turn off HTTPS:
 */
function SSLoff() {
    if ($_SERVER ['HTTPS'] == 'on') {
        $url = "http://" . $_SERVER ['HTTP_HOST'] . $_SERVER ['REQUEST_URI'];
        redirect ( $url );
    }
}

function login($user, $pwd, $DBH) {
    $hashpwd = hash('md5', $pwd.'!!');
    $data = array('Email' => $user, 'Passwrd' => $hashpwd);

    try {
        $STH = $DBH->prepare("SELECT * FROM Users WHERE Email=:Email AND Passwrd = :Passwrd");
        $STH->execute($data);
        $STH->setFetchMode(PDO::FETCH_OBJ);
        $row = $STH->fetch();

        if($STH->rowCount() > 0){
            return $row;
        } else {
            return false;
        }
    } catch(PDOException $e) {
        echo "Login DB error.";
        file_put_contents('log/dbERRORS.txt', 'Login: '.$e->getMessage()."\n", FILE_APPEND);
    }
}
?>
