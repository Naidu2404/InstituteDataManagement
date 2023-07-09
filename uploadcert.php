<?php
require_once './operations.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBA Automation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="text-center my-3">Student Certifications</h1>
    <div class="container d-flex justify-content-center">
        <form action="upload.php" method="post" class="w-50" enctype="multipart/form-data">
            <?php inputFields("FullName", "fullname", "", "text")?>
            <?php inputFields("Regdno", "regdno", "", "text")?>
            <?php inputFields("Course on", "cname", "", "text")?>
            <?php inputFields("Platform or Organization from whom the certificate is issued", "org", "", "text")?>
            <?php inputFields("Duration", "duration", "", "number")?>
            <?php inputFields("Start date", "sdate", "", "date")?>
            <?php inputFields("End date", "edate", "", "date")?>
            <?php inputFields("Date of Exam", "doe", "", "date")?>
            <?php inputFields("Score", "score", "", "number")?>
            <?php inputFields("Faculty in-charge","fin","","text")?>
            <?php inputFields("", "file", "", "file")?>
            <button class="btn btn-dark" type="submit" name="certsubmit">submit</button>
        </form>
    </div>
</body>
</html>