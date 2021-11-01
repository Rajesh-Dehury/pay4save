<?php
    $con=mysqli_connect('localhost','root','','payforsave');

    if($con){
        // echo "Connected";
    }
    else{
        echo "not connected";
    }
?>