


<!--  db connection -->

<?php include "db.php" ?>

<!-- header -->
<?php include "header.php" ?>
  <!-- Navigation -->
<?php include "navigation.php" ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">



        <h1 class="my-4">Live FoodWall
         <br> <small>Let you know what's cooking.</small>
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">

      



  <?php




        if (isset($_GET['p_id'])) {
          # code...
          $the_post_id = $_GET['p_id'];
          // $the_post_title = $_GET['post_title'];
        }







          $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
          $select_all_posts_query = mysqli_query($connection,$query);

          while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
       
          $post_image= $row['post_image'];

           print $connection->error;

           $post_date_time= $row['post_date_time'];
          echo"<div class='card-footer text-muted'>
            Posted on {$post_date_time}</div>";
          echo"<img src='images/$post_image' style='width: 700px; height: 450px;''>";
            

          echo"<div class='card-body'>"; 

          $post_title= $row['post_title'];
          echo"<h2 class='card-title'>{$post_title}</h2>";

          $post_price= $row['post_price'];
          echo"<h3 class='card-title'>Rs.{$post_price}</h3>";

           $post_restaurant= $row['post_restaurant'];
          echo"<h4 class='card-title'>{$post_restaurant}</h4>";

           $post_content= $row['post_content'];
          echo"<p class='card-text'>Dish Content: {$post_content}</p>";



        echo "--------------------------------------------------------------------------------------------------------";

          }

          $query = "SELECT * FROM restaurants WHERE rest_name = '$post_restaurant' ";
          $select_rest_detail = mysqli_query($connection,$query);
          while ($row = mysqli_fetch_assoc($select_rest_detail)) {
            # code...

            print $connection->error;

             echo "<h2>About Restaurant</h2>";


          $rest_name = $row['rest_name'];
          echo"<h3 class='card-title'>Name:{$rest_name}</h3>";

            
            $rest_address = $row['rest_address'];
            echo"<h4 class='card-title'>Address: {$rest_address}</h4>";

            $rest_email = $row['rest_email'];
            echo"<h5 class='card-title'>Email: {$rest_email}</h5>";

            $rest_contact_no = $row['rest_contact_no'];
            echo"<h6 class='card-title'>Contact: {$rest_contact_no}</h6>";

            $rest_timings = $row['rest_timings'];
            echo"<h7 class='card-title'>Timings: {$rest_timings}</h7>";








            echo"</div>";


          }


         

          ?>



<?php  


  if (isset($_POST['create_comment'])) {
    # code...

      $the_post_id = $_GET['p_id'];
      // $the_post_title = $_GET['post_title'];
      $comment_username = $_POST['comment_username'];
      $comment_email = $_POST['comment_email'];
      $comment = $_POST['comment_content'];
      $comment_date = date('d-m-y');
      $comment_status = "Unapproved";

      $query = "INSERT INTO comments (comment_post_id,comment_user,comment_email,comment_content,comment_date,comment_status,response_to) ";

      $query .= " VALUES ($the_post_id ,'{$comment_username}','{$comment_email}','{$comment}','{$comment_date}','{$comment_status}','{$post_title}')";

      
      $create_comment_query = mysqli_query($connection,$query);
      if (!$create_comment_query) {
        # code...
        print $connection->error;
      }


    $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
    $query .= "WHERE post_id = $the_post_id ";

    $update_commen_count = mysqli_query($connection,$query);
    
  }




?>


          <div class="card my-4">
          <h5 class="card-header">Leave a Comment:</h5>
          <div class="card-body">
            <form action=" " method="post">
               <div class="form-group">
                <label for="username">Username</label>
                <input type="text"  class="form-control" name="comment_username">
              </div>

               <div class="form-group">
              <label for="email">Email</label>
                <input type="email" class="form-control" name="comment_email">
              </div>

              <div class="form-group">
              <label for="comment">Your Comment</label>
                <textarea class="form-control" rows="3" name="comment_content"></textarea>
              </div>
              <button type="submit" name="create_comment" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>

        <!-- Single Comment -->




<?php 



$query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
        $query .="AND comment_status = 'approved' ";
        $query .="ORDER BY comment_id DESC "; 
        $select_comment_query = mysqli_query($connection,$query);
        if (!$select_comment_query) {
          # code...
          print $connection->error;
        }
        while ($row = mysqli_fetch_array($select_comment_query)) {
          # code...
          $comment_date = $row['comment_date'];
          $comment_content = $row['comment_content'];
          $comment_username = $row['comment_user'];


      ?>  




        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0"><?php echo $comment_username; ?>
              <small><?php echo $comment_date; ?></small>

            </h5>
           <?php 

            echo $comment_content;

            ?>


          </div>
        </div>



    <?php } ?>



        <!-- Comment with nested comments -->
        

        <!-- Blog Post -->
        <!-- <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div> -->

        <!-- Blog Post -->
       <!--  <div class="card mb-4">
          <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Post Title</h2>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Start Bootstrap</a>
          </div>
        </div> -->

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>
       </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->

             <!--  <?php //include "include/sidebar.php" ?>  -->
       </div>
      
     
  
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
 
<?php include "footer.php" ?> 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
