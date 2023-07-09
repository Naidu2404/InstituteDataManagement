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
            <?php inputFields("FullName", "name", "", "text")?>
            <?php inputFields("Regdno", "regdno", "", "text")?>
            <?php inputFields("Company Name", "company", "", "text")?>
            <?php inputFields("Duration", "duration", "", "number")?>
            <?php inputFields("Start date", "sdate", "", "date")?>
            <?php inputFields("End date", "edate", "", "date")?>
            <?php radioField("Is Stipend paid by the company to the student?", "radio", "isp")?>
            <?php radioField("Is the company charging any amount from the student?", "radio", "com")?>
            <?php inputFields("If yes,how much?", "hm", "", "number")?>
            <?php inputFields("", "file", "", "file")?>
            <button class="btn btn-dark" type="submit" name="internsubmit">submit</button>
        </form>
    </div>
</body>
</html>