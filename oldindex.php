

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

          <h2 style="text-align: center;">Recommendations</h2>









      




  <?php

        if (isset($_GET['user_name'])) {
                          
         $the_user_name = $_GET['user_name'];

         $query = " SELECT * FROM users WHERE user_name = '$the_user_name' ";
         $select_dish_query = mysqli_query($connection,$query);
         while($row = mysqli_fetch_assoc($select_dish_query))
         {
            $item1 = $row['guj_item_1'];
            $item2 = $row['guj_item_2'];
            $item3 = $row['kath_item_1'];
            $item4 = $row['kath_item_2'];
            $item5 = $row['raj_item_1'];
            $item6 = $row['raj_item_2'];
            $item7 = $row['pun_item_1'];
            $item8 = $row['pun_item_2'];
            $item9 = $row['sout_item_1'];
            $item10 = $row['sout_item_2'];










         }


        }

          $query = "select * from posts where post_title  = '$item1' or post_title  = '$item2' or post_title  = '$item3' or post_title  = '$item4' or post_title  = '$item5' or post_title  = '$item6' or post_title  = '$item7' or post_title  = '$item8' or post_title  = '$item9' or post_title  = '$item10' and post_comment_count > 1 order by post_date_time DESC";
          $select_all_posts_query = mysqli_query($connection,$query);

          while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
       
          $post_image= $row['post_image'];

          $post_id = $row['post_id'];
          $post_status = $row['post_status'];
         
          
           $post_date_time= $row['post_date_time'];
          echo"<div class='card-footer text-muted'>


          


            Posted on {$post_date_time}</div>";



          echo"<img src='images/$post_image' style='width: 700px; height: 450px;''>";
            

          echo"<div class='card-body'>"; 


             if($post_status !== 'available')
          {
            echo '<h3>Sorry! This Item Is Not Available</h3>';
          }

          $post_title= $row['post_title'];
          echo"<a href='mainpost.php?p_id=$post_id'><h2 class='card-title'>

          {$post_title}</h2></a>";

          $post_price= $row['post_price'];
          echo"<h3 class='card-title'>Rs.{$post_price}</h3>";

           $post_restaurant= $row['post_restaurant'];
          echo"<h4 class='card-title'>{$post_restaurant}</h4>";

           $post_content= $row['post_content'];
          echo"<p class='card-text'>Dish Content: {$post_content}</p>";

          echo" <a href='mainpost.php?p_id=$post_id' class='btn btn-primary'>Read More &rarr;</a>
          </div>";

          

            echo"<br><br>";

          }



?>
<h2 style="text-align: center;">Other</h2>
<?php

          $query = "select * from posts order by post_date_time DESC";
          $select_all_posts_query = mysqli_query($connection,$query);

          while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
       
          $post_image= $row['post_image'];

          $post_id = $row['post_id'];
          $post_status = $row['post_status'];
         
          
           $post_date_time= $row['post_date_time'];
          echo"<div class='card-footer text-muted'>


          


            Posted on {$post_date_time}</div>";



          echo"<img src='images/$post_image' style='width: 700px; height: 450px;''>";
            

          echo"<div class='card-body'>"; 


             if($post_status !== 'available')
          {
            echo '<h3>Sorry! This Item Is Not Available</h3>';
          }

          $post_title= $row['post_title'];
          echo"<a href='mainpost.php?p_id=$post_id'><h2 class='card-title'>

          {$post_title}</h2></a>";

          $post_price= $row['post_price'];
          echo"<h3 class='card-title'>Rs.{$post_price}</h3>";

           $post_restaurant= $row['post_restaurant'];
          echo"<h4 class='card-title'>{$post_restaurant}</h4>";

           $post_content= $row['post_content'];
          echo"<p class='card-text'>Dish Content: {$post_content}</p>";

          echo" <a href='mainpost.php?p_id=$post_id' class='btn btn-primary'>Read More &rarr;</a>
          </div>";

          

            echo"<br><br>";

          }










         

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
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->

<?php include "sidebar.php" ?> 
       
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
