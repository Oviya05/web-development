<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    // Here, you would normally perform validation and save the data to a database
    // For demonstration, we'll just echo the values and set cookies

    echo "Username: " . $username . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password: " . $password . "<br>";

    // Set cookies
    setcookie("username", $username, time() + (86400 * 7), "/"); // 86400 = 1 day, expires in 7 days
    setcookie("email", $email, time() + (86400 * 7), "/");

    // Optional: Redirect to a welcome page after setting cookies
    // header("Location: welcome.php");
    // exit();
}
?>

