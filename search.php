


<!--  db connection -->

<?php include "db.php" ?>

<!-- header -->
<?php include "/header.php" ?>
  <!-- Navigation -->
<?php include "navigation.php" ?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">



        <h1 class="my-4">Live FoodWall
          <small>Let you know what's cooking</small>
        </h1>

        <!-- Blog Post -->
        <div class="card mb-4">










      


          <?php




  
          if (isset($_POST['sub'])) 
          {
              $search=$_POST['search'];

              $query = "SELECT * from posts WHERE post_tags LIKE '%$search%' ";
    
              $search_query = mysqli_query($connection,$query);
              $connection->connect_errno;
              if(!$search_query)
              {
                  print $connection->error;
 
              }
            else
            {
                // print $search_query;
                $count = mysqli_num_rows($search_query);

                if ($count==0) {
                  # code...
                  echo "<h4>NO RESULT</h4>";
                }
                else// echo "some RESULT";
                {


                  // while ($row = mysqli_fetch_assoc($search_query)) {
       
                  
                  //}
                    //  $query = "select * from posts";
                    // $search_query = mysqli_query($connection,$query);

                      while ($row = mysqli_fetch_assoc($search_query)) {
                   
                      $post_image= $row['post_image'];

                      $post_image= $row['post_image'];
                      echo "<img class='card-img-top' src='images/$post_image' alt='Card image cap'>";

                      echo"<div class='card-body'>"; 

                      $post_title= $row['post_title'];
                      echo"<h2 class='card-title'>{$post_title}</h2>";

                      $post_price= $row['post_price'];
                      echo"<h3 class='card-title'>Rs.{$post_price}</h3>";

                       $post_restaurant= $row['post_restaurant'];
                      echo"<h4 class='card-title'>{$post_restaurant}</h4>";

                       $post_content= $row['post_content'];
                      echo"<p class='card-text'>{$post_content}</p>";

                      echo" <a href='post.php' class='btn btn-primary'>Read More &rarr;</a>
                      </div>";

                       $post_date_time= $row['post_date_time'];
                      echo"<div class='card-footer text-muted'>
                        Posted on {$post_date_time}</div>";
                      }





                    }

              }   
              // elseend
            
            }
            // postifend









              // the data


         

          ?>
        </div>

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
       <!--  <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul> -->

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->

<!-- <?php// include "include/sidebar.php" ?>  -->
       
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
