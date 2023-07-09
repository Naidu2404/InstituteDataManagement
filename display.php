<?php
include ('./connect.php');
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $mobile=$_POST['mobile'];
    $image=$_FILES['file'];

    $imagefilename=$image['name'];
    //print_r($imagefilename);
    //echo "<br>";
    $imagefileerror=$image['error'];
    //print_r($imagefileerror);
    //echo "<br>";
    $imagfiletemp=$image['tmp_name'];
    //print_r($imagfiletemp);
    //echo "<br>";
    $filename_separate=explode('.', $imagefilename);
    //print_r($filename_separate);


    $file_extension=strtolower(end($filename_separate));
    //print_r($file_extension);
    $extension=array('jpeg', 'jpg', 'png','pdf');
    if(in_array($file_extension, $extension))
    {
        $upload_image='images/'.$imagefilename;
        move_uploaded_file($imagfiletemp, $upload_image);
        $sql="insert into `login` (name, mobile,image) values ('$username', '$mobile', '$upload_image')";
        $result=mysqli_query($con, $sql);
        if($result) {
            echo '<div class="alert alert-success" role="alert">
                <strong>Success</strong> Data inserted successfully
                </div>';
        }else{
            die (mysqli_error($con));
        }
    }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<title>Display data</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
img{
width:200px;
}
</style>
</head>
<body>
<h1 class="text-center my-4">User data</h1>
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
    <?php
    $sql="Select * from `login`";
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
</body>
</html>
