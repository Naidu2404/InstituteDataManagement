<?php
include ('./connect.php');



//nptel
if(isset($_POST['nptelsubmit'])){
    $regdno=$_POST['regdno'];
    $name=$_POST['fullname'];
    $academic=$_POST['acyear'];
    $cname=$_POST['cname'];
    $oby=$_POST['oby'];
    $duration=$_POST['duration'];
    $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];
    $score=$_POST['score'];
    $file=$_FILES['file'];

    $filename=$file['name'];
    $fileerror=$file['error'];
    $filetemp=$file['tmp_name'];
    $filename_separate=explode('.', $filename);


    $file_extension=strtolower(end($filename_separate));
    $extension=array('jpeg', 'jpg', 'png','pdf');
    if(in_array($file_extension, $extension))
    {
        $upload='images/'.$filename;
        move_uploaded_file($filetemp, $upload);
        $sql="INSERT INTO `snptel`(`regdno`, `fullname`, `academic`, `cname`, `offeredby`, `duration`, `sdate`, `edate`, `score`, `file`) 
        VALUES ('$regdno','$name','$academic','$cname','$oby','$duration','$sdate','$edate','$score','$upload')";
        $result=mysqli_query($con, $sql);
        if($result) {
            echo '<div class="alert alert-success" role="alert">
                <strong>Success</strong> Data inserted successfully
                </div>';
            echo '<a href="studentuser.php">go to my files</a>';
        }else{
            die (mysqli_error($con));
        }
    }
    }



//student certifications
    if(isset($_POST['certsubmit'])){
        $regdno=$_POST['regdno'];
        $name=$_POST['fullname'];
        $cname=$_POST['cname'];
        $org=$_POST['org'];
        $duration=$_POST['duration'];
        $sdate=$_POST['sdate'];
        $edate=$_POST['edate'];
        $doe=$_POST['doe'];
        $score=$_POST['score'];
        $faculty=$_POST['fin'];
        $file=$_FILES['file'];
    
        $filename=$file['name'];
        $fileerror=$file['error'];
        $filetemp=$file['tmp_name'];
        $filename_separate=explode('.', $filename);
    
    
        $file_extension=strtolower(end($filename_separate));
        $extension=array('jpeg', 'jpg', 'png','pdf');
        if(in_array($file_extension, $extension))
        {
            $upload='images/'.$filename;
            move_uploaded_file($filetemp, $upload);
            $sql="INSERT INTO `scert`(`regdno`, `name`, `course`, `duration`, `sdate`, `edate`, `doe`, `fin`, `score`, `file`, `org`) 
            VALUES ('$regdno','$name','$cname','$duration','$sdate','$edate','$doe','$faculty','$score','$upload','$org')";
            $result=mysqli_query($con, $sql);
            if($result) {
                echo '<div class="alert alert-success" role="alert">
                    <strong>Success</strong> Data inserted successfully
                    </div>';
                echo '<a href="studentuser.php">go to my files</a>';
            }else{
                die (mysqli_error($con));
            }
        }
        }


//student internships
if(isset($_POST['internsubmit'])){
    $regdno=$_POST['regdno'];
    $name=$_POST['name'];
    $company=$_POST['company'];
    $duration=$_POST['duration'];
    $sdate=$_POST['sdate'];
    $edate=$_POST['edate'];
    $isp=$_POST['isp'];
    $com=$_POST['com'];
    $hm=$_POST['hm'];
    $file=$_FILES['file'];

    $filename=$file['name'];
    $fileerror=$file['error'];
    $filetemp=$file['tmp_name'];
    $filename_separate=explode('.', $filename);


    $file_extension=strtolower(end($filename_separate));
    $extension=array('jpeg', 'jpg', 'png','pdf');
    if(in_array($file_extension, $extension))
    {
        $upload='images/'.$filename;
        move_uploaded_file($filetemp, $upload);
        $sql="INSERT INTO `sintern`(`name`, `regdno`, `company`, `sdate`, `edate`, `isp`, `com`, `hm`, `file`,`duration`) 
        VALUES ('$name','$regdno','$company','$sdate','$edate','$isp','$com','$hm','$upload','$duration')";
        $result=mysqli_query($con, $sql);
        if($result) {
            echo '<div class="alert alert-success" role="alert">
                <strong>Success</strong> Data inserted successfully
                </div>';
            echo '<a href="studentuser.php">go to my files</a>';
        }else{
            die (mysqli_error($con));
        }
    }
    }


//faculty awards
if(isset($_POST['fawardsubmit'])){
    $empid=$_POST['empid'];
    $name=$_POST['name'];
    $aname=$_POST['aname'];
    $iby=$_POST['iby'];
    $level=$_POST['level'];
    $file=$_FILES['file'];

    $filename=$file['name'];
    $fileerror=$file['error'];
    $filetemp=$file['tmp_name'];
    $filename_separate=explode('.', $filename);


    $file_extension=strtolower(end($filename_separate));
    $extension=array('jpeg', 'jpg', 'png','pdf');
    if(in_array($file_extension, $extension))
    {
        $upload='images/'.$filename;
        move_uploaded_file($filetemp, $upload);
        $sql="INSERT INTO `fawards`(`empid`, `name`, `aname`, `level`, `iby`, `file`) 
        VALUES ('$empid','$name','$aname','$level','$iby','$upload')";
        $result=mysqli_query($con, $sql);
        if($result) {
            echo '<div class="alert alert-success" role="alert">
                <strong>Success</strong> Data inserted successfully
                </div>';
            echo '<a href="facultyuser.php">go to my files</a>';
        }else{
            die (mysqli_error($con));
        }
    }
    }








//faculty teachings and learning tools
if(isset($_POST['ftltsubmit'])){
    $empid=$_POST['empid'];
    $cname=$_POST['cname'];
    $acyear=$_POST['acyear'];
    $program=$_POST['program'];
    $yands=$_POST['yands'];
    $tools=$_POST['tools'];
    $lms=$_POST['lms'];
    $file=$_FILES['file'];

    $filename=$file['name'];
    $fileerror=$file['error'];
    $filetemp=$file['tmp_name'];
    $filename_separate=explode('.', $filename);


    $file_extension=strtolower(end($filename_separate));
    $extension=array('jpeg', 'jpg', 'png','pdf');
    if(in_array($file_extension, $extension))
    {
        $upload='images/'.$filename;
        move_uploaded_file($filetemp, $upload);
        $sql="INSERT INTO `ftlt`(`empid`, `cname`, `acyear`, `program`, `yands`, `tools`, `lms`, `file`) 
        VALUES ('$empid','$cname','$acyear','$program','$yands','$tools','$lms','$upload')";
        $result=mysqli_query($con, $sql);
        if($result) {
            echo '<div class="alert alert-success" role="alert">
                <strong>Success</strong> Data inserted successfully
                </div>';
            echo '<a href="facultyuser.php">go to my files</a>';
        }else{
            die (mysqli_error($con));
        }
    }
    }









//fellowships
if(isset($_POST['fellowsubmit'])){
    $empid=$_POST['empid'];
    $fname=$_POST['fname'];
    $acyear=$_POST['acyear'];
    $level=$_POST['level'];
    $auth=$_POST['auth'];
    $file=$_FILES['file'];

    $filename=$file['name'];
    $fileerror=$file['error'];
    $filetemp=$file['tmp_name'];
    $filename_separate=explode('.', $filename);


    $file_extension=strtolower(end($filename_separate));
    $extension=array('jpeg', 'jpg', 'png','pdf');
    if(in_array($file_extension, $extension))
    {
        $upload='images/'.$filename;
        move_uploaded_file($filetemp, $upload);
        $sql="INSERT INTO `fellow`(`empid`, `fname`, `acyear`, `level`, `auth`, `file`) 
        VALUES ('$empid','$fname','$acyear','$level','$auth','$upload')";
        $result=mysqli_query($con, $sql);
        if($result) {
            echo '<div class="alert alert-success" role="alert">
                <strong>Success</strong> Data inserted successfully
                </div>';
            echo '<a href="facultyuser.php">go to my files</a>';
        }else{
            die (mysqli_error($con));
        }
    }
    }
?>