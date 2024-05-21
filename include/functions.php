<?php

include __DIR__ . '/config.php';
date_default_timezone_set("Asia/Colombo");

function GetUserData()
{

    global $link;

    $ArrayResult = array();
    $sql = "SELECT `id`, `first_name`, `last_name`, `email`, `created_at` FROM `user-data`";

    $result = $link->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $ArrayResult[$row['id']] = $row;
        }
    }
    return $ArrayResult;
}


function SaveData($first_name, $last_name, $email, $UpdateKey)
{

    global $link;

    $error = array();
    $current_time = date("Y-m-d H:i:s");

    if ($UpdateKey == 0) {
        $sql = "INSERT INTO `user-data` (`first_name`, `last_name`, `email`) VALUES (?, ?, ?)";
    } else {
        $sql = "UPDATE `user-data` SET `first_name` = ?, `last_name` = ?, `email` = ? WHERE `id` = '$UpdateKey'";
    }

    if ($stmt_sql = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt_sql, "sss", $first_name, $last_name, $email);
        if (mysqli_stmt_execute($stmt_sql)) {
            $error = array('status' => 'success', 'message' => 'Data saved successfully', 'last_inserted_id' => $UpdateKey);
        } else {
            $error = array('status' => 'error', 'message' => 'Something went wrong. Please try again later. ' . $link->error);
        }
        mysqli_stmt_close($stmt_sql);
    } else {
        $error = array('status' => 'error', 'message' => 'Something went wrong. Please try again later. ' . $link->error);
    }
    return json_encode($error);
}


function DeleteData($UpdateKey)
{

    global $link;

    $error = array();
    $current_time = date("Y-m-d H:i:s");

    $sql = "DELETE FROM `user-data` WHERE `id`= ?";
    if ($stmt_sql = mysqli_prepare($link, $sql)) {
        mysqli_stmt_bind_param($stmt_sql, "s", $UpdateKey);
        if (mysqli_stmt_execute($stmt_sql)) {
            $error = array('status' => 'success', 'message' => 'Data Deleted successfully', 'last_inserted_id' => $UpdateKey);
        } else {
            $error = array('status' => 'error', 'message' => 'Something went wrong. Please try again later. ' . $link->error);
        }
        mysqli_stmt_close($stmt_sql);
    } else {
        $error = array('status' => 'error', 'message' => 'Something went wrong. Please try again later. ' . $link->error);
    }
    return json_encode($error);
}
