<?php
session_start();

// Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database");

// Get the current user ID
$user_id = $_SESSION['user_id'];

// Receive a new message
if (isset($_POST['message'])) {
    $message = $_POST['message'];

    // Insert the message into the database
    $sql = "INSERT INTO messages (user_id, message) VALUES ($user_id, '$message')";
    mysqli_query($conn, $sql);
}

// Fetch the latest messages
$sql = "SELECT * FROM messages ORDER BY id DESC LIMIT 10";
$result = mysqli_query($conn, $sql);
$messages = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Return the messages in JSON format
header('Content-Type: application/json');
echo json_encode($messages);
?>
