<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/master.css">
    <title>fizz-buzz</title>
  </head>
  <body>
    <?php
      $counter = 100;
      for ($i=1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i %5 == 0) echo "<p>FizzBuzz</p>";
        else if ($i % 3 == 0) echo "<p>Fizz</p>";
        else if ($i % 5 == 0) echo "<p>Buzz</p>";
        else echo $i.'<p></p>';
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
