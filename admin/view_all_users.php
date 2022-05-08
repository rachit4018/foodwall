
<h2>User Information</h2>
<table class="table table-bordered table-hover"">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Contact No</th>
                                <th>Edit</th>
                                <th>Admin</th>
                                <th>User</th>
                                <th>Delete</th>



                            </tr>
                            </thead>

                            <tbody>
                                


                                    <?php

                                    include "../include/db.php";

                                    $query ="SELECT * FROM users";
                                    $select_users= mysqli_query($connection,$query);

                                    while ($row = mysqli_fetch_assoc($select_users)) {
                  
                                    $user_id = $row['user_id'];   
                                    $user_name = $row['user_name'];
                                    $user_firstname = $row['user_firstname'];
                                    $user_lastname = $row['user_lastname'];  
                                    $user_email = $row['user_email'];
                                    $user_role = $row['user_role'];
                                    // $user_image = $row['user_image'];
                                    $user_contact_no = $row['user_contact_no'];




                                    echo "<tr>";
                                    echo"<td>{$user_id}</td>";
                                    echo"<td>{$user_name}</td>";
                                    echo"<td>{$user_firstname}</td>";
                                    echo"<td>{$user_lastname}</td>";
                                    echo"<td>{$user_email}</td>";
                                    echo"<td>{$user_role}</td>";
                                    // echo"<td><img src='images/$user_image' style='width:150px;height:70px; alt='image'></td>";
                                   // echo"<td>{$user_image}</td>";
                                    echo"<td>{$user_contact_no}</td>";
                                    
                                   
                                    echo"<td><a href='users.php?source=edit_user&user_id={$user_id}'>Edit</a></td>";


                                    echo"<td><a href='view_all_users.php?change_to_admin={$user_id}'>Admin</a></td>";
                                    echo"<td><a href='view_all_users.php?change_to_user={$user_id}'>User</a></td>";

                                    // echo"<td><a href='post.php?source=edit_post&p_id={user_id}'>Edit</a></td>";
                                    echo"<td><a href='view_all_users.php?delete={$user_id}'>Delete</a></td>";


                                    echo "</tr>";

                                }


                                      ?>
                                
                            </tbody>
                        </table>

<h2>User Prefrence Information</h2>

<table class="table table-bordered table-hover"">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Guj_item1</th>
                                <th>Guj_item2</th>
                                <th>Kath_item1</th>
                                <th>Kath_item2</th>
                                <th>Raj_item1</th>
                                <th>Raj_item2</th>
                                <th>Pun_item1</th>
                                <th>Pun_item2</th>
                                <th>South_item2</th>
                                <th>South_item2</th>



                            </tr>
                            </thead>

                            <tbody>
                                


                                    <?php

                                    include "../include/db.php";

                                    $query ="SELECT * FROM users";
                                    $select_users= mysqli_query($connection,$query);

                                    while ($row = mysqli_fetch_assoc($select_users)) {
                  
                                    $user_id = $row['user_id'];   
                                    $user_name = $row['user_name'];
                                     $guj_item_1 = $row['guj_item_1'];
                                     $guj_item_2 = $row['guj_item_2'];
                                     $kath_item_1 = $row['kath_item_1'];
                                     $kath_item_2 = $row['kath_item_2'];
                                     $raj_item_1 = $row['raj_item_1'];
                                     $raj_item_2 = $row['raj_item_2'];
                                     $pun_item_1 = $row['pun_item_1'];
                                     $pun_item_2 = $row['pun_item_2'];
                                     $sout_item_1 = $row['sout_item_1'];
                                     $sout_item_2 = $row['sout_item_2'];




                                    echo "<tr>";
                                    echo"<td>{$user_id}</td>";
                                    echo"<td>{$user_name}</td>";
                                    echo"<td>{$guj_item_1}</td>";
                                    echo"<td>{$guj_item_2}</td>";
                                    echo"<td>{$kath_item_1}</td>";
                                    echo"<td>{$kath_item_2}</td>";
                                    echo"<td>{$raj_item_1}</td>";
                                    echo"<td>{$raj_item_2}</td>";
                                    echo"<td>{$pun_item_1}</td>";
                                    echo"<td>{$pun_item_1}</td>";
                                    echo"<td>{$sout_item_1}</td>";
                                    echo"<td>{$sout_item_1}</td>";
                                    
                                    // echo"<td><img src='images/$user_image' style='width:150px;height:70px; alt='image'></td>";
                                   // echo"<td>{$user_image}</td>";
                                    
                                    echo "</tr>";

                                }


                                      ?>
                                
                            </tbody>
                        </table>


<?php 

  if (isset($_GET['change_to_admin'])) {
        # code...
        $the_user_id = $_GET['change_to_admin'];

        $query = "UPDATE users SET user_role = 'admin' WHERE user_id = {$the_user_id} ";
        $admin_query = mysqli_query($connection, $query);
        header("Location: users.php?source=");
    }


 if (isset($_GET['change_to_user'])) {
        # code...
        $the_user_id = $_GET['change_to_user'];

        $query = "UPDATE users SET user_role = 'user' WHERE user_id = {$the_user_id} ";
        $user_query = mysqli_query($connection, $query);
        header("Location: users.php?source=");
    }




    if (isset($_GET['delete'])) {
        # code...
        $the_user_id = $_GET['delete'];

        $query = "DELETE FROM users WHERE user_id = {$the_user_id} ";
        $delete_query = mysqli_query($connection, $query);
        header("Location: users.php?source=");
    }

 ?>
  <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>