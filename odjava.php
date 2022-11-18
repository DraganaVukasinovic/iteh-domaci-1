<?php 

    session_start();
    session_unset();
    session_destroy();
    $_SESSION["prijavljen"] = false;
    header("Location: index.php");

?>