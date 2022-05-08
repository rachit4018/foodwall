
<?php


		

        	$query = "select* from categories";
        	$select_cat = mysqli_query($connection,$query);
        	while ($row = mysqli_fetch_assoc($select_cat)) {
        		# code...
        		$cat_id = $row['c_id'];
        		$cat_title = $row['cat_tittle'];
        		print $connection->error;

        		echo "<option>{$cat_title}</option>";

        	}




        	 
?>		