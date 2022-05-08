<?php ob_start();?>
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
                            Welcome to Admin 
                            <small>FoodWall</small>
                        </h1>

                        <!-- <div class="col-xs-6">
                            <form action="" method="">
                                <div class="form-group">
                                    <label for="cat_title">Add Category</label><br> 
                                    <input type="text" class="form-conrol" name="cat_title">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add Categories">
                                </div>
                            </form>

                                
                        </div> -->



                            
                                

                            <?php 
                            if (isset($_POST['submit'])) {
                                # code...
                                $cat_tittle = $_POST['cat_tittle'];

                                if ($cat_tittle == "" || empty($cat_tittle)) {
                                        # code...
                                    echo "This field should not be empty";
                                    }
                                    else
                                    {
                                       $query="INSERT INTO categories(cat_tittle)"; 
                                       $query.="VALUE('{$cat_tittle}')";
                                       $connection->connect_errno;

                                       $create_category_query = mysqli_query($connection,$query);
                                       if (!$create_category_query) {
                                           print $connection->error;
                                       }
                                    }    
                             }

                             ?>
                                                <div class="col-xs-6">

                                                <form action="" method="post">
                                                    <div class="form-group">
                                                        <label for="cat_tittle">Add Category</label>
                                                        <input type="text" class="form-control" name="cat_tittle">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary" name="submit" value="Add Categories">Submit</button>
                                                    </form> 
                                                    <br>
                                                    <form action="" method="post">
                                                    <div class="form-group">


                                                    <?php  

                                                    if (isset($_GET['edit'])) {
                                                        # code...
                                                        $cat_id=$_GET['edit'];
                                                    $query ="select * from categories where c_id=$cat_id";
                                                    $select_categories_id= mysqli_query($connection,$query);

                                                    while ($row = mysqli_fetch_assoc($select_categories_id)) {
                  
                                                        $c_id= $row['c_id'];   
                                                        $cat_tittle= $row['cat_tittle'];

                                                    }
                                                    ?>
                                                    <label for="cat_tittle">Edit Category</label>
                                                    <input type='text' name='cat_tittle' class='form-control'
                                                    value='<?php if(isset($cat_tittle)){echo $cat_tittle;}?>'>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary" name="sub" value="Update Categories">Submit</button>

                                                    <?php  
                                                    }


                                                    ?>

                                                    <?php 
                                                    //////update query
                                                    if (isset($_POST['sub'])) {

                                                    $cat_title=$_POST['cat_tittle'];

                                                    $query = "UPDATE categories SET cat_tittle='{$cat_title}' WHERE c_id={$cat_id}";
                                                    $update_query=mysqli_query($connection,$query);
                                                    if (!$update_query) {
                                                        print $connection->error;

                                                    }
                                                    else
                                                    header("Location: categories.php");







                                                }






                                                     ?>

                                                        
                                                        <!-- <input type="text" class="form-control" name="cat_tittle"> -->
                                                    </div>
                                                    </form> 

                                                    </div>
                        <div class="col-xs-6">

                        <?php 
                        
                        ?>

                        <table border="1px" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Category Tittle</th>
                                <th>Action</th>
                                <th>Edit</th>
                            </tr>
                            </thead>



                            <tbody>
                                <tr>
                                    <?php
                                    // find all categories query
                    $query ="select * from categories";
                        $select_categories= mysqli_query($connection,$query);

                  while ($row = mysqli_fetch_assoc($select_categories)) {
                  
                    $c_id= $row['c_id'];   
                    $cat_tittle= $row['cat_tittle'];
                    echo "<tr>";
                    echo"<td>{$c_id}</td>";
                    echo"<td>{$cat_tittle}</td>";
                    echo"<td><a href='categories.php?delete={$c_id}'>Delete</a></td>";
                    echo"<td><a href='categories.php?edit={$c_id}'>Edit</a></td>";     
                    echo "</tr>";

                  }?>


                  <?php 
                  // Delete query
                  if (isset($_GET['delete'])) {
                      # code...
                    $cat_id=$_GET['delete'];

                    $query = "DELETE FROM categories WHERE c_id={$cat_id}";
                    $delete_query=mysqli_query($connection,$query);
                    if (!$delete_query) {
                        # code...
                        print $connection->error;
                    }
                    else
                    header("Location: categories.php");


                  }

                   ?>


                                </tr>
                            </tbody>


                            
                                          </table>
                            
                        </div>
                        <!-- <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa   fa-file"></i> Blank Page
                            </li>
                        </ol> -->
                    </div>
                </div>

                <div class="row">
                    


                </div>


                <!-- /.row -->

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
