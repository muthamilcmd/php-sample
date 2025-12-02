<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$user = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];

    mysqli_query($conn, "UPDATE users SET name='$name', email='$email' WHERE id=$id");

    header("Location: index.php");
}
?>

<form method="post">
    <h2>Edit User</h2>
    Name: <input type="text" name="name" value="<?php echo $user['name']; ?>"><br><br>
    Email: <input type="email" name="email" value="<?php echo $user['email']; ?>"><br><br>
    <button type="submit" name="update">Update</button>
</form>
