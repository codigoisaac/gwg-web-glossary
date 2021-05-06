<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Getting Started</title>
</head>

<body>
  <!-- Echo  -->
  <h1>echo</h1>
  <?php echo '<p>Hello PHP</p>'; ?>
  <h1>echo with variable ($_SERVER)</h1>
  <?php echo '<p>Your browser info: ' . $_SERVER['HTTP_USER_AGENT']; ?>

  <!-- In out of PHP  -->
  <h1>Mixing both HTML and PHP modes</h1>
  <p>The little magic bellow is done jumping in and out of PHP mode even in the middle of a PHP block:</p>
  <?php
  if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') === false) {
  ?>
    <small>
      this message will only be shown if you're not in Internet Explorer:
    </small>
    <p>Thank God you're not using Internet Explorer, right!</p>
  <?php } else { ?>
    <p>Bro, you're using Internet Explorer... why???</p>
  <?php } ?>
  <b>For outputting large blocks of text, dropping out of PHP parsing mode is generally more efficient than sending all of the text through echo or print.
  </b>

  <br><br><br>
  -----
  <br><br><br>

  <a href="./1.1.0.dealWForms.php">1.1. Dealing With Forms</a>

  <br><br><br>
</body>

</html>