<?php
require_once ("config.php");
?>

<?php
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    redirect("index.php");
}
?>