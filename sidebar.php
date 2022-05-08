 <div class="card my-4">

          <h5 class="card-header">Search</h5>
          <form action="search.php" method="post">
             
          <div class="card-body">
            <div class="input-group">
              
              <input name="search" type="text"  class="form-control" placeholder="Search for...">
              
              <span class="input-group-btn">
                <button type="submit" class="btn btn-secondary" name="sub">Go!</button>
                
              </span>
            </div>
          </div>
          </form>
        
        </div>
        <div class="card my-4">

          <h5 class="card-header" style="text-align: center;">Logout</h5>
          <form action="" method="post">
             
          <div class="card-body">
            <div class="form-group">
              
             
              <span class="form-group-btn">
                <a href="index.php"><button type="button" class="btn btn-primary btn-block">LOGOUT!</button></a>
              </span>
            </div>
          </div>
          </form>
        
        </div>
        <!-- Categories Widget -->


      <!-- login -->
<!--  <div class="card my-4">

          <h5 class="card-header">Login</h5>
          <form action="include/login.php" method="post">
             
          <div class="card-body">
            <div class="form-group">
              
              <input name="username" type="text"  class="form-control" placeholder="Username" required="">
              
              
            </div>
            <div class="form-group">
              
              <input name="password" type="password"  class="form-control" placeholder="password" required="">
              
              
            </div>

            <div class="form-group">        
      
      <button class=" btn btn-primary btn-block" name="login" type="submit">Login</button>

    </div>

    <div class="form-group">        
      
      <button class=" btn btn-warning btn-block" name="signup" type="submit">Sign Up</button>

    </div>
          </div>
          </form>
        
        </div> -->


        <div class="card my-4">




          <?php 



          $query ="select * from categories";
        $select_categories_sidebar = mysqli_query($connection,$query);

        // while ($row = mysqli_fetch_assoc($select_categories_sidebar)) {
        
        //   $cat_tittle= $row['cat_tittle'];
        //   echo" <li class='nav-item active'>
        //     <a class='nav-link' href='#'>{$cat_tittle}
        //       <span class='sr-only'>(current)</span>
        //     </a>
        //   </li>";


           ?>

          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <?php
                  
                  while ($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                  
                    $cat_tittle= $row['cat_tittle'];
                    echo" <li class='nav-item active'>
                      <a class='nav-link' href='category.php?category=$cat_tittle'>{$cat_tittle}
                        <span class='sr-only'>(current)</span>
                      </a>
                    </li>";
                  }

                  ?>
                  <!-- <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <?php include "widget.php" ?>
        </div>
