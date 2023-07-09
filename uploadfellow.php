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
    <h1 class="text-center my-3">Faculty Fellowships</h1>
    <div class="container d-flex justify-content-center">
        <form action="upload.php" method="post" class="w-50" enctype="multipart/form-data">
            
            <?php inputFields("Employee id", "empid", "", "text")?>
            <?php inputFields("Name of the fellowship", "fname", "", "text")?>
            <?php inputFields("Academic Year", "acyear", "", "text")?>
            <?php inputFields("Level (STATE/NATIONAL/INTERNATIONAL)", "level", "", "text")?>
            <?php inputFields("Issuing authority", "auth", "", "text")?>
            <?php inputFields("", "file", "", "file")?>
            <button class="btn btn-dark" type="submit" name="fellowsubmit">submit</button>
        </form>
    </div>
</body>
</html>