<?php
require_once "db_connect.php";


$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);


while($row = mysqli_fetch_assoc($result)){

    echo "
    <tr>
                    <th scope='row'>{$row['id']}</th>
                    <td>{$row['first_name']}</td>
                    <td>{$row['last_name']}</td>
                    <td>{$row['email']}</td>
                </tr>
    ";
}