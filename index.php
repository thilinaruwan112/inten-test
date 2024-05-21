<?php
include './include/config.php';
include './include/functions.php';
$useData = GetUserData();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intern Test</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./assets/css/styles-1.0.css">
</head>

<body>
    <button onclick="AddNewUser()">+ Add New</button>
    <table border="1">
        <thead>
            <tr>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($useData)) {
                foreach ($useData as $user) {
            ?>
                    <tr>
                        <td><?= $user['first_name'] ?></td>
                        <td><?= $user['last_name'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td><button onclick="AddNewUser('<?= $user['id'] ?>')">Edit</button><button>Delete</button></td>
                    </tr>
            <?php
                }
            }
            ?>

        </tbody>
    </table>

    <div class="form-box" id="form-box">

    </div>


    <script src="./assets/js/scripts-1.0.js"></script>
</body>

</html>