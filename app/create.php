<?php include 'db.php'; ?>

<?php
if (isset($_POST['submit'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($conn, "INSERT INTO users (name, email) VALUES ('$name', '$email')");

    header("Location: index.php");
}
?>

<form method="post">
    <h2>Add User</h2>
    Name: <input type="text" name="name"><br><br>
    Email: <input type="email" name="email"><br><br>
    <button type="submit" name="submit">Save</button>
</form>
