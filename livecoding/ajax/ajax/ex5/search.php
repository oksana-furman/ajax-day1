<?php

require_once "db_connect.php";


$value = $_GET['search'];


$sql = "SELECT * FROM `users` WHERE first_name LIKE '$value%' OR last_name LIKE  '$value%';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
                        <th scope='row'>{$row['id']}</th>
                        <td>{$row['first_name']}</td>
                        <td>{$row['last_name']}</td>
                        <td>{$row['email']}</td>
                    </tr>
        ";
    }
} else {
    echo "No result";
}
