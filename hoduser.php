<?php 
include ('./connect.php');
session_start();


    $hid=$_SESSION['hodid'];
    $sql="Select * from `hod` where hodid=$hid";
    $result=mysqli_query($con, $sql);
    $row=mysqli_fetch_assoc($result);
    $id=$row['hodid'];
    $fname=$row['firstname'];
    $lname=$row['lastname'];
    $email=$row['email'];
    $pno=$row['pno'];



    echo '<nav class="nav">
    <a class="nav-link active" aria-current="page" href="#">'.$id.'</a>
    <a class="nav-link" href="#">'.$fname.' '. $lname.'</a>
    <a class="nav-link" href="#">'.$email.'</a>
    <a class="nav-link disabled">'.$pno.'</a>
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
    $sql="Select * from `snptel`";
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
    $sql="Select * from `scert`";
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
    $sql="Select * from `sintern`";
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






    <!--faculty awards -->
    <h2 class="text-center my-4">Faculty Awards</h2>
    <div class="container mt-5 d-flex justify-content-center" style="font-family: 'Montserrat';border-radius:25px;">
<table class="table table-bordered w-180">
<thead class="table-dark">
<tr>
<th scope="col">Employee id</th>
<th scope="col">Full Name</th>
<th scope="col">Name of Award or Recognition</th>
<th scope="col">Level</th>
<th scope="col">Issuing Authority</th>
<th scope="col">Proof of Achievement</th>
</tr>
</thead>
<tbody>
    <?php
    $sql="Select * from `fawards`";
    $result=mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($result)){
    //$regdno=$row['regdno'];
    $empid=$row['empid'];
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
        <td>' .$empid. '</td>
    <td>' . $name. '</td>
    <td>' . $award. '</td>
    <td>'.$level. '</td>
    <td>' . $iby. '</td>
    <td><a href="'.$file. '">view file</a></td>
    </tr>';
    }
    else{
    echo '<tr>
    <td>' .$empid. '</td>
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
<th scope="col">Employee id</th>
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
    $sql="Select * from `ftlt`";
    $result=mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($result)){
        $empid=$row['empid'];
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
        <td>' .$empid. '</td>
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
    <td>' .$empid. '</td>
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
<th scope="col">Employee id</th>
<th scope="col">Name of the fellowship</th>
<th scope="col">Academic Year</th>
<th scope="col">Level (state/national/international)</th>
<th scope="col">Issuing authority</th>
<th scope="col">Proofs</th>
</tr>
</thead>
<tbody>
    <?php
    $sql="Select * from `fellow`";
    $result=mysqli_query($con, $sql);
    while($row=mysqli_fetch_assoc($result)){
        $empid=$row['empid'];
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
        <td>' .$empid. '</td>
    <td>' . $fname. '</td>
    <td>' . $acyear. '</td>
    <td>'.$level. '</td>
    <td>' . $auth. '</td>
    <td><a href="'.$file. '">view file</a></td>
    </tr>';
    }
    else{
    echo '<tr>
    <td>' .$empid. '</td>
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