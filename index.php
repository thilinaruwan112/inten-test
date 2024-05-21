<?php
include './include/config.php';
include './include/functions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intern Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/styles-1.0.css">
</head>

<body>
    <div class="container p-3">
        <div class="row mt-5">
            <div class="col-12">
                <h3 class="border-bottom">User Information</h3>
            </div>
        </div>
        <div class="text-end">
            <button class="btn btn-primary" onclick="AddNewUser()">+ Add New</button>
        </div>


        <!-- Data Table -->
        <div id="data-table"></div>

        <!-- User Form -->
        <div class="form-box" id="form-box"></div>
    </div>


    <!-- Scripts -->
    <script src="./assets/js/scripts-1.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>