<?php
      session_start();
      if(isset($_session['email']))
      header('location.first.php');
      if(isset($_POST['sub']))
      {
          $email=$_post['email'];
          $pass=$_post['pass'];
          $qry="SELECT*from'tbl_user'where user_email='$email'AND'user_pass='$pass'";
          $sql=mysqli_query({$sconn,$qry})or die("connenction failed:".mysqli());
          if(mysqli_num_rows($sql>0))
          {
              $row=mysqli_fetch_assoc($sql);
              $_session['user_pass']=$row['user_pass'];
              $_session['user_email']=$row['user_e-mail'];
              header('location:first.php');
          }
          else
          {
              $warning="invalid login";
          }
      }
?>
<!DOCTYPE html>
<html>
<head>
    <title>LOGIN PAGE</title>
    <link rel="stylesheet"href="style2.css">
    </head>
    <h3>TODAY<sup>'</sup>S NEWS</h3>
    <p><i>Here you can express your views by logging into your account.
        
    </i></p>
    <body>
        <center>
        <div>
                <form method="action"method="">
                        PASSWORD
                        <input type="password"value=""name="pass"placeholder="enter your password"/></br>
                        E-MAIL
                        <input type="email" value=""name="email"palceholder="enter your e-mail"/><br>
                        <input type="button"value="sub"name="try it"/>
                        </form>
        </div>
    </center>
    </body>
    </html>
