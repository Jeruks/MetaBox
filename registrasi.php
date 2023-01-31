<?php 
require 'functions.php';

if( isset($_POST["register"]) ) {

    if( registrasi($_POST) > 0 ) {
        echo "<script>alert('Berhasil Registrasi!');window.location='login.php'</script>";
    } else {
        echo mysqli_error($conn);
    }
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
  height: 60vh;
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
  left: 0;
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
  border-radius: 60px;
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
     </style>
  </head>
  <body>
    <div class="container">
      <form action="" method="post">
       <div class="center">
        <h1>METABOX</h1>
       </div>
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
        <div class="input-box">
          <input type="password" name="password2" id="password2" placeholder="Konfirmasi Password" required>
          <div class="underline"></div>
        </div>
          <div class="content">
        </div>
        <div class="input-box button">
          <input type="submit" name="register" value="Register">
        </div>
        </div>
      </form>
    </div>
  </body>
</html>