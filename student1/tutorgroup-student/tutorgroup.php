<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles_tutorgroup.css">
    <title>Tutorgroup</title>
  </head>
  <body>
    <div class="all-container">
      <h1>Turotgroup</h1>
      <p>Select a tutorgroup.</p>
      <?php
      //connect to database
      $db_connect = mysqli_connect("localhost","root","","studentdb");
      //check if connect is correct
      if(mysqli_connect_errno()) echo "Connection Error" . mysqli_connect_errno();
      // create Query
      $student_sql = "SELECT * FROM tutorgroup";
      //check is the sql correct
      if($student_qry = mysqli_query($db_connect,$student_sql))
      {
        //do the query
        while($student_aa = mysqli_fetch_assoc($student_qry)){
          echo '<p><a href="student.php?tutor_group_ID='.$student_aa['tutorgroupID'].'">'.$student_aa['name'].' </a></p>';
        }
      }
      ?>

    </div>
  </body>
</html>
