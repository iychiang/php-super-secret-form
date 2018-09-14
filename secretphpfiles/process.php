<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>The Super Secret Form</title>
  <link rel='stylesheet' href='style.css'>
  <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
</head>
<body>
<div class='formresponse'>
<h2>
  <?php
    $name = $_POST['fullname'];
    echo 'Your secrets are safe!';
  ?>
</h2>
  <?php
    date_default_timezone_set('UTC');
    echo 'Info sealed away at ';
    echo date('h:i a');
  ?>
    <br>
  <?php echo '<p>(By the way, you shouldn\'t give away your personal information so freely)</p>'; 
  ?>
</div>
</body>
</html>