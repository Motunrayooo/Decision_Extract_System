<?php

include 'connect.php';

session_start();

if(!isset($_SESSION['user_email'])){
  header("Location: http://localhost/motun/login/dist/index.php");
}

if(isset($_POST['submit'])){


  $title  = $_POST['title'];
  $minute = $_POST['minute'];
  $keyarea = $_POST['keyarea'];

  $starttime = $_POST['starttime'];
  $endtime = $_POST['endtime'];
  $date = $_POST['date'];

  $status = $_POST['status'];
  $members = $_POST['members'];
  $venue = $_POST['venue'];
  


  $sql = " insert into `decisions` (title,minute,keyarea,starttime,endtime,date,status,members,venue)

values   ('$title','$minute','$keyarea','$starttime','$endtime','$date','$status','$members','$venue') ";
$result = mysqli_query($con,$sql);

if($result) {

  echo '<script>alert("Data Insertion Successful")</script>';
  header('Location: http://localhost/motun/dashboard/index.php');

}else{
  die(mysqli_error($con));
}

}

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

<p class="logo"></pclass>Admin Dashboard</p>


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
<!-- sidebar ends here -->


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Create Report</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.php">Admin</a></li>
<li class="breadcrumb-item active">Create Report</li>
</ul>
</div>
</div>
</div>


<!--form-->
<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-header">
<h4 class="card-title">Insert Your Data</h4>
</div>
<div class="card-body">

    <!-- form -->
    <form method="post">

<div class="form-group row">
<label class="col-form-label col-md-2">Title</label>
<div class="col-md-10">
<input type="text" class="form-control" name="title" required>
</div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-2">Minute</label>
    <div class="col-md-10">
    <textarea  rows="5" cols="5" class="form-control" placeholder="Enter text here" name="minute" required></textarea>
    </div>
    </div>


    <!-- <div class="form-group row">
    <label class="col-form-label col-md-2">Minute</label>
    <div class="col-md-10">
    <textarea rows="5" cols="5" class="form-control" placeholder="Enter text here"></textarea>
    </div>
    </div> -->

<div class="form-group row">
    <label class="col-form-label col-md-2">Key Aspect</label>
    <div class="col-md-10">
    <input type="text" class="form-control" name="keyarea" required>
    </div>
    </div>

    


<div class="form-group row">
<label class="col-form-label col-md-2">Start Time</label>
<div class="col-md-10">
<input type="time" class="form-control" placeholder="Placeholder" name="starttime" required>
</div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-2">End Time</label>
    <div class="col-md-10">
    <input type="time" class="form-control" placeholder="Placeholder" name="endtime" required>
    </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-md-2">Date</label>
        <div class="col-md-10">
        <input type="date" class="form-control" placeholder="Placeholder" name="date" required>
        </div>
        </div>


<div class="form-group row">
<label class="col-form-label col-md-2">Meeting Status</label>
<div class="col-md-10">
<select class="form-control form-select" name="status" required>
<option value="">-- Select --</option>
<option value="open">Open</option>
<option value="closed">Closed</option>

</select>
</div>
</div>


<div class="form-group row">
    <label class="col-form-label col-md-2">Meeting Venue</label>
    <div class="col-md-10">
    <select class="form-control form-select" name="venue" required>
    <option value="">-- Select --</option>
    <option value="science complex">Science Complex</option>
    <option value="benson hall">Benson Hall</option>
    <option value="ict">ICT</option>
    <option value="science room">Science Room</option>
    </select>
    </div>
    </div>




<div class="form-group row">
<label class="col-form-label col-md-2">Members</label>

    <div class="col-md-10">
    <input type="text" class="form-control" name="members" required>
    </div>
    </div>

       
</div>

</div>



<div class="form-group mb-0 row">

<input class="btn btn-primary" name="submit"  type="submit" value="Save Report">

</div>

</form>

<!-- form -->
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