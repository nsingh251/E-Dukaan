<?php
$conn=mysqli_connect("localhost","root","","admindb");
    if(!$conn){
        echo "not connected";
    }
    else echo "success";
    ?>
    