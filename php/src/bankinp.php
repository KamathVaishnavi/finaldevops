<?php
session_id('mySessionID');
session_start();

$connection=mysqli_connect('db','vaishnavi','vaishnavi123');
if($connection){
    // echo "Connection established";

}
else {
    echo"failed";
}
mysqli_select_db($connection,'payverse');
$accno=$_POST['accno'];
$bal=$_POST['balance'];

$loginid=$_SESSION['email'];
// echo"$bal $accno $loginid";
$data="update bank_account set accno='$accno'  where loginid='$loginid'";

mysqli_query($connection,$data);
$data="update bank_account set  balance='$bal' where loginid='$loginid'";
mysqli_query($connection,$data);

session_unset();
session_destroy();
header('location:regsuccess.html');


?>
