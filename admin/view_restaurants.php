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




                    <h2>Restuarants Details</h2>

                          <table class="table table-bordered table-hover"">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Password</th>
                                <th>Address</th>
                                <th>Email</th>
                                <th>Timings</th>
                                <th>Contact_No</th>
                            </tr>
                            </thead>

                            <tbody>
                                


                                    <?php

                                    include "../include/db.php";

                                    $query ="select * from restaurants";
                                    $select_restaurants= mysqli_query($connection,$query);

                                    while ($row = mysqli_fetch_assoc($select_restaurants)) {
                  
                                    $rest_id= $row['rest_id'];   
                                    $rest_name= $row['rest_name'];
                                    $rest_password= $row['rest_password'];
                                    $rest_address= $row['rest_address'];  
                                    $rest_email= $row['rest_email'];
                                    $rest_timings= $row['rest_timings'];
                                    $rest_contact_no = $row['rest_contact_no'];
  

                                    echo "<tr>";
                                    echo"<td>{$rest_id}</td>";
                                    echo"<td>{$rest_name}</td>";
                                    echo"<td>{$rest_password}</td>";
                                    echo"<td>{$rest_address}</td>";
                                    echo"<td>{$rest_email}</td>";
                                    echo"<td>{$rest_timings}</td>";
                                    echo"<td>{$rest_contact_no}</td>";
                                    echo "</tr>";

                                }


                                      ?>
                                
                            </tbody>
                        </table>


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
