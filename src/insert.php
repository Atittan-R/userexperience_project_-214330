<?php 
    include('connect.php');

    $uname = $_POST['reg_usr'];
    $email = $_POST['reg_email'];
    $pass = md5($_POST['reg_pass']);

    $sql = 'INSERT INTO user(username, email, password) VALUES (\''.$uname.'\',\''.$email.'\',\''.$pass.'\')';

    echo $sql;
    echo "<br>";

    $rs = $con->query($sql);

    if($rs){
        echo "Success";
        header("Location: index.php");
    }
    else{
        echo "Error".$con -> error ;
    }
?>