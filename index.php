<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP MySQL App</title>
</head>
<body>
    <h2>Users List</h2>
    <a href="create.php">Add New User</a>
    <br><br>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>

        <?php
        $result = mysqli_query($conn, "SELECT * FROM users");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>". $row['id'] ."</td>
                    <td>". $row['name'] ."</td>
                    <td>". $row['email'] ."</td>
                    <td>
                        <a href='edit.php?id=".$row['id']."'>Edit</a> |
                        <a href='delete.php?id=".$row['id']."'>Delete</a>
                    </td>
                  </tr>";
        }
        ?>

    </table>
</body>
</html>
