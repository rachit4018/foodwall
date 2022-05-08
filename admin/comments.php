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




                        <?php



                        if (isset($_GET['source'])) {
                            # code...

                            $source = $_GET['source'];
                            switch ($source) {
                                
                                case 'add_post':
                                include"add_post.php";
                                break;

                                case 'edit_post':
                                include"edit_post.php";

                                    break;
                                
                                default:
                                    include"view_all_comments.php";
                                    break;
                            }


                        }


                          ?>



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
