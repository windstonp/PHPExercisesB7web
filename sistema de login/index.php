<?php
    session_start();
    if (isset($_SESSION["id"]) && !empty($_SESSION["id"])) {
        echo "area restrita";
    }else{
        
    }
?>
