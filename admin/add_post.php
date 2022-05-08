<!DOCTYPE html>
<html>
<head>
	<title>add_post</title>
</head>
<body>




	
  <h2>Add Post</h2>



<?php


if (isset($_POST['create_post'])) {
	
	$post_title= $_POST['title'];
	$post_id= $_POST['id'];
	$post_category_name= $_POST['select_cat'];
	$post_image= $_FILES['image']['name'];
	$post_image_temp=$_FILES['image']['tmp_name'];


	$post_restaurant= $_POST['resturant'];
	$post_price= $_POST['price'];
	// $post_date= $_POST['date'];
	$post_date = date('d-m-y');

	// $post_comment_count =4;
	$post_status = 'available';

	$post_tags= $_POST['tags'];
	$post_content= $_POST['content'];
	$post_contact_no= $_POST['contact'];




	move_uploaded_file($post_image_temp,"images/$post_image");



	$query = "INSERT INTO posts(post_id,post_category_name,post_title,post_price,post_restaurant,post_date_time,post_image,post_tags,post_status,post_content,post_contact_no) ";

	$query .="VALUES({$post_id},'{$post_category_name}','{$post_title}',{$post_price},'{$post_restaurant}',now(),'{$post_image}','{$post_tags}','{$post_status}','{$post_content}','{$post_contact_no}')";


	$create_post_query = mysqli_query($connection,$query);	

	if (!$create_post_query) {
                                                       

        print $connection->error;
    }




}






  ?>





  <form class="form-horizontal" action=" "  method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Post Title</label>
      <div class="col-sm-10">
        <input type="text" min="1" class="form-control" id="title" placeholder="" name="title">
      </div>
    </div>
    
     <div class="form-group">
      <label class="control-label col-sm-2" for="id">Post ID</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="post_id" placeholder="" name="id">
      </div>
    </div>

	<div class="form-group">
      <label class="control-label col-sm-2" for="Category">Category</label>
      <div class="col-sm-10">
        <!-- <input type="text" class="form-control" id="category" name="category"> -->
        <select name="select_cat">
        	
        	<?php

        	$query = "select * from categories";
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

      </div>
    </div>


    <div class="form-group">
      <label class="control-label col-sm-2" for="Image">Image</label>
      <div class="col-sm-10">
      	<input type="file" name="image">
      </div>	
    </div>



    <div class="form-group">
      <label class="control-label col-sm-2" for="resturant">Resturant</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="resturant" name="resturant">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="price">Price</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="price" name="price">
      </div>
    </div>

  

    
    <div class="form-group">
      <label class="control-label col-sm-2" for="resturant">Post tags</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="tags" name="tags">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-2" for="resturant">Description</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="content" name="content">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-sm-2" for="resturant">Contact</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="contact" name="contact">
      </div>
    </div>




    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <input type="submit" name="create_post" value="Publish Post" class="btn btn-primary">
      </div>
    </div>
  </form>













	</form>

</body>
</html>