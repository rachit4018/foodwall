<?php

include "db.php";

if (isset($_POST['sign-up'])) {
	# code...
	header("Location: signup.php");
}

if (isset($_POST['sign-in'])) {
	# code...
	$username = $_POST['username'];
	$password = $_POST['password'];


	// $username = mysqli_real_escape_string($connection,$username);
	// $password = mysqli_real_escape_string($connection,$password);

	$query = "SELECT * FROM users WHERE user_name = '{$username}' AND user_password = '{$password}' ";
	$select_user_query = mysqli_query($connection,$query);
	if (!$select_user_query) {
		# code...
		print $connection->error;

	}


	while ($row = mysqli_fetch_array($select_user_query)) {
		# code...
		 $db_username = $row['user_name'];
		 $db_password = $row['user_password'];


	}


	if ($username !== $db_username && $password !== $db_password) {
		# code...
		echo "<h1>Username or Password is incorrect</h1>";
		header("Location: index.php");
	}
	elseif ($username == 'admin' && $password == 'admin') {
		# code...
		// echo "hii";
		header("Location: admin/index.php");
	}
	else {
		# code...
		header("Location: main.php?user_name={$db_username}");

	}
}




  ?>



  <!DOCTYPE html>
  <html>
  <head>
  	<title>Login</title>
  	<style type="text/css">
  		body {
  margin: 0;
  padding: 0;
  background: url(wallpaper.jpg);
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


.btn .btn-primary .btn-lg
{

  border: none;
  outline: none;
  color: #fff;
  background-color: #03a9f4;
  padding: 0.625rem 1.25rem;
  cursor: pointer;
  border-radius: 0.312rem;
  font-size: 1rem;	
}



.draw-border {
  box-shadow: inset 0 0 0 4px #58afd1;
  color: white;
  -webkit-transition: color 0.25s 0.0833333333s;
  transition: color 0.25s 0.0833333333s;
  position: relative;

}
.draw-border::before, .draw-border::after {
  border: 0 solid transparent;
  box-sizing: border-box;
  content: '';
  pointer-events: none;
  position: absolute;
  width: 0;
  height: 0;
  bottom: 0;
  right: 0;
}
.draw-border::before {
  border-bottom-width: 4px;
  border-left-width: 4px;
}
.draw-border::after {
  border-top-width: 4px;
  border-right-width: 4px;
}
.draw-border:hover {
  color: #ffe593;
}
.draw-border:hover::before, .draw-border:hover::after {
  border-color: #ffe593;
  -webkit-transition: border-color 0s, width 0.25s, height 0.25s;
  transition: border-color 0s, width 0.25s, height 0.25s;
  width: 100%;
  height: 100%;
}
.draw-border:hover::before {
  -webkit-transition-delay: 0s, 0s, 0.25s;
          transition-delay: 0s, 0s, 0.25s;
}
.draw-border:hover::after {
  -webkit-transition-delay: 0s, 0.25s, 0s;
          transition-delay: 0s, 0.25s, 0s;
}

.btn {
  background: none;
  border: none;
  cursor: pointer;
  line-height: 1.5;
  font: 700 1.2rem 'Roboto Slab', sans-serif;
  padding: 1em 2em;
  letter-spacing: 0.05rem;
  

}
.btn:focus {
  outline: 2px dotted #55d7dc;
}

.btn .draw-border
{
	display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
 }


  	</style>
  </head>
  <body>
  	<div class="box">
  <h1 style="text-align: center; color: white;">FOODWALL</h1>
  <h2>Login</h2>
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
    <input type="submit" name="sign-in" value="Sign In" style="margin-left: 110px;">
    <br> <br>
   <!-- <a href="signup1.php"><button type="button" class="btn btn-primary btn-lg" style="box-sizing: all; margin-left: 124px;">Sign Up</button></a> -->
  
  </form>
 <a href="signup1.php"><button class="btn draw-border" name="sign-up" style="margin-left: 80px; "> Signup</button></a><br><br>
<a href="restsignin.php"><button class="btn draw-border" name="rest-signin" style="margin-left: 30px; "> Restaurant Signin</button></a>
</div>
  
  </body>
  </html>