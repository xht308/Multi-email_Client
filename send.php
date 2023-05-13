<?php
  // Start the session
  session_start();

  // Connect to the database
  $servername = "Localhost";
  $username = "root";
  $password = "";
  $dbname = "email";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

    // Get the form data
    $sender_email = $_SESSION["email"];
    $recipient_email = $_POST["to"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    // Get the current time as a Unix timestamp
    $current_time = time();

    // Format the Unix timestamp into a human-readable date and time
    $current_time_formatted = date('Y-m-d H:i:s', $current_time);
    $time = $current_time_formatted;

    // Insert the email into the database
    $sql = "INSERT INTO mail (Sender_email, Recipient_email, Subject, Message,Send_At) VALUES ('$sender_email', '$recipient_email', '$subject', '$message','$time')";
    if (mysqli_query($conn, $sql)) {
      // Redirect back to the main page with a success message
      header("Location: index.php?success=true");
      exit;
    } else {
      // Redirect back to the main page with an error message
      header("Location: index.php?error=true");
      exit;
    }
 
?>
