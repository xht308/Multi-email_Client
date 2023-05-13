<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Sign Up</title>
  <link rel="stylesheet" href="css/signup.css">
</head>
<body>
  <div class="container">
    <h1>Email Sign Up</h1>
    <form action="" method="post">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter your name" required>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
      <button type="submit" class="btn" formaction="usersignup.php">Sign Up</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a></p>
  </div>
</body>
</html>
