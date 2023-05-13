<?php
    
    // Get the user's credentials from the form
    $address = $_POST['email'];
    $password = $_POST['password'];

    // Connect to the database
    $conn = mysqli_connect("Localhost", "root", "", "email");

    // Check if the connection was successful
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query the database to check if the user's credentials are correct
    $sql = "SELECT * FROM user WHERE Email_Address='$address' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful
    if (!$result) {
        die("Query failed: " . mysqli_error($conn));
    }

    // Check if the user's credentials are correct
    if (mysqli_num_rows($result) > 0) {
        // Redirect the user to another page
        // Start the session
        session_start();

        // Set the user's email address in the session variable
        $_SESSION['email'] = $address;

        header("Location: index.php");
        exit();
    } else {
        // Display an error message to the user
        header("Location:login-fail.php");
        
    }

    // Close the database connection
    mysqli_close($conn);


?>
