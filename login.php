<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Email Login</title>
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <div class="container">
    <h1>Email Login</h1>
    <form action="" method="post">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" placeholder="Enter your password" required>
      <button type="submit" class="btn" formaction="userlogin.php">Login</button>
    </form>
    <p>Don't have an account? <a href="signup.php">Sign up here</a></p>
  </div>
</body>
</html>
