<?php
    if(isset($_POST['sub']))
      {
          $name=$_post['name'];
          $pass=$_post['pass'];
          $email=$_post['email'];
          $phoneno=$_post['phoneno'];
          $servername="localhost";
          $password="";
          $dbname="newsupdate";
          $db=mysqli_connect("localhost","","",);
          $conn=new mysqli($servername,$dbname);
          if($conn->connect_error)
          {
              echo"$serveranme,$dbname";
               die" connection failed";
          }
          $sql="insert into 'user'('name','pass','email','phoneno')values("'$name','$pass','$email','$phoneno'")";
          mysqli_query($conn,$sql)or die("connection failed".mysqli($conn));
?>

<!DOCTYPE html>
<html>
<head>
<title>REGISTER</title>
<body>
    <p>FIRST YOU HAVE TO REGISTER.</p>
    <form>
           <div>
            <form method="action"method="">
                    NAME
                    <input type="text"value=""name="name"placeholder="enter your name"/></br>
                    PASSWORD
                    <input type="password"value=""name="pass"placeholder="enter your password"/></br>
                    E-MAIL
                    <input type="email" value=""name="email"palceholder="enter your e-mail"/><br>
                    PHONENO
                    <input type="text"value=""name="phoneno"placeholder="enter your phoneno"/></br>
                    <input type="button"value="sub"name="try it"/>
                    </form>
    </div>
    </form>
</body>
</html>

