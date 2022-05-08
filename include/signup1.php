<?php ob_start();?> 
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body>


<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,200|Montserrat:700' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	.no-select {
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -o-user-select: none;
  user-select: none;
}

::-webkit-input-placeholder {
  color: #96a1b2;
  opacity: 1;
}

:-moz-placeholder {
  color: #96a1b2;
  opacity: 1;
}

::-moz-placeholder {
  color: #96a1b2;
  opacity: 1;
}

:-ms-input-placeholder {
  color: #96a1b2;
  opacity: 1;
}

body {
  margin: 0;
  padding: 0;
  background: url(wp.jpg);
  background-size: cover;
  font-family: sans-serif;
}

header {
  background: transparent;
  padding: 5px 0;
  margin: 0;
/*  opacity:0.52;*/
}

h1 {
  font-family: 'Montserrat', sans-serif;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 36px;
  color: white;
}
h1 i {
  margin-right: 20px;
}

section {
  width: 60%;
  min-width: 400px;
  max-width: 900px;
  margin: 30px auto;
  position: relative;
  z-index: 1;

}

h3 {
  letter-spacing: .3px;
  text-transform: uppercase;
  color: #213042;
}

input, button {
  border: 0;
  height: 50px;
  padding: 0 20px;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-transition: all, 0.4s, ease;
  -o-transition: all, 0.4s, ease;
  -webkit-transition: all, 0.4s, ease;
  transition: all, 0.4s, ease;
  width: 100%;
  display: block;
  margin: 0 0 15px;
  font-size: 16px;
  border: 3px solid transparent;
  outline: none;
}
input:focus, button:focus {
  border: 3px solid #24C7D9;
}

button {
  cursor: pointer;
  border: 0;
  background: #ffd200;
  color: #213042;
  padding: 0 60px;
  height: 60px;
  line-height: 60px;
  font-family: 'Montserrat', sans-serif;
  font-weight: 700;
}
button:focus {
  border: 0;
}
button:hover {
  background: #213042;
  color: #ffd200;
}

.v1 {
  text-align: center;
  border-bottom: 1px solid #D0DDEA;
  height: 30px;
}
.v1 i {
  color: yellow;
  /*background: #e9eff7;*/
  cursor: pointer;
  text-align: center;
  width: 60px;
  height: 60px;
  line-height: 60px;
  -moz-transition: all, 0.6s, ease;
  -o-transition: all, 0.6s, ease;
  -webkit-transition: all, 0.6s, ease;
  transition: all, 0.6s, ease;
}

.v2 {
  text-align: center;
  height: 60px;
}
.v2:after {
  content: '';
  width: 100%;
  height: 1px;
  display: block;
  position: relative;
  z-index: -1;
  margin-top: -30px;
  border-bottom: 1px solid #D0DDEA;
}
.v2 div {
  margin: 0 auto;
  cursor: pointer;
  -moz-transition: all, 0.4s, ease;
  -o-transition: all, 0.4s, ease;
  -webkit-transition: all, 0.4s, ease;
  transition: all, 0.4s, ease;
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  padding-top: 18px;
  height: 60px;
  width: 60px;
  border-radius: 60px;
  background: #e9eff7;
}
.v2 div i {
  display: block;
  margin: auto;
  height: 3px;
  width: 30px;
  background: #213042;
}
.v2 div:before,
.v2 div:after {
  content: "";
  margin: 0 auto;
  display: block;
  width: 30px;
  height: 3px;
  background: #213042;
  -moz-transition: all, 0.3s, ease;
  -o-transition: all, 0.3s, ease;
  -webkit-transition: all, 0.3s, ease;
  transition: all, 0.3s, ease;
}
.v2 div:before {
  margin-bottom: 7px;
}
.v2 div:after {
  margin-top: 7px;
}
.v2 div.close i {
  display: none;
}
.v2 div.close:before {
  -webkit-transform: rotate(45deg) translate(7px, 7px);
  -moz-transform: rotate(45deg) translate(7px, 7px);
  -ms-transform: rotate(45deg) translate(7px, 7px);
  -webkit-transform: rotate(45deg) translate(7px, 7px);
  transform: rotate(45deg) translate(7px, 7px);
  background: #24C7D9;
}
.v2 div.close:after {
  -webkit-transform: rotate(-45deg) translate(0, 0);
  -moz-transform: rotate(-45deg) translate(0, 0);
  -ms-transform: rotate(-45deg) translate(0, 0);
  -webkit-transform: rotate(-45deg) translate(0, 0);
  transform: rotate(-45deg) translate(0, 0);
  background: #24C7D9;
}

.open i {
  -webkit-transform: rotate(270deg) translate(0, 0);
  -moz-transform: rotate(270deg) translate(0, 0);
  -ms-transform: rotate(270deg) translate(0, 0);
  -webkit-transform: rotate(270deg) translate(0, 0);
  transform: rotate(270deg) translate(0, 0);
  color: #24C7D9;
}

.expansive {
  display: none;
}



/*
button*/
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



/*body {
  background: #1f1a25;
  display: -webkit-box;
  display: flex;
  -webkit-box-align: center;
          align-items: center;
  -webkit-box-pack: center;
          justify-content: center;
  min-height: 100vh;
}
*/

</style>



<?php


if (isset($_POST['signup'])) {
	# code...

	include 'db.php';

	 $user_name = $_POST['username'];
	 $user_password = $_POST['password'];
	 $user_firstname = $_POST['firstname'];
	 $user_lastname = $_POST['lastname'];
	 $user_email = $_POST['email'];
	 $user_contact_no = $_POST['contact'];
	 $guj_item_1 = $_POST['guj_item_1'];
	 $guj_item_2 = $_POST['guj_item_2'];
	 $kath_item_1 = $_POST['kath_item_1'];
	 $kath_item_2 = $_POST['kath_item_2'];
	 $raj_item_1 = $_POST['raj_item_1'];
	 $raj_item_2 = $_POST['raj_item_2'];
	 $pun_item_1 = $_POST['pun_item_1'];
	 $pun_item_2 = $_POST['pun_item_2'];
	 $sout_item_1 = $_POST['sout_item_1'];
	 $sout_item_2 = $_POST['sout_item_2'];


$query = "INSERT INTO users(user_name,user_password,user_firstname,user_lastname,user_email,guj_item_1,guj_item_2,kath_item_1,kath_item_2,raj_item_1,raj_item_2,pun_item_1,pun_item_2,sout_item_1,sout_item_2,user_contact_no) ";

	$query .="VALUES('{$user_name}','{$user_password}','{$user_firstname}','{$user_lastname}','{$user_email}','{$guj_item_1}','{$guj_item_2}','{$kath_item_1}','{$kath_item_2}','{$raj_item_1}','{$raj_item_2}','{$pun_item_1}','{$pun_item_2}','{$sout_item_1}','{$sout_item_2}',{$user_contact_no})";


	$create_user_query = mysqli_query($connection,$query);	

	if (!$create_user_query) {
                                                       

        print $connection->error;
    }




	header("Location: login.php");

}


?>






<body>
  <header>
    <section>
      <h1 style="text-align: center; color: black;">FOODWALL</h1>
      <h3 style="color: black; text-align: center;">Sign Up</h3>
    </section>

  </header>
  <section>
    
<a href="restsignup.php"><button class="btn draw-border" style="font-size: 20px;">Restaurant Signup</button></a>
    <form action=" " method="post">
    <label style="font-size:20px; color: white;">Username</label>
    <input type="text" name="username" required="">
    <label style="font-size:20px; color: white;">Password</label>
    <input type="password" name="password" required="">
    <label style="font-size:20px; color: white;">Firstname</label>
    <input type="text" name="firstname" required="">
    <label style="font-size:20px; color: white;">Lastname</label>
    <input type="text" name="lastname" required="">
    <label style="font-size:20px; color: white;">Email</label>
    <input type="email" name="email" required="">
    <label style="font-size:20px; color: white;">Contact No</label>
    <input type="number" name="contact" required="">



    <div class="expansive-button v1">
      <i class="fa fa-angle-double-down" style="font-size:48px;"></i>
    </div>
    
    <div class="expansive">
      <h3>Your Prefrence</h3>

      <h5 style="font-size:20px; color: white;">Gujarati Dish</h5>
      <label style="font-size:20px; color: white;">Item 1</label>
    <input type="text" name="guj_item_1" required="">
     <label style="font-size:20px; color: white;">Item 2</label>
    <input type="text" name="guj_item_2" required="">
   

    <h5 style="font-size:20px; color: white;">Kathiyawadi Dish</h5>
      <label style="font-size:20px; color: white;">Item 1</label>
    <input type="text" name="kath_item_1" required="">
     <label style="font-size:20px; color: white;">Item 2</label>
    <input type="text" name="kath_item_2" required="">

       
	<h5 style="font-size:20px; color: white;">Rajasthani Dish</h5>
      <label style="font-size:20px; color: white;">Item 1</label>
    <input type="text" name="raj_item_1" required="">
     <label style="font-size:20px; color: white;">Item 2</label>
    <input type="text" name="raj_item_2" required="">

	<h5 style="font-size:20px; color: white;">Punjabi Dish</h5>
      <label style="font-size:20px; color: white;">Item 1</label>
    <input type="text" name="pun_item_1" required="">
     <label style="font-size:20px; color: white;">Item 2</label>
    <input type="text" name="pun_item_2" required="">

	<h5 style="font-size:20px; color: white;">SouthIndian Dish</h5>
      <label style="font-size:20px; color: white;">Item 1</label>
    <input type="text" name="sout_item_1" required="">
     <label style="font-size:20px; color: white;">Item 2</label>
    <input type="text" name="sout_item_2" required="">






    <br />

    <!-- <div class="expansive-button v2">
      <div><i></i></div>
    </div>

    <div class="expansive">
      <h3>Advanced Options</h3>
      <input placeholder="Advanced Option #1">
      <input placeholder="Advanced Option #2">
    </div>
     -->
    <br/><br />
    
    <button name="signup">Go go go!</button>
    </form>

  </section>









  <script type="text/javascript">
  	$(".v1").unbind('click').click(function() {
  $(this).toggleClass('open');
  $(this).next().stop().animate({
    height: "toggle",
    opacity: "toggle"
  }, "slow");
});
$(".v2 div").unbind('click').click(function() {
  $(this).toggleClass('close');
  $(this).parent().next().stop().animate({
    height: "toggle",
    opacity: "toggle"
  }, "slow");
});
  </script>
</body>
</html>