<?php
$mysqli = new mysqli("localhost", "root", "", "overlay_module");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if ($email) {
        $stmt = $mysqli->prepare("INSERT INTO subscriptions (email) VALUES (?)");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->close();
        echo "Subscription successful";
    } else {
        http_response_code(400);
        echo "Invalid email address";
    }
}
?>
