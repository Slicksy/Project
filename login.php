<?php
require_once('config.php');
?>
<?php
echo "lomakkeen tiedot";
var_dump($_POST);
$user = login($_POST['email'], $_POST['pwd'], $DBH);
if ($user) {


    print_r($user);
    echo "jeee!";
}else{
    echo "user not found";
}

if(!$user){
    $_SESSION['loggausvirhe'] = 'jep';
    redirect('index.php');
} else {
    unset($_SESSION['loggausvirhe']);
    echo "mooi".$user->Nickname;
    $_SESSION['kirjautunut'] = 'yes';
	$_SESSION['Username'] = $user->Nickname;
	$_SESSION['email'] = $user->Email;
	$_SESSION['ID'] = $user->USEID;
	echo "kirjautunut";
	print_r($_SESSION);
	redirect('index.php');

}
?>