<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Query with single result</title>
  </head>
  <body>
    <?php
      // connect to database
      $db_connect = mysqli_connect("localhost","root","","studentdb");

      // create Query
      $student_sql = "SELECT * FROM student WHERE studentID = 5";

      // run Query
      $student_qry = mysqli_query($db_connect,$student_sql);

      // store result to array
      $student_aa = mysqli_fetch_assoc($student_qry);

      // display single result
      echo $student_aa['firstname'];

     ?>
  </body>
</html>
