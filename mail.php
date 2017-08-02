<?php
if (isset($_POST['sendmail'])) {
  $subject = htmlspecialchars(trim($_POST['subject']));
  $message = htmlspecialchars(trim($_POST['message']));

  if (!empty($subject) && !empty($_POST['message'])) {
    mail("mihaskep@gmail.com", $subject, $message);
  }
}
?>
<!DOCTYPE HTML>
<html>
<head>
  <title>mail</title>
  <meta charset="utf-8">
</head>
<body>
  <form action="mail.php" method="post">
    <input type="text" name="subject"><br>
    <input type="text" name="message"><br>
    <input type="submit" name="sendmail" value="sendmail">
  </form>
</body>
</html>
