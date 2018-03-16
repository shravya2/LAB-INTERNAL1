<?php
    
if(isset($_post["sub"])
{
    include 'dbconfig.php';
          $name=$_post['name'];
          $pass=$_post['pass'];
          $email=$_post['email'];
          $phoneno=$_post['phoneno'];
    $sql="insert into 'user'('name','pass','email','phoneno')values("'$name','$pass','$email','$phoneno'")";
          mysqli_query($conn,$sql)or die("connection failed".mysqli($conn));
}

?>
