<?php
include '../include/functions.php';
$updateKey = $_POST['updateKey'];
$firstName = $lastName = $email = '';
if ($updateKey != 0) {

    $user = GetUserData()[$updateKey];
    $firstName = $user['first_name'];
    $lastName = $user['last_name'];
    $email = $user['email'];
}

?>


<form action="" id="data-form">
    <div class="row g-2">
        <div class="col-md-6">
            <input class="form-control" type="text" name="first_name" id="first_name" placeholder="Enter First Name" value="<?= $firstName ?>" required>
        </div>
        <div class="col-md-6">
            <input class="form-control" type="text" name="last_name" id="last_name" placeholder="Enter Last Name" value="<?= $lastName ?>" required>
        </div>
        <div class="col-12">
            <input class="form-control" type="email" name="email" id="email" placeholder="Enter Email" value="<?= $email ?>" required>
        </div>
        <div class="col-12 text-end">
            <button class="btn btn-light" type="button" onclick="CloseForm()">Close</button>
            <button class="btn btn-dark" type="button" onclick="SaveData('<?= $updateKey ?>')">Save Details</button>
        </div>
    </div>



</form>