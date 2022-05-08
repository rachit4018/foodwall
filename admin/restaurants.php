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
  background: url(../include/wp.jpg);
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


include "../include/db.php";

if (isset($_GET['rest_name'])) {
                            # code...
  $the_rest_name = $_GET['rest_name'];

    }


$query = " SELECT * FROM restaurants WHERE rest_name = '$the_rest_name' ";
$select_rest_name = mysqli_query($connection,$query);

while($row = mysqli_fetch_assoc($select_rest_name)) {

$rest_name = $row['rest_name'];

}
print $connection->error;




if (isset($_POST['create_post'])) {
  
  $post_title= $_POST['title'];
  $post_category_name= $_POST['select_cat'];
  $post_image = $_FILES['image']['name'];
  $post_image_temp = $_FILES['image']['tmp_name'];
  $post_restaurant= $_POST['resturant'];
  $post_price= $_POST['price'];
  // $post_date= $_POST['date'];
  $post_date = date('d-m-y');

  // $post_comment_count =4;
  $post_status = 'available';

  $post_tags= $_POST['tags'];
  $post_content= $_POST['content'];
  $post_contact_no= $_POST['contact'];




  // move_uploaded_file($post_image_temp,"admin/images/$post_image");
  move_uploaded_file($post_image_temp, "images/$post_image");



if (!$post_image) {
                            # code...

                                    $post_image = $_FILES['image']['name'];
                                    $post_image_temp= $_FILES['image']['tmp_name'];
                                    move_uploaded_file($post_image_temp, "images/$post_image");
     }


  $query = "INSERT INTO posts(post_category_name,post_title,post_price,post_restaurant,post_date_time,post_image,post_tags,post_status,post_content,post_contact_no) ";

  $query .="VALUES('{$post_category_name}','{$post_title}',{$post_price},'{$post_restaurant}',now(),'{$post_image}','{$post_tags}','{$post_status}','{$post_content}','{$post_contact_no}')";


  $create_post_query = mysqli_query($connection,$query);  

  if (!$create_post_query) {
                                                       

        print $connection->error;
    }




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
    








    <form action=" " method="post">
    <label style="font-size:20px; color: white;">Post Title</label>
    <input type="text" name="title" required="">
    <label style="font-size:20px; color: white;">Category</label>
    <br>
    <select name="select_cat">
          
          <?php

          include 'include/db.php';
          $query = "SELECT * FROM categories ";
          $select_cat = mysqli_query($connection,$query);
          while ($row = mysqli_fetch_assoc($select_cat)) {
            # code...
            $cat_id = $row['c_id'];
            $cat_title = $row['cat_tittle'];
            print $connection->error;

            echo "<option>{$cat_title}</option>";

          }




            ?>

        </select>
        <br><br>
    <label style="font-size:20px; color: white;">Image</label>
    <input type="file" name="image" required="">
    <label style="font-size:20px; color: white;">Restaurant</label>
    <input type="text" name="resturant" required="" value="<?php echo $the_rest_name; ?>">
    <label style="font-size:20px; color: white;">Price</label>
    <input type="number" name="price" required="">
    <label style="font-size:20px; color: white;">Post tags</label>
    <input type="text" name="tags" required="">
    <label style="font-size:20px; color: white;">Description</label>
    <input type="text" name="content" required="">
    <label style="font-size:20px; color: white;">Contact</label>
    <input type="number" name="contact" required="">
   

    
    <button name="create_post">ADD DISH</button>

    </form>
    <a href="../include/restsignin.php"><button class="btn draw-border" name="rest-signin" style="margin-left: 01px; ">Logout</button></a>

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