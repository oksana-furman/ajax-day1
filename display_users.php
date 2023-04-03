<?php
     require "./db_connect.php";

     $sql = "SELECT * FROM `users`";
     $result = mysqli_query($connect, $sql);

     while ($row = mysqli_fetch_assoc($result)) {
        echo "
        <tr>
            <th scope='row'>{$row['id']}</th>
            <td>{$row['fname']}</td>
            <td>{$row['lname']}</td>
            <td>{$row['email']}</td>
        </tr>";
     }