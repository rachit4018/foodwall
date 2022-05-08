<?php 


                          if (isset($_GET['user_id'])) {
                            # code...
                            $the_user_id = $_GET['user_id'];

                          }

                                    $query ="select * from users WHERE user_id = $the_user_id";
                                    $select_users_by_id = mysqli_query($connection,$query);

                                    while ($row = mysqli_fetch_assoc($select_users_by_id)) {
                  
                                    $user_id = $row['user_id'];   
                                    $user_name = $row['user_name'];
                                    $user_firstname = $row['user_firstname'];
                                    $user_lastname = $row['user_lastname'];  
                                    $user_email = $row['user_email'];
                                    $user_role = $row['user_role'];
                                    // $user_image = $row['user_image'];
                                    $user_contact_no = $row['user_contact_no'];




                                  }


                      if (isset($_POST['update_user'])){
                         # code...


                         
                          // if (!$user_image) {
                          //   # code...

                          //           $user_image = $_FILES['user_image']['name'];
                          //           $user_image_temp= $_FILES['user_image']['tmp_name'];
                          //           move_uploaded_file($user_image_temp, "images/$user_image");
                          // }

                                    $user_name= $_POST['user_name'];
                                    $user_firstname= $_POST['user_firstname'];
                                    $user_lastname= $_POST['user_lastname'];
                                    $user_email= $_POST['user_email'];
                                    $user_role= $_POST['user_role'];
                                    // $user_image= $_FILES['user_image']['name'];
                                    // $user_image_temp=$_FILES['user_image']['tmp_name'];
                                    $post_contact_no= $_POST['user_contact_no'];




                                    // move_uploaded_file($user_image_temp,"images/$user_image");


                                    


                        // if (empty($user_image)) {
                        //   # code...
                        //   $query = "SELECT * FROM users WHERE user_id = $the_user_id ";
                        //   $select_image = mysqli_query($connection,$query);
                        //   while ($row = mysqli_fetch_array($select_image)) {
                        //     # code...
                        //     $user_image = $row['user_image'];

                        //   }
                        // }




                          $the_user_id = $_GET['user_id'];
                          $query = "UPDATE users SET ";
                          $query .="user_name = '{$user_name}', ";
                          $query .="user_firstname = '{$user_firstname}', ";
                          $query .="user_lastname = '{$user_lastname}', ";
                          $query .="user_email = '{$user_email}', ";
                          $query .="user_role = '{$user_role}', ";
                          // $query .="user_image = '{$user_image}', ";
                          $query .="user_contact_no = {$user_contact_no} ";
                          $query .="WHERE user_id = {$user_id}";




                          $update_query = mysqli_query($connection,$query);



                          if (!$update_query) {
                            # code...
                            print $connection->error;
                          }




                       } 


 ?>







 <form class="form-horizontal" action=" "  method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username</label>
      <div class="col-sm-10">
        <input type="text" value="<?php echo $user_name; ?>" min="1" class="form-control" id="username" placeholder="" name="user_name">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="firsname">Firstname</label>
      <div class="col-sm-10">
        <input type="text" value="<?php echo $user_firstname; ?>" class="form-control" id="firsname" placeholder="" name="user_firstname">
      </div>
    </div>


<div class="form-group">
      <label class="control-label col-sm-2" for="lastname">Lastname</label>
      <div class="col-sm-10">
        <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" id="lastname" name="user_lastname">
      </div>
    </div>


 <div class="form-group">
      <label class="control-label col-sm-2" for="email">Email</label>
      <div class="col-sm-10">
        <input type="email" value="<?php echo $user_email; ?>" class="form-control" id="email" name="user_email">
      </div>
    </div>


  <div class="form-group">
      <label class="control-label col-sm-2" for="role">User Role</label>
      <div class="col-sm-10">
        <!-- <input type="text" class="form-control" id="category" name="category"> -->
        <select name="user_role" value="<?php echo $user_role; ?>">
          
          <option>admin</option>
          <option>user</option>
        </select>

      </div>
    </div>


    <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="Image">Image</label>
      <div class="col-sm-10">
      <img width="500" height="250" src="../images/<?php  echo $user_image; ?>">

        <input type="file" name="user_image">
      </div>  
    </div>
 -->



     <div class="form-group">
      <label class="control-label col-sm-2" for="resturant">Contact</label>
      <div class="col-sm-10">
        <input type="number"  value="<?php echo $user_contact_no; ?>" class="form-control" id="contact" name="user_contact_no">
      </div>
    </div>




    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="update_user" value="Update User" class="btn btn-primary">
      </div>
    </div>
  </form>
