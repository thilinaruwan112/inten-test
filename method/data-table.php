<?php
require_once('../include/config.php');
require_once('../include/functions.php');


$useData = GetUserData();
?>
<?php
if (!empty($useData)) {
?>
    <table class="table table-hover table-bordered mt-5">

        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($useData as $user) {
            ?>
                <tr>
                    <td><?= $user['first_name'] ?></td>
                    <td><?= $user['last_name'] ?></td>
                    <td><?= $user['email'] ?></td>
                    <td>
                        <button class="btn btn-info btn-sm" onclick="AddNewUser('<?= $user['id'] ?>')">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="DeleteData('<?= $user['id'] ?>')">Delete</button>
                    </td>
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
<?php
} else {
    echo 'No Records Available';
}
?>