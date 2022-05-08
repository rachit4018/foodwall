<?php 


                          if (isset($_GET['p_id'])) {
                            # code...
                            $the_post_id = $_GET['p_id'];

                          }

                                    $query ="select * from posts WHERE post_id = $the_post_id";
                                    $select_posts_by_id = mysqli_query($connection,$query);

                                    while ($row = mysqli_fetch_assoc($select_posts_by_id)) {
                  
                                    $post_id= $row['post_id'];   
                                    $post_title= $row['post_title'];
                                    $post_image= $row['post_image'];
                                    $post_category_name= $row['post_category_name'];  
                                    $post_restuarant= $row['post_restaurant'];
                                    $post_price= $row['post_price'];
                                    $post_date_time= $row['post_date_time'];
                                    $post_status= $row['post_status'];
                                    $post_tags = $row['post_tags'];
                                    $post_content = $row['post_content'];
                                    $post_contact_no = $row['post_contact_no'];




                                  }


                      if (isset($_POST['update_post'])){
                         # code...


                         
                          if (!$post_image) {
                            # code...

                                    $post_image = $_FILES['image']['name'];
                                    $post_image_temp= $_FILES['image']['tmp_name'];
                                    move_uploaded_file($post_image_temp, "images/$post_image");
                          }

                                    $post_id= $_POST['post_id'];   
                                    $post_title = $_POST['post_title'];
                                    
                                    $post_category_name= $_POST['post_category_name'];  
                                    $post_restaurant= $_POST['post_restaurant'];
                                    $post_price= $_POST['post_price'];
                                    //$post_date_time= $_POST['post_date_time'];
                                    $post_status= $_POST['post_status'];
                                    $post_tags = $_POST['post_tags'];
                                    $post_content = $_POST['post_content'];
                                    $post_contact_no = $_POST['post_contact_no'];


                                    


                        if (empty($post_image)) {
                          # code...
                          $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
                          $select_image = mysqli_query($connection,$query);
                          while ($row = mysqli_fetch_array($select_image)) {
                            # code...
                            $post_image = $row['post_image'];

                          }
                        }





                          $query = "UPDATE posts SET ";
                          $query .="post_title = '{$post_title}', ";
                          $query .="post_image = '{$post_image}', ";
                          $query .="post_category_name = '{$post_category_name}', ";
                          $query .="post_restaurant = '{$post_restaurant}', ";
                          $query .="post_price = {$post_price}, ";
                          $query .="post_date_time = now(), ";
                          $query .="post_status = '{$post_status}', ";
                          $query .="post_tags = '{$post_tags}', ";
                          $query .="post_content = '{$post_content}', ";
                          $query .="post_contact_no = {$post_contact_no} ";
                          $query .="WHERE post_id = {$the_post_id}";




                          $update_query = mysqli_query($connection,$query);



                          if (!$update_query) {
                            # code...
                            print $connection->error;
                          }




                       } 


 ?>







<form class="form-horizontal" action=" "  method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Post Title</label>
      <div class="col-sm-10">
        <input value="<?php echo $post_title; ?>" type="text" min="1" class="form-control" id="title" placeholder="" name="post_title">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="id">Post ID</label>
      <div class="col-sm-10">
        <input value="<?php echo $post_id; ?>"type="number" class="form-control" id="post_id" placeholder="" name="post_id">
      </div>
    </div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="Category">Category</label>
    <div class="col-sm-10">
       <!--  <input value ="<?php //echo $post_category_name; ?>" type="text" class="form-control" id="category" name="post_category_name"> -->

      <select name="post_category_name">
       <?php  


            include 'selectcat.php';


      ?>
     </select>
 </div> 
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="Image">Image</label>
      <div class="col-sm-10">
      <img width="500" height="250" src="../images/<?php  echo $post_image; ?>">

        <input type="file" name="post_image">
      </div><br><br>
      
    </div>



    <div class="form-group">
      <label class="control-label col-sm-2" for="resturant">Resturant</label>
      <div class="col-sm-10">
        <input value="<?php echo $post_restuarant; ?>" type="text" class="form-control" id="resturant" name="post_restaurant">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="price">Price</label>
      <div class="col-sm-10">
        <input value="<?php echo $post_price; ?>"type="text" class="form-control" id="price" name="post_price">
      </div>
    </div>

  

    
    <div class="form-group">
      <label class="control-label col-sm-2" for="resturant">Post tags</label>
      <div class="col-sm-10">
        <input value="<?php echo $post_tags; ?>"type="text" class="form-control" id="tags" name="post_tags">
      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="resturant">Post status</label>
      <div class="col-sm-10">
        <input value="<?php echo $post_status; ?>"type="text" class="form-control" id="tags" name="post_status">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="resturant">Description</label>
      <div class="col-sm-10">
        <input value="<?php echo $post_content; ?>" type="text" class="form-control" id="content" name="post_content">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="resturant">Contact</label>
      <div class="col-sm-10">
        <input value="<?php echo $post_contact_no; ?>" type="number" class="form-control" id="contact" name="post_contact_no">
      </div>
    </div>




    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="update_post" value="Update Post" class="btn btn-primary">
      </div>
    </div>
  </form>
