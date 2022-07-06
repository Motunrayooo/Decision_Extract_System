<?php

include 'connect.php';

session_start();

if(!isset($_SESSION['user_email'])){
  header("Location: http://localhost/motun/login/dist/index.php");
}
?>




<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","motun") or die(mysqli_error());
$query4 = "SELECT COUNT(id) AS count FROM `decisions` ";

$query_result4 = mysqli_query($conn, $query4);

while($row4 = mysqli_fetch_assoc($query_result4)){
  $output4 = $row4['count'];

}


$sql4 = "SELECT * FROM `decisions`";
$result4 = mysqli_query($conn, $sql4);

?>


<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","motun") or die(mysqli_error());
$query3 = "SELECT COUNT(*) AS count FROM `decisions` WHERE `status` ='open'";

$query_result3 = mysqli_query($conn, $query3);

while($row3 = mysqli_fetch_assoc($query_result3)){
  $output3 = $row3['count'];

}


$sql3 = "SELECT * FROM `decisions`";
$result3 = mysqli_query($conn, $sql3);

?>

<?php

error_reporting (0);

$conn = mysqli_connect ("localhost","root","","motun") or die(mysqli_error());
$query2 = "SELECT COUNT(*) AS count FROM `decisions` WHERE `status` ='closed'";

$query_result2 = mysqli_query($conn, $query2);

while($row2 = mysqli_fetch_assoc($query_result2)){
  $output2 = $row2['count'];

}


$sql2 = "SELECT * FROM `decisions`";
$result2 = mysqli_query($conn, $sql2);

?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>ADMIN - Dashboard</title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/font-awesome.min.css">

<link rel="stylesheet" href="assets/css/feathericon.min.css">

<link rel="stylesheet" href="assets/plugins/morris/morris.css">

<link rel="stylesheet" href="assets/css/style.css">
<script src="logout.js"></script>

</head>

<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">

<p class="logo">Admin Dashboard</p>


</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fa fa-arrow-left"></i>
</a>


<a class="mobile_btn" id="mobile_btn">
<i class="fa fa-arrow-left"></i>
</a>




</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>


<li class="menu-title">
</li>
<li class="active">
<a href="index.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
</li>
<li class="submenu">
<a href="#"><i class="fa fa-file"></i> <span>Reports</span> <span class="menu-arrow"></span></a>
<ul style="display: none;">
<li><a href="create.php">Create Report</a></li>
<li><a href="view.php">View Report</a></li>
<li><a href="edit.php">Edit Report</a></li>
<li><a href="delete.php">Delete Report</a></li>
</ul>
</li>



<li>
<a href="search.php"><i class="fa fa-search"></i> <span>Search</span></a>
</li>
<li>
<a href="http://localhost/motun/logout/index.php"><i class="fa fa-close"></i> <span>Log Out</span></a>
</li>







</ul>
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">
<div class="row">
<div class="col-xl-4 col-sm-4 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-primary">
<i class="fa fa-file-text"></i>
</span>
<div class="dash-count">
<a href="#" class="count-title">Number Of Decision Reports</a>
<h1 class="count"><?php echo $output4; ?></h1>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-sm-4 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-warning">
<i class="fa fa-file-text"></i>
</span>
<div class="dash-count">
<a href="#" class="count-title">Open Decision Reports</a>
<h1 class="count"><?php echo $output3; ?></h1>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-4 col-sm-4 col-12">
<div class="card">
<div class="card-body">
<div class="dash-widget-header">
<span class="dash-widget-icon bg-danger">
<i class="fa fa-file-text"></i>
</span>
<div class="dash-count">
<a href="#" class="count-title">Closed Decision Reports</a>
<h1 class="count"><?php echo $output2; ?></h1>

</div>
</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 d-flex">

<div class="card card-table flex-fill">
<div class="card-header">
<h4 class="card-title float-start">Quick Overview</h4>


</div>
<div class="card-body">
<div class="table-responsive no-radius">
<table class="table table-hover table-center">
 

<thead>
<tr>
<th>Title</th>
<th>Start Time</th>
<th class="text-center">End Time</th>
<th class="text-center">Date</th>
<th class="text-center">Venue</th>
<th class="text-end">Status</th>
</tr>
</thead>

<tbody>



<?php
         $sql = "select * from `decisions` ORDER BY `date` DESC";
         $result = mysqli_query($con, $sql);
         if($result){


          while($row = mysqli_fetch_assoc($result)){

            

            $title =$row['title'];
			$starttime = $row['starttime'];
            $endtime =$row['endtime'];

            $date =$row['date'];
            $venue =$row['venue'];
            $status =$row['status'];

            echo '

<tr>
<td class="text-nowrap">
<div class="font-weight-600">'.$title.'</div>
</td>
<td class="text-nowrap">'.$starttime.'</td>
<td class="text-center">'.$endtime.'</td>

<td class="text-center">'.$date.'</td>
<td class="text-center">'.$venue.'</td>

<td class="text-end">
<div class="font-weight-600 text-success">'.$status.'</div>
</td>
</tr>';

}
}


?>



</tbody>
</table>
</div>
</div>
</div>

</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>