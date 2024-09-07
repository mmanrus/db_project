<?php 
    include 'db_conn.php';

    header('Content-Type: text/html; charset=utf-8');

    $sql = "SELECT user_id, name, email, message, created_at FROM users";
    $result = mysqli_query($conn, $sql);
    if (!$result){
        die("Query failed: ". $conn->error);
    }
    echo "<pre>";
        echo print_r($result);
    echo "</pre>";

    if ($result->num_rows > 0){
        echo
            "<table>
                <tr>
                    <th>User_ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Created at</th>
                </tr>";


        while($row = $result -> fetch_assoc()){
            echo "<tr>";
                echo "<td>" . $row["user_id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["message"] . "</td>";
                echo "<td>" . $row["created_at"] . "</td>";
            echo "</tr>";
        }
    }
    else {
        echo "No results found.";
    }

    $conn -> close();
?>