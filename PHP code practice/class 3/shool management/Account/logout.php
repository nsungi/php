<?php 
    session_start();

    session_destroy();

    header ('location: ../Account/signIn.php');
?>