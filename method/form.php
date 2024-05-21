<?php
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
    <input type="text" name="first_name" id="first_name" placeholder="Enter First Name" value="<?= $firstName ?>" required>
    <input type="text" name="last_name" id="last_name" placeholder="Enter Last Name" value="<?= $lastName ?>" required>
    <input type="email" name="email" id="email" placeholder="Enter Email" value="<?= $email ?>" required>
    <button type="button" onclick="SaveData('<?= $updateKey ?>')">Save Details</button>
</form>