<?php
    session_start();

    
    session_destroy();  
    echo "<Script>alert('You are now Log out......');
            window.open('index.php', '_self');        
        </Script>";  
?>