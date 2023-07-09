<?php 
include ('./connect.php');
session_start();


    $empid=$_SESSION['empid'];
    $sql="Select * from `faculty` where empid=$empid";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_assoc($result);
    $id=$row['empid'];
    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $email=$row['email'];
    $pno=$row['pno'];
    $desig=$row['designation'];



    echo '<nav class="navbar navbar-expand-sm bg-dark justify-content-center navbar-dark"> 
    <a class="navbar-brand">Regd no:&nbsp&nbsp'.$id.'</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a class="navbar-brand">Name:&nbsp&nbsp'.$fname.'    '.$lname.'</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a class="navbar-brand">Email:&nbsp&nbsp'.$email.'</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a class="navbar-brand">Phone:&nbsp&nbsp'.$pno.'</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a class="navbar-brand" href="#">Designation:  '.$desig.'</a>
  </nav>';
?>








<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Display data</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
img{
width:200px;
}
</style>
</head>
<body>






    <!--faculty awards -->
    <h2 class="text-center my-4">Faculty Awards</h2>
    <div class="container mt-5 d-flex justify-content-center" style="font-family: 'Montserrat';border-radius:25px;">
<table class="table table-bordered w-180">
<thead class="table-dark">
<tr>
<th scope="col">Full Name</th>
<th scope="col">Name of Award or Recognition</th>
<th scope="col">Level</th>
<th scope="col">Issuing Authority</th>
<th scope="col">Proof of Achievement</th>
</tr>
</thead>
<tbody>
    <?php
    $sql="Select * from `fawards` where empid=$empid";
    $result=mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($result)){
    //$regdno=$row['regdno'];
    $name=$row['name'];
    $award=$row['aname'];
    $level=$row['level'];
    $iby=$row['iby'];
    $file=$row['file'];



    $filename=$file;
    $filename_separate=explode('.', $filename);
    $file_extension=strtolower(end($filename_separate));
    if($file_extension=="pdf"){
        echo '<tr>
    <td>' . $name. '</td>
    <td>' . $award. '</td>
    <td>'.$level. '</td>
    <td>' . $iby. '</td>
    <td><a href="'.$file. '">view file</a></td>
    </tr>';
    }
    else{
    echo '<tr>
    <td>' . $name. '</td>
    <td>' . $award. '</td>
    <td>'.$level. '</td>
    <td>' . $iby. '</td>
    <td><a href="'.$file. '"><img src='.$file. ' /></a></td>
    </tr>';
    }
    }


?>
</tbody>
</table>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
<a href="uploadfawards.php"><button type="button" class="btn btn-outline-secondary" style="color:212529">Add</button></a>
<!--<a href="uploadnptel.php"><button type="button" class="btn btn-warning">Delete</button></a>-->
</div>









<!-- faculty teaching or learning tools-->
<h2 class="text-center my-4">Faculty Teaching or Learning Tools</h2>
    <div class="container mt-5 d-flex justify-content-center" style="font-family: 'Montserrat';border-radius:25px;">
<table class="table table-bordered w-180">
<thead class="table-dark">
<tr>
<th scope="col">Course name where ICT is used</th>
<th scope="col">Academic Year</th>
<th scope="col">Program (B.Tech/M.Tech)</th>
<th scope="col">Year and Semester</th>
<th scope="col">Name of the tools used</th>
<th scope="col">LMS URL</th>
<th scope="col">Proofs</th>
</tr>
</thead>
<tbody>
    <?php
    $sql="Select * from `ftlt` where empid=$empid";
    $result=mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($result)){
    $cname=$row['cname'];
    $acyear=$row['acyear'];
    $program=$row['program'];
    $yands=$row['yands'];
    $tools=$row['tools'];
    $lms=$row['lms'];
    $file=$row['file'];



    $filename=$file;
    $filename_separate=explode('.', $filename);
    $file_extension=strtolower(end($filename_separate));
    if($file_extension=="pdf"){
        echo '<tr>
    <td>' . $cname. '</td>
    <td>' . $acyear. '</td>
    <td>'.$program. '</td>
    <td>' . $yands. '</td>
    <td>'.$tools. '</td>
    <td><a href="'.$lms.'">'.$lms.'</a></td>
    <td><a href="'.$file. '">view file</a></td>
    </tr>';
    }
    else{
    echo '<tr>
    <td>' . $cname. '</td>
    <td>' . $acyear. '</td>
    <td>'.$program. '</td>
    <td>' . $yands. '</td>
    <td>'.$tools. '</td>
    <td><a href="'.$lms.'">'.$lms.'</a></td>
    <td><a href="'.$file. '"><img src='.$file. ' /></a></td>
    </tr>';
    }
    }


?>
</tbody>
</table>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
<a href="uploadftlt.php"><button type="button" class="btn btn-outline-secondary" style="color:212529">Add</button></a>
<!--<a href="uploadnptel.php"><button type="button" class="btn btn-warning">Delete</button></a>-->
</div>








<!--facculty fellowships-->
<h2 class="text-center my-4">Faculty Fellowships</h2>
    <div class="container mt-5 d-flex justify-content-center" style="font-family: 'Montserrat';border-radius:25px;">
<table class="table table-bordered w-180">
<thead class="table-dark">
<tr>
<th scope="col">Name of the fellowship</th>
<th scope="col">Academic Year</th>
<th scope="col">Level (state/national/international)</th>
<th scope="col">Issuing authority</th>
<th scope="col">Proofs</th>
</tr>
</thead>
<tbody>
    <?php
    $sql="Select * from `fellow` where empid=$empid";
    $result=mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($result)){
    $fname=$row['fname'];
    $acyear=$row['acyear'];
    $level=$row['level'];
    $auth=$row['auth'];
    $file=$row['file'];



    $filename=$file;
    $filename_separate=explode('.', $filename);
    $file_extension=strtolower(end($filename_separate));
    if($file_extension=="pdf"){
        echo '<tr>
    <td>' . $fname. '</td>
    <td>' . $acyear. '</td>
    <td>'.$level. '</td>
    <td>' . $auth. '</td>
    <td><a href="'.$file. '">view file</a></td>
    </tr>';
    }
    else{
    echo '<tr>
    <td>' . $fname. '</td>
    <td>' . $acyear. '</td>
    <td>'.$level. '</td>
    <td>' . $auth. '</td>
    <td><a href="'.$file. '"><img src='.$file. ' /></a></td>
    </tr>';
    }
    }


?>
</tbody>
</table>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
<a href="uploadfellow.php"><button type="button" class="btn btn-outline-secondary" style="color:212529">Add</button></a>
<!--<a href="uploadnptel.php"><button type="button" class="btn btn-warning">Delete</button></a>-->
</div>





</body>
</html>