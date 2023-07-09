<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'automation';
$conn = mysqli_connect($server, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed:" . $con->connect_error);
}
echo "";
//student signup
if (isset($_POST['signup'])) {
    $firstname=$_POST['firstName'];
    $lastname=$_POST['lastName'];
    $regdno = $_POST['regdno'];
    $pno=$_POST['number'];
    $email=$_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `student`(`firstname`, `lastname`, `regdno`, `email`, `pno`, `password`) 
    VALUES ('$firstname','$lastname','$regdno','$email','$pno','$password')";
    if (mysqli_query($conn, $sql)) {
        echo "<center><h2>Registered Successfully</h2>
        <a style=\"cursor: pointer;
        width: max-content;
        text-decoration: none;
        border-radius: 20px;
        border: 1px solid #212529;
        background-color: #212529;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
        padding: 12px 45px;
        margin-top: 20px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;\"
        href=\"studentlogin.php\">Go to login</a></center>";
    } else {
        //echo "Error $sql." . mysqli_error($conn);
        //echo "Email already Registered";
        $error =  'email id already used';
        echo "Already registered";
    }
}

//hod signup
if (isset($_POST['hsignup'])) {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $hodid = $_POST['hodid'];
    $pno=$_POST['number'];
    $email=$_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `hod`(`firstname`, `lastname`, `hodid`, `email`, `pno`, `password`) 
    VALUES ('$firstname','$lastname','$hodid','$email','$pno','$password')";
    if (mysqli_query($conn, $sql)) {
        echo "<center><h2>Registered Successfully</h2>
        <a style=\"cursor: pointer;
        width: max-content;
        text-decoration: none;
        border-radius: 20px;
        border: 1px solid #212529;
        background-color: #212529;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
        padding: 12px 45px;
        margin-top: 20px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;\"
        href=\"hodlogin.php\">Go to login</a></center>";
    } else {
        //echo "Error $sql." . mysqli_error($conn);
        //echo "Email already Registered";
        $error =  'email id already used';
        echo "Already registered";
    }
}




//faculty signup
if (isset($_POST['fsignup'])) {
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $empid = $_POST['empid'];
    $pno=$_POST['number'];
    $email=$_POST['email'];
    $designation=$_POST['designation'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `faculty`(`firstname`, `lastname`, `empid`, `email`, `pno`, `password`,`designation`) 
    VALUES ('$firstname','$lastname','$empid','$email','$pno','$password','$designation')";
    if (mysqli_query($conn, $sql)) {
        echo "<center><h2>Registered Successfully</h2>
        <a style=\"cursor: pointer;
        width: max-content;
        text-decoration: none;
        border-radius: 20px;
        border: 1px solid #212529;
        background-color: #212529;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
        padding: 12px 45px;
        margin-top: 20px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;\"
        href=\"facultylogin.php\">Go to login</a></center>";
    } else {
        //echo "Error $sql." . mysqli_error($conn);
        //echo "Email already Registered";
        $error =  'email id already used';
        echo "Already registered";
    }
}
//login student
session_start();
if (isset($_POST['sLogin'])) {
    $regdno = $_POST['regdno'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `student` WHERE `regdno`='$regdno' AND `password`='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['regdno']=$regdno;
        header("location:studentuser.php");
    } else {
        $error = 'emailid or password is incorrect';
        echo "<center><h2>Regd no or password is incorrect</h2>
        <a style=\"cursor: pointer;
        width: max-content;
        text-decoration: none;
        border-radius: 20px;
        border: 1px solid #212529;
        background-color: #212529;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
        padding: 12px 45px;
        margin-top: 20px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;\"
        href=\"studentlogin.php\">Go Back to Login</a></center>";
    }

}




//login hod
//session_start();
if (isset($_POST['hLogin'])) {
    $hodid = $_POST['hodid'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `hod` WHERE `hodid`='$hodid' AND `password`='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['hodid']=$hodid;
        header("location:hoduser.php");
    } else {
        $error = 'emailid or password is incorrect';
        echo "<center><h2>ID or password is incorrect</h2>
        <a style=\"cursor: pointer;
        width: max-content;
        text-decoration: none;
        border-radius: 20px;
        border: 1px solid #212529;
        background-color: #212529;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
        padding: 12px 45px;
        margin-top: 20px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;\"
        href=\"hodlogin.php\">Go Back to Login</a></center>";
    }

}






//login faculty
//session_start();
if (isset($_POST['fLogin'])) {
    $empid = $_POST['empid'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `faculty` WHERE `empid`='$empid' AND `password`='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['empid']=$empid;
        header("location:facultyuser.php");
    } else {
        $error = 'emailid or password is incorrect';
        echo "<center><h2>ID or password is incorrect</h2>
        <a style=\"cursor: pointer;
        width: max-content;
        text-decoration: none;
        border-radius: 20px;
        border: 1px solid #212529;
        background-color: #212529;
        color: #FFFFFF;
        font-size: 12px;
        font-weight: bold;
        font-family: 'Montserrat', sans-serif;
        padding: 12px 45px;
        margin-top: 20px;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: transform 80ms ease-in;\"
        href=\"facultylogin.php\">Go Back to Login</a></center>";
    }

}
