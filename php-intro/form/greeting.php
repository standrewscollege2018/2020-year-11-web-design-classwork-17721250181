<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Greeting</title>
  </head>
  <body>
    <?php
      $user_ans = $_POST['ans'];
      // $num_a = $_POST['random1'];
      // $num_b = $_POST['random2'];
      // echo "$_POST[random1]";
      // echo "$num_a";
      //  echo "$num_b";
      if ($user_ans == 20) echo "You are correct  ：D";
      else if ($user_ans < 20) echo "Too small";
      else echo "Too big";
     ?>
     <form action="post.php" method="post">
       <button type="submit" name="button">Back</button>
     </form>
  </body>
</html>
