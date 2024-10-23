<?php 
if(isset($_POST["email"]) || isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($_POST["email"] == "jomok@gmail.com" && $_POST["password"] == "1234") {
        header("Location: ./../dashboard.php");
        exit;
    } else {
        echo '<p style="color: red;"><i>email / password salah!</i></p>';
    }
}

echo '<a href="./../login.php">kembali ke halaman login</a>';
?>
