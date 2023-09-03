<?php
 session_id('mySessionID1');
 session_start();
$connection=mysqli_connect('db','vaishnavi','vaishnavi123');
// session_unset();
if($connection){
    // echo "Connection established";

}
else {
    echo"failed";
}
mysqli_select_db($connection,'payverse');

$uname=$_POST['username'];
$pwd=$_POST['pass'];

$query="select * from login_info where password='$pwd' and loginid='$uname'";
$result=mysqli_query($connection,$query);
if(mysqli_num_rows($result)==1){
  $_SESSION['username']= $uname;
  $_SESSION['password']= $pwd;
if(isset( $_SESSION['username'] ) )
header('location:home.html');
echo"true";
echo"Username or Password correct $uname and $pwd";

}
else{
    echo "Login Unsuccessful";
}

?>



