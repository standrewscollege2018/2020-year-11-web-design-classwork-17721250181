<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
  </head>
  <body>
    <?php
      $num_a = rand(0,50);
      $num_b = rand(0,50);
      $sum = $num_a + $num_b;
      // echo "$num_a"."$num_b";
      // echo "<p>What is the sum of $num_a and $num_b</p>";
     ?>
    <form action="greeting.php" method="post">
      <p>Guess a number from 1 - 100</p>
      <input type="number" name="ans" placeholder="Put your answer here">
      <!-- <input type="hidden" name="random1" value="num_a"> -->
      <!-- <input type="hidden" name="random2" value="$num_b"> -->
      <button type="submit" name="button">Confirm</button>
    </form>
  </body>
</html>
