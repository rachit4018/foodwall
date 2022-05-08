<!DOCTYPE html>
<html>
<head>
	<title>add_user</title>
</head>
<body>




	
  <h2>Add User</h2>



<?php


if (isset($_POST['create_user'])) {
	

	$user_name= $_POST['user_name'];
	$user_firstname= $_POST['user_firstname'];
	$user_lastname= $_POST['user_lastname'];
  $user_email= $_POST['user_email'];
  $user_role= $_POST['user_role'];
	// $user_image= $_FILES['user_image']['name'];
	// $user_image_temp=$_FILES['user_image']['tmp_name'];
	$post_contact_no= $_POST['user_contact_no'];




	// move_uploaded_file($user_image_temp,"images/$user_image");



	$query = "INSERT INTO users(user_name,user_firstname,user_lastname,user_email,user_role,user_contact_no) ";

	$query .="VALUES('{$user_name}','{$user_firstname}','{$user_lastname}','{$user_email}','{$user_role}',{$user_contact_no})";


	$create_user_query = mysqli_query($connection,$query);	

	if (!$create_user_query) {
                                                       

        print $connection->error;
    }




}






  ?>





  <form class="form-horizontal" action=" "  method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username</label>
      <div class="col-sm-10">
        <input type="text" min="1" class="form-control" id="username" placeholder="" name="user_name">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="firsname">Firstname</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="firsname" placeholder="" name="user_firstname">
      </div>
    </div>


<div class="form-group">
      <label class="control-label col-sm-2" for="lastname">Lastname</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="lastname" name="user_lastname">
      </div>
    </div>


 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="email" name="user_email">
      </div>
    </div>


	<div class="form-group">
      <label class="control-label col-sm-2" for="role">User Role</label>
      <div class="col-sm-10">
        <!-- <input type="text" class="form-control" id="category" name="category"> -->
        <select name="user_role">
        	
        	<option>Admin</option>
          <option>User</option>
        </select>

      </div>
    </div>




     <div class="form-group">
      <label class="control-label col-sm-2" for="resturant">Contact</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="contact" name="user_contact_no">
      </div>
    </div>




    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="create_user" value="Add User" class="btn btn-primary">
      </div>
    </div>
  </form>













	</form>

</body>
</html>