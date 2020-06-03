<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles_fizzbuzz.css">
    <title>fizz-buzz</title>
  </head>
  <body>
    <?php
      if(!isset($_POST['fizzbuzz_value']))header('Location: enter.php');
    ?>
    <img src="fizzbuzz.png" alt="fizzbuzz.png">
    <p></p>
    <?php
      $limit = $_POST['fizzbuzz_value'];
      for ($i=1; $i <= $limit; $i++) {
        if ($i % 3 == 0 && $i %5 == 0) echo "<div class='fizzbuzz'><h2>FizzBuzz</h2></div>";
        else if ($i % 3 == 0) echo "<div class='fizz'><p>Fizz</p></div>";
        else if ($i % 5 == 0) echo "<div class='buzz'><p>Buzz</p></div>";
        else echo '<p>'.$i.'</p>';
      }
      /*
      while ($counter) {
        // code...
      }
      do {
        // code...
      } while ($a <= 10);
      */
     ?>

  </body>
</html>
