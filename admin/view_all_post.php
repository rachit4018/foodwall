<?php ob_start(); ?>
<table class="table table-bordered table-hover"">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Restaurant</th>
                                <th>Price</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Tags</th>
                                <th>Content</th>
                                <th>Contact_No</th>
                                <th>Comment Count</th>
                                <th>Edit</th>   
                                <th>Delete</th>
                            </tr>
                            </thead>

                            <tbody>
                                


                                    <?php

                                    include "../include/db.php";

                                    $query ="select * from posts";
                                    $select_categories= mysqli_query($connection,$query);

                                    while ($row = mysqli_fetch_assoc($select_categories)) {
                  
                                    $post_id= $row['post_id'];   
                                    $post_title= $row['post_title'];
                                    $post_image= $row['post_image'];
                                    $post_category_name= $row['post_category_name'];  
                                    $post_restuarant= $row['post_restaurant'];
                                    $post_price= $row['post_price'];
                                    $post_date_time= $row['post_date_time'];
                                    $post_status= $row['post_status'];
                                    $post_tags = $row['post_tags'];
                                    $post_content = $row['post_content'];
                                    $post_contact_no = $row['post_contact_no'];


                                    $post_comment_count = $row['post_comment_count'];    

                                    echo "<tr>";
                                    echo"<td>{$post_id}</td>";
                                    echo"<td>{$post_title}</td>";
                                    echo"<td>{$post_category_name}</td>";
                                    echo"<td><img src='images/$post_image' style='width:250px;height:130px; alt='image'></td>";
                                    echo"<td>{$post_restuarant}</td>";
                                    echo"<td>{$post_price}</td>";
                                    echo"<td>{$post_date_time}</td>";
                                    echo"<td>{$post_status }</td>";
                                    echo"<td>{$post_tags}</td>";    
                                    echo"<td>{$post_content }</td>";
                                    echo"<td>{$post_contact_no}</td>";
                                    echo"<td>{$post_comment_count}</td>";
                                    echo"<td><a href='post.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                                    echo"<td><a href='view_all_post.php?delete={$post_id}'>Delete</a></td>";


                                    echo "</tr>";

                                }


                                      ?>
                                
                            </tbody>
                        </table>


<?php 

 
    if (isset($_GET['delete'])) {
        # code...
        $the_post_id = $_GET['delete'];

        $query = "DELETE FROM posts WHERE post_id = {$the_post_id} ";
        $delete_query = mysqli_query($connection, $query);
        header("Location: post.php?source= ");
    }

 ?>