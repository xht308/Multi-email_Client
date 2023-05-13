<?php
session_start();
// Connect to the database
$conn = mysqli_connect('Localhost', 'root', '', 'email');

// Retrieve emails from the database for the logged-in user
$email = $_SESSION['email'];
$sql = "SELECT * FROM mail WHERE Recipient_Email = '$email'";
$result = mysqli_query($conn, $sql);

// Display the emails in the inbox
echo '<h2>Inbox</h2>';
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="email">';
    echo '<p>From: ' . $row['Sender_Email'] . '</p>';
    echo '<p>Subject: ' . $row['Subject'] . '</p>';
    echo '<p>Date: ' . $row['Send_At'] . '</p>';
    echo '<p>Message: '. $row['Message'] . '</p>';
    echo '</div>';
}

?>