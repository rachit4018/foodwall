<?php include "includes/adminheader.php";?>
<body>


    <div id="wrapper">

        <!-- Navigation -->
        
        <?php include"includes/adminnavigation.php"; ?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Blank Page
                            <small>Subheading</small>
                        </h1>
                        <!-- <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol> -->
                    </div>
                </div>
                <!-- /.row -->





       
                <!-- /.row -->
                
<div class="row">
    <div class="col-lg-2 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">


                    <?php

                    $query = "SELECT * FROM posts";
                    $select_all_post = mysqli_query($connection,$query);
                    $post_counts = mysqli_num_rows($select_all_post);


                    echo "<div class='huge'>{$post_counts}</div>"; 

                    ?>

                  <!-- <div class='huge'>12</div> -->
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href="post.php?source=">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-2 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">


                         <?php

                    $query = "SELECT * FROM comments";
                    $select_all_comments = mysqli_query($connection,$query);
                    $commment_counts = mysqli_num_rows($select_all_comments);


                    echo "<div class='huge'>{$commment_counts}</div>"; 

                    ?>


                    <!--  <div class='huge'>23</div> -->
                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php?source=">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-2 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">


                        <?php

                    $query = "SELECT * FROM users";
                    $select_all_users = mysqli_query($connection,$query);
                    $user_counts = mysqli_num_rows($select_all_users);


                    echo "<div class='huge'>{$user_counts}</div>"; 

                    ?>

                    <!-- <div class='huge'>23</div> -->
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php?source=">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-2 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">


                         <?php

                    $query = "SELECT * FROM categories";
                    $select_all_categories = mysqli_query($connection,$query);
                    $category_counts = mysqli_num_rows($select_all_categories);


                    echo "<div class='huge'>{$category_counts}</div>"; 

                    ?>



                       <!--  <div class='huge'>13</div> -->
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-2 col-md-8   ">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-coffee fa-5x"></i>
                       <!--  <i class="fas fa-concierge-bell"></i> -->
                    </div>
                    <div class="col-xs-9 text-right">


                    <?php

                    $query = "SELECT * FROM restaurants";
                    $select_all_restaurants = mysqli_query($connection,$query);
                    $restaurant_counts = mysqli_num_rows($select_all_restaurants);


                    echo "<div class='huge'>{$post_counts}</div>"; 

                    ?>

                  <!-- <div class='huge'>12</div> -->
                        <div>Restaurants</div>
                    </div>
                </div>
            </div>
            <a href="view_restaurants.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-2 col-md-8   ">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">


                    <?php

                    // $query = "SELECT * FROM posts";
                    // $select_all_post = mysqli_query($connection,$query);
                    // $post_counts = mysqli_num_rows($select_all_post);


                    // echo "<div class='huge'>{$post_counts}</div>"; 

                    ?>

                  <!-- <div class='huge'>12</div> -->
                        <!-- <div>Posts</div> -->
                    </div>
                </div>
            </div>
            <!-- <a href="post.php?source="> -->
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            <!-- </a> -->
        </div>
    </div>
</div>
                <!-- /.row -->




<?php




                    $query = "SELECT * FROM posts WHERE post_status = 'available'";
                    $select_all_available_post = mysqli_query($connection,$query);
                    $post_available_counts = mysqli_num_rows($select_all_available_post);
    

                    $query = "SELECT * FROM comments WHERE comment_status = 'approved'";
                    $select_all_approved_comments = mysqli_query($connection,$query);
                    $approved_comments_counts = mysqli_num_rows($select_all_approved_comments);


                    $query = "SELECT * FROM users WHERE user_role = 'user'";
                    $select_all_users = mysqli_query($connection,$query);
                    $only_user_counts = mysqli_num_rows($select_all_users);







?>




<div class="row">
    
<br><br>
<script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],



          <?php

          $element_text = ['Active Posts','Available Post','Comments','Approved Comments','Users' ,'Only Users', 'Categories','Restaurants'];
          $element_count = [$post_counts, $post_available_counts ,$commment_counts ,$approved_comments_counts, $user_counts ,$only_user_counts, $category_counts,$restaurant_counts];


          for($i = 0;$i < 8;$i++){

            echo "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";

          }


          ?>






          //['Posts', 1000]
        ]);

        var options = {
          chart: {
            title: 'FOODWALL',
            subtitle: '',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

<div id="columnchart_material" style="width: auto; height: 650px;"></div>


</div>






            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
