<?php


function getAllUser()
{
    global $conn;
    $query = "SELECT * FROM users WHERE role = 'user'";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
?>