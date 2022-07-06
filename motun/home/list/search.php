<?php

include 'connect.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Reports</title>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" href="styless.css">
</head>
<body>


<div class="wrapper">
	<div class="links">
		<ul>
			<li data-view="list-view" class="li-list active">
			<i class="fas fa-file"></i>
			Decision Reports
		</li>
		<li>
<form action="#">
<input type="search" name="search" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fa fa-search"></i></button>
</form></li>
		</ul>
		
 <!--SEARCH-->
 

	</div>


	

	<div class="view_main">
		
 <!-- SEARCH
 <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
		<div class="view_wrap list-view" style="display: block;">

		
 <!-- SEARCH
 <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
		

		<?php
         if (isset($_GET['search'])) {

			$title =$_GET['search'];
			$keyarea =$_GET['search'];
			$sql = "SELECT * FROM decisions WHERE title LIKE '%$title%' OR keyarea LIKE '%$keyarea%' ";
		  
			$exe = mysqli_query($con,$sql) or die(mysqli_error());
		  
			// if (mysqli_num_rows($exe) > 0) {
			//   $count = 0;
		  
		  if ($exe){
			  while($row = mysqli_fetch_assoc($exe)){
		  
					  $id =$row['id'];
		  
		  
					  $title =$row['title'];
					  $starttime = $row['starttime'];
					  $endtime =$row['endtime'];
		  
					  $date =$row['date'];
					 
					  $status =$row['status'];
			echo'
		
		<div class="view_item">
				<div class="vi_left">
					<img src="tomato.png" alt="tomato">
				</div>
			

				<div class="vi_right">
					<p class="title">'.$title.'</p>
					<p class="content">'.$date.'</p>
					<p class="content">'.$keyarea.'</p>
					<div class="btn"><a href="index.php?indexid='.$id.'">Read More</a></div>
				</div>
			</div>';

		  }
		  }
		}
			?>
			
		</div>
		
	</div>
</div>
	
<script src="scriptss.js"></script>

</body>
</html>