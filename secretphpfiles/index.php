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
<div class='main'>
  <form class='supersecretform' action='process.php' method='post'>
  <h1 class='title'>The Super Secret Form</h1>
  <h3 class='lead'>Keep all your private info in one place!</h3>
    <p>Enter your full name: <input name='fullname' type='text'><p>
    <p>What is your birthday? <input name='birthday' type='text'></p>
    <p>Phone number? <input name= 'phonenumber' type='text'></p>
    <p>Social Security number? <input name='ssnumber' type='text'></p>
    <p>Credit card number? <input name='ccnumber' type='text'></p>
    <p>Name on credit card? <input name='ccname' type='text'></p>
    <p>Credit card carrier? <input name='cccarrier' type='text'></p>
    <p>Card Security Code? (3 digits) <input name='ccsecurity' type='text'></p>
    <p>What's a secret you want buried in the grave?</p>
    <textarea class='biggestsecret' type='input'></textarea>
    <br>
    <input name= 'submit' type='submit'>

  </form>
</div>
  <?php
    // $hello = 'Hello';
    // echo $hello . 'world';

    // if ($hello == true) {
    //   echo 'it is true, i guess it exists';
    //   echo '<br>';
    // }

    // $people = array('Fred', 'Freddy', 'Frederick');
    // print_r($people);
    // echo $people[2];
    // echo '<br>';

    // foreach($people as $person) {
    //   echo $person . ' and ';
    // }

  ?>

</body>
</html>