<table class="table table-bordered table-hover"">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Post_ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Comment</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>In Response to</th>
                                <th>Approve</th>
                                <th>Unapprove</th>       
                                <th>Delete</th>
                            </tr>
                            </thead>

                            <tbody>
                                


                                    <?php

                                    include "../include/db.php";

                                    $query ="SELECT * FROM comments";
                                    $select_comments= mysqli_query($connection,$query);

                                    while ($row = mysqli_fetch_assoc($select_comments)) {
                  
                                    $comment_id= $row['comment_id'];   
                                    $comment_post_id= $row['comment_post_id'];
                                    $comment_user= $row['comment_user'];
                                    $comment_email= $row['comment_email'];  
                                    $comment_content= $row['comment_content'];
                                    $comment_date= $row['comment_date'];
                                    $comment_status= $row['comment_status'];
                                    $comment_response_to = $row['response_to'];




                                    echo "<tr>";
                                    echo"<td>{$comment_id}</td>";
                                    echo"<td>{$comment_post_id}</td>";
                                    echo"<td>{$comment_user}</td>";
                                    echo"<td>{$comment_email}</td>";
                                    echo"<td>{$comment_content}</td>";
                                    echo"<td>{$comment_date}</td>";
                                    echo"<td>{$comment_status}</td>";
                                   
                                    echo"<td><a href='../mainpost.php?p_id= $comment_post_id'>{$comment_response_to}</td>";

                                    echo"<td><a href='view_all_comments.php?approve={$comment_id}'>Approve</a></td>";
                                    echo"<td><a href='view_all_comments.php?unapprove={$comment_id}'>Unapprove</a></td>";

                                    // echo"<td><a href='post.php?source=edit_post&p_id={$comment_id}'>Edit</a></td>";
                                    echo"<td><a href='view_all_comments.php?delete={$comment_id}'>Delete</a></td>";


                                    echo "</tr>";

                                }


                                      ?>
                                
                            </tbody>
                        </table>


<?php 

  if (isset($_GET['approve'])) {
        # code...
        $the_comment_id = $_GET['approve'];

        $query = "UPDATE comments SET comment_status = 'approved' WHERE comment_id = {$the_comment_id} ";
        $approve_query = mysqli_query($connection, $query);
        header("Location: comments.php?source=");
    }


 if (isset($_GET['unapprove'])) {
        # code...
        $the_comment_id = $_GET['unapprove'];

        $query = "UPDATE comments SET comment_status = 'unapproved' WHERE comment_id = {$the_comment_id} ";
        $unapprove_query = mysqli_query($connection, $query);
        header("Location: comments.php?source=");
    }




    if (isset($_GET['delete'])) {
        # code...
        $the_comment_id = $_GET['delete'];

        $query = "DELETE FROM comments WHERE comment_id = {$the_comment_id} ";
        $delete_query = mysqli_query($connection, $query);
        header("Location: comments.php?source=");
    }

 ?>
  <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>