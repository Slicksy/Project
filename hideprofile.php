<?php
require_once ('config.php');
if(!empty($_SESSION['ID'])) {

    echo('<li class="nav-item">
                        <a class="nav-link" href="profile.php">Profile</a>
                        </li>');
    }
    
?>