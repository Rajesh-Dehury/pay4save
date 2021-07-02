<?php
    session_start();

    
    session_destroy();    
    echo "<Script>alert('You are now Log out');</Script>";
    header('location:index.php');
?>