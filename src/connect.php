<?php
    $con = mysqli_connect('localhost', 'root', '','sut_sport');
    $con->query("SET NAMES UTF8");
    if ($con -> error ){
        echo "Failed to connect : " . $con -> error;
    }
?>