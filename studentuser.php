<?php 
include ('./connect.php');
session_start();


    $regd=$_SESSION['regdno'];
    $sql="Select * from `student` where regdno=\"$regd\"";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_assoc($result);
    $id=$row['regdno'];
    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $email=$row['email'];
    $pno=$row['pno'];



    echo '<nav class="navbar navbar-expand-sm bg-dark justify-content-center navbar-dark"> 
    <a class="navbar-brand">Regd no:&nbsp&nbsp'.$id.'</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a class="navbar-brand">Name:&nbsp&nbsp'.$fname.'    '.$lname.'</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a class="navbar-brand">Email:&nbsp&nbsp'.$email.'</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <a class="navbar-brand">Phone:&nbsp&nbsp'.$pno.'</a>
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






    <!--nptel -->
    <h2 class="text-center my-4">Student NPTEL</h2>
    <div class="container mt-5 d-flex justify-content-center" style="font-family: 'Montserrat';border-radius:25px;">
<table class="table table-bordered w-180">
<thead class="table-dark">
<tr>
<th scope="col">Regd no</th>
<th scope="col">Full Name</th>
<th scope="col">Academic year</th>
<th scope="col">Name of course</th>
<th scope="col">Offered by</th>
<th scope="col">Duration</th>
<th scope="col">start date</th>
<th scope="col">end date</th>
<th scope="col">score</th>
<th scope="col">Certificate or Scorecard</th>
</tr>
</thead>
<tbody>
    <?php
    $sql="Select * from `snptel` where regdno=\"$regd\"";
    $result=mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($result)){
    $regdno=$row['regdno'];
    $name=$row['fullname'];
    $acyear=$row['academic'];
    $course=$row['cname'];
    $oby=$row['offeredby'];
    $duration=$row['duration'];
    $sdate=$row['sdate'];
    $edate=$row['edate'];
    $score=$row['score'];
    $file=$row['file'];



    $filename=$file;
    $filename_separate=explode('.', $filename);
    $file_extension=strtolower(end($filename_separate));
    if($file_extension=="pdf"){
        echo '<tr>
    <td>'.$regdno. '</td>
    <td>' . $name. '</td>
    <td>'.$acyear. '</td>
    <td>' . $course. '</td>
    <td>'.$oby. '</td>
    <td>' . $duration. '</td>
    <td>'.$sdate. '</td>
    <td>' . $edate. '</td>
    <td>'.$score. '</td>
    <td><a href="'.$file. '">view file</a></td>
    </tr>';
    }
    else{
    echo '<tr>
    <td>'.$regdno. '</td>
    <td>' . $name. '</td>
    <td>'.$acyear. '</td>
    <td>' . $course. '</td>
    <td>'.$oby. '</td>
    <td>' . $duration. '</td>
    <td>'.$sdate. '</td>
    <td>' . $edate. '</td>
    <td>'.$score. '</td>
    <td><a href="'.$file. '"><img src='.$file. ' /></a></td>
    </tr>';
    }
    }


?>
</tbody>
</table>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
<a href="uploadnptel.php"><button type="button" class="btn btn-outline-secondary" style="color:212529">Add</button></a>
<!--<a href="uploadnptel.php"><button type="button" class="btn btn-warning">Delete</button></a>-->
</div>
















<!--Student Certifications -->
    <h2 class="text-center my-4">Student Certifications</h2>
    <div class="container mt-5 d-flex justify-content-center">
<table class="table table-bordered w-200">
<thead class="table-dark">
<tr>
<th scope="col">Regd no</th>
<th scope="col">Full Name</th>
<th scope="col">Name of course</th>
<th scope="col">Platform or Organization</th>
<th scope="col">Duration</th>
<th scope="col">Start date</th>
<th scope="col">End date</th>
<th scope="col">Date of Exam</th>
<th scope="col">score</th>
<th scope="col">Faculty incharge</th>
<th scope="col">Certificate of Completion</th>
</tr>
</thead>
<tbody>
    <?php
    $sql="Select * from `scert` where regdno=\"$regd\"";
    $result=mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($result)){
    $regdno=$row['regdno'];
    $name=$row['name'];
    $course=$row['course'];
    $org=$row['org'];
    $duration=$row['duration'];
    $sdate=$row['sdate'];
    $edate=$row['edate'];
    $doe=$row['doe'];
    $score=$row['score'];
    $faculty=$row['fin'];
    $file=$row['file'];



    $filename=$file;
    $filename_separate=explode('.', $filename);
    $file_extension=strtolower(end($filename_separate));
    if($file_extension=="pdf"){
        echo '<tr>
    <td>'.$regdno. '</td>
    <td>' . $name. '</td>
    <td>' . $course. '</td>
    <td>'.$org. '</td>
    <td>' . $duration. '</td>
    <td>'.$sdate. '</td>
    <td>' . $edate. '</td>
    <td>'.$doe. '</td>
    <td>'.$score. '</td>
    <td>'.$faculty.'</td>
    <td><a href="'.$file. '">view file</a></td>
    </tr>';
    }
    else{
    echo '<tr>
    <td>'.$regdno. '</td>
    <td>' . $name. '</td>
    <td>' . $course. '</td>
    <td>'.$org. '</td>
    <td>' . $duration. '</td>
    <td>'.$sdate. '</td>
    <td>' . $edate. '</td>
    <td>'.$doe. '</td>
    <td>'.$score. '</td>
    <td>'.$faculty.'</td>
    <td><a href="'.$file. '"><img src='.$file. ' /></a></td>
    </tr>';
    }
    }


?>
</tbody>
</table>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
<a href="uploadcert.php"><button type="button" class="btn btn-outline-secondary" style="color:212529">Add</button></a>
</div>








<!--Student Internships-->
    <h2 class="text-center my-4">Student Internships</h2>
    <div class="container mt-5 d-flex justify-content-center" style="font-family: 'Montserrat';border-radius:25px;">
<table class="table table-bordered w-180">
<thead class="table-dark">
<tr>
<th scope="col">Regd no</th>
<th scope="col">Full Name</th>
<th scope="col">Company Name</th>
<th scope="col">Duration</th>
<th scope="col">start date</th>
<th scope="col">end date</th>
<th scope="col">Is stipend paid?</th>
<th scope="col">Is the company charged any amount</th>
<th scope="col">If yes, how much?</th>
<th scope="col">Letter of completion</th>
</tr>
</thead>
<tbody>
    <?php
    $sql="Select * from `sintern` where regdno=\"$regd\"";
    $result=mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($result)){
    $regdno=$row['regdno'];
    $name=$row['name'];
    $company=$row['company'];
    $duration=$row['duration'];
    $sdate=$row['sdate'];
    $edate=$row['edate'];
    $isp=$row['isp'];
    $com=$row['com'];
    $hm=$row['hm'];
    $file=$row['file'];



    $filename=$file;
    $filename_separate=explode('.', $filename);
    $file_extension=strtolower(end($filename_separate));
    if($file_extension=="pdf"){
        echo '<tr>
    <td>'.$regdno. '</td>
    <td>' . $name. '</td>
    <td>'.$company. '</td>
    <td>' . $duration. '</td>
    <td>'.$sdate. '</td>
    <td>' . $edate. '</td>
    <td>'.$isp. '</td>
    <td>' . $com. '</td>
    <td>'.$hm. '</td>
    <td><a href="'.$file. '">view file</a></td>
    </tr>';
    }
    else{
    echo '<tr>
    <td>'.$regdno. '</td>
    <td>' . $name. '</td>
    <td>'.$company. '</td>
    <td>' . $duration. '</td>
    <td>'.$sdate. '</td>
    <td>' . $edate. '</td>
    <td>'.$isp. '</td>
    <td>' . $com. '</td>
    <td>'.$hm. '</td>
    <td><a href="'.$file. '"><img src='.$file. ' /></a></td>
    </tr>';
    }
    }


?>
</tbody>
</table>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-center">
<a href="uploadintern.php"><button type="button" class="btn btn-outline-secondary" style="color:212529">Add</button></a>
<!--<a href="uploadnptel.php"><button type="button" class="btn btn-warning">Delete</button></a>-->
</div>







<!--
    <h2 class="text-center my-4">Student Awards</h2>
    <div class="container mt-5 d-flex justify-content-center">
<table class="table table-bordered w-50">
<thead class="table-dark">
<tr>
<th scope="col">sl no</th>
<th scope="col">Username</th>
<th scope="col">Image</th>
</tr>
</thead>
<tbody>
    /*$sql="Select * from `login`";
    $result=mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $image=$row['image'];



    $imagefilename=$image;
    $filename_separate=explode('.', $imagefilename);
    $file_extension=strtolower(end($filename_separate));
    if($file_extension=="pdf"){
        echo '<tr>
    <td>'.$id. '</td>
    <td>' . $name. '</td>
    <td><a href="'.$image. '">view file</a></td>
    </tr>';
    }
    else{
    echo '<tr>
    <td>'.$id. '</td>
    <td>' . $name. '</td>
    <td><a href="'.$image. '"><img src='.$image. ' /></a></td>
    </tr>';
    }
    }


?>
</tbody>









    <h2 class="text-center my-4">Students Social Service Programs</h2>
    <div class="container mt-5 d-flex justify-content-center">
<table class="table table-bordered w-50">
<thead class="table-dark">
<tr>
<th scope="col">sl no</th>
<th scope="col">Username</th>
<th scope="col">Image</th>
</tr>
</thead>
<tbody>
    
    /*$sql="Select * from `login`";
    $result=mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($result)){
    $id=$row['id'];
    $name=$row['name'];
    $image=$row['image'];



    $imagefilename=$image;
    $filename_separate=explode('.', $imagefilename);
    $file_extension=strtolower(end($filename_separate));
    if($file_extension=="pdf"){
        echo '<tr>
    <td>'.$id. '</td>
    <td>' . $name. '</td>
    <td><a href="'.$image. '">view file</a></td>
    </tr>';
    }
    else{
    echo '<tr>
    <td>'.$id. '</td>
    <td>' . $name. '</td>
    <td><a href="'.$image. '"><img src='.$image. ' /></a></td>
    </tr>';
    }
    }


?>
</tbody>
-->




</body>
</html>