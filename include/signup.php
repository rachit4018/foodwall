
<?php


if (isset($_POST['sign-up'])) {
  # code...
 $user_name = $_POST['username'];
 $password = $_POST['password'];
 $first_name = $_POST['firstname'];
 $last_name = $_POST['lastname'];
 $user_email = $_POST['email'];



header("Location: login.php");




}

?>






 <!DOCTYPE html>
  <html>
  <head>
    <title>Sign Up</title>
    <style type="text/css">
      body {
  margin: 0;
  padding: 0;
  background: url(wp.jpg);
  background-size: cover;
  font-family: sans-serif;
}

.box {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 25rem;
  padding: 2.5rem;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.6);
  border-radius: 0.625rem;
}

.box h2 {
  margin: 0 0 1.875rem;
  padding: 0;
  color: #fff;
  text-align: center;
}

.box .inputBox {
  position: relative;
}

.box .inputBox input {
  width: 100%;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: #fff;
  letter-spacing: 0.062rem;
  margin-bottom: 1.875rem;
  border: none;
  border-bottom: 0.065rem solid #fff;
  outline: none;
  background: transparent;
}

.box .inputBox label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0.625rem 0;
  font-size: 1rem;
  color: #fff;
  pointer-events: none;
  transition: 0.5s;
}

.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label,
.box .inputBox input:not([value=""]) ~ label {
  top: -1.125rem;
  left: 0;
  /*color: #03a9f4;*/
  font-size: 0.75rem;
}

.box input[type="submit"] {
  border: none;
  outline: none;
  color: #fff;
  background-color: #03a9f4;
  padding: 0.625rem 1.25rem;
  cursor: pointer;
  border-radius: 0.312rem;
  font-size: 1rem;
}

.box input[type="submit"]:hover {
  background-color: #1cb1f5;
}




    </style>
  </head>











  <body>
    <div class="box">
  <h1 style="text-align: center; color: white;">FOODWALL</h1>
  <h2>Sign Up</h2>
  <form action=" " method="post">
    <div class="inputBox">
      <input type="text" name="username" required onkeyup="this.setAttribute('value', this.value);" value="" >
      <label>Username</label>
    </div>
    
    <div class="inputBox">
      <input type="password" name="password" required value=""
             onkeyup="this.setAttribute('value', this.value);" required="">
      <label>Password</label>
    </div>
    <div class="inputBox">
      <input type="text" name="firstname" required onkeyup="this.setAttribute('value', this.value);" value="" >
      <label>Firstname</label>
    </div>
    <div class="inputBox">
      <input type="text" name="lastname" required onkeyup="this.setAttribute('value', this.value);" value="" >
      <label>Lastname</label>
    </div>
    <div class="inputBox">
      <input type="email" name="email" required onkeyup="this.setAttribute('value', this.value);" value="" >
      <label>Email</label>
    </div>
    <h4 style="color: white; text-align: center;">Give your prefered items</h4>
    <label style="color: white;">Gujarati</label>
    <br><br>
    <div class="inputBox">
      <input type="text" name="guj_item1" required onkeyup="this.setAttribute('value', this.value);" value="" >
      <label>Item 1</label>
    </div>
    <div class="inputBox">
      <input type="text" name="guj_item2" required onkeyup="this.setAttribute('value', this.value);" value="" >
      <label>Item 2</label>
    </div>
     <label style="color: white;">Rajasthani</label>
    <br><br>
    <div class="inputBox">
      <input type="text" name="guj_item1" required onkeyup="this.setAttribute('value', this.value);" value="" >
      <label>Item 1</label>
    </div>
    <div class="inputBox">
      <input type="text" name="guj_item2" required onkeyup="this.setAttribute('value', this.value);" value="" >
      <label>Item 2</label>
    </div>
    <input type="submit" name="sign-up" value="Sign Up" style="margin-left: 110px;">
   
  </form>

</div>
  
  </body>
  </html>