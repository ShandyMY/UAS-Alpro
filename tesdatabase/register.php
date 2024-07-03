<?php 
session_start(); 
include "db_conn.php";

if (isset($_SESSION['user_name'])) {
    header("Location: home.php"); // Redirect jika pengguna sudah login
    exit();
}

if (isset($_POST['submit'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $name = validate($_POST['name']);

    // Lakukan validasi
    if (empty($uname) || empty($pass) || empty($name)) {
        header("Location: register.php?error=All fields are required");
        exit();
    } else {
        // Masukkan data ke database tanpa melakukan hash pada kata sandi
        $sql = "INSERT INTO users (user_name, password, name) VALUES ('$uname', '$pass', '$name')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php?success=Your account has been created successfully");
            exit();
        } else {
            header("Location: register.php?error=Unknown error occurred, please try again");
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="main">
        <div class="content">
            <h1>Create Account</h1>
    <?php if (isset($_GET['error'])) { ?>
        <p><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <form action="" method="post">
    <div class="form">
    <h2>Sign Up Here</h2>
        <input type="text" id="uname" name="uname" placeholder="Enter Username Here">
        <input type="password" id="password" name="password" placeholder="Enter Password Here">
        <input type="text" id="name" name="name">
        <button type="submit" class="btnn" name="submit" value="Register"><a href="#">Sign Up</a></button>
    </form>
    <p class="link">Already have an account? <a href="index.php">Login here</a></p>
</body>
</html>
