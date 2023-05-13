<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Email System</title>
    <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <header>
      <h1>Email System</h1>
    </header>
    <main>
      <div class="inbox">
          <a href="retrieve.php"><h2>Inbox</h2></a>
      </div>
      <div class="compose">
        <h2>Compose</h2>
        <form action="send.php" method="post">
          <label for="to">To:</label>
          <input type="email" id="to" name="to">
          <label for="subject">Subject:</label>
          <input type="text" id="subject" name="subject">
          <label for="message">Message:</label>
          <textarea id="message" name="message"></textarea>
          <button type="submit">Send</button>
        </form>
      </div>
    </main>
  </body>
</html>
