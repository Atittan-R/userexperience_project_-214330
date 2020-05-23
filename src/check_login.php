<?php
session_start();
include('connect.php');
$message=array();
if(isset($_POST['uname']) && !empty($_POST['uname'])){
    $uname=mysqli_real_escape_string($con,$_POST['uname']);
}else{
    $message[]='Please enter username';
}

if(isset($_POST['password']) && !empty($_POST['password'])){
    $password=mysqli_real_escape_string($con,$_POST['password']);
}else{
    $message[]='Please enter password';
}

$countError=count($message);

if($countError > 0){
     for($i=0;$i<$countError;$i++){
              echo ucwords($message[$i]).'<br/><br/>';
     }
}else{
    $password = md5($_POST['password']);
    $query="select * from user where email='$uname' and password='$password'";

    $res=$con->query($query);
    $checkUser=mysqli_num_rows($res);
    if($checkUser > 0){
        $row = $res -> fetch_array(MYSQLI_NUM);
        $uid = $row[1];
        $_SESSION['LOGIN_STATUS']=true;
        $_SESSION['UNAME']=$uid;
        echo 'correct';
        header("Location: index.php");
    }else{
         echo ucwords('please enter correct user details<br>');
         session_destroy();
    }
}
?>
<a href='index.php'> back to home</a>