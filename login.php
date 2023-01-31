<?php 
session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: index.php"); 
    exit;
}

require 'koneksi.php';

if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user  WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {

            // set session
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        }
    }

    $error = true;

}

?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Login Form | CodingLab </title>--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
.center h1{
  text-align: center;
}
html, body{
  display: grid;
  height: 100vh;
  width: 100%;
  place-items: center;
  background: linear-gradient(to right, #438BC9 0%, #438BC9 100%);
}
::selection{
  background: #084479;
}
.container{
  background: #fff;
  height: 53vh;
  max-width: 350px;
  width: 100%;
  padding: 25px 25px;
  border-radius: 45px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);
}
.container form .title{
  font-size: 30px;
  font-weight: 600;
  margin: 20px 0 10px 0;
  position: relative;
}
.container form .input-box{
  width: 100%;
  height: 45px;
  margin-top: 25px;
  position: relative;
}
.container form .input-box input{
  width: 100%;
  height: 100%;
  outline: none;
  font-size: 16px;
  border: none;
}
.container form .underline::before{
  content: '';
  position: absolute;
  height: 2px;
  width: 100%;
  background: #ccc;
  left: 0px;
  bottom: 0;
}
.container form .input-box input:focus ~ .underline::after,
.container form .input-box input:valid ~ .underline::after{
  transform: scaleX(1);
  transform-origin: center;
}
.container form .button{
  margin: 40px 0 20px 0;
}
.container .input-box input[type="submit"]{
  background: linear-gradient(to right, #438BC9 0%, #438BC9 100%);
  font-size: 18px;
  color: #fff;
  border-radius: 50px;
  cursor: pointer;
  transition: all 0.3s ease;
  margin-bottom: 10px;
  width: 100%;
}
.container .input-box input [type="submit"]:hover{
  letter-spacing: 1px;
  background: linear-gradient(to left, #438BC9 0%, #438BC9 100%);
}
.container .checkbox {
  box-sizing: border-box;
  text-align: left;
}
form .content .checkbox{
  width: 100%;
  right: 100px;
  display: flex;
  align-items: center;
  justify-content:center;
}
.container {
  font-size: 14px;
  text-align: center;
}
.container form .icheck-succes{
  margin-right: 180px;
  margin-top: 20px;
}
     </style>
  </head>
  <body>
    <div class="container">
      <form action="" method="post">
       <div class="center">
        <h1>METABOX</h1>
       </div>
       <?php if( isset($error) ) : ?>
            <p style="color: red; font-style: italic;">username / password salah</p>
        <?php endif; ?>
        <div class="input-box underline">
          <label for="username"></label>
          <input type="text" name="username" id="username" placeholder="Username" required>
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <label for="password"></label>
          <input type="password" name="password" id="password" placeholder="Password" required>
          <div class="underline"></div>
        </div>
          <div class="content">
            <div class="icheck-succes">
            <input type="checkbox" id="Remember">
            <label for="Remember">Remember Me</label>
          </div>
        </div>
        <div class="input-box button">
          <input type="submit" name="login" value="Login">
        </div>
          <div class="signup-link">
            Belum punya akun?<a href="registrasi.php">Daftar</a>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>