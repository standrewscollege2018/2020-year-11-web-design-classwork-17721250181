<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles_student.css">
    <title>Students</title>
  </head>
  <body>
    <?php
    //check is the $get array seted
    if(!isset($_GET['tutor_group_ID']))header('Location: tutorgroup.php');

    //Get tutorgroupID
    $tutorgroupID_selected=$_GET['tutor_group_ID'];

    //connect to database
    $db_connect = mysqli_connect("localhost","root","","studentdb");
    //check if connect is correct
    if(mysqli_connect_errno()) echo "Connection Error" . mysqli_connect_errno();
    // create Query
    $student_sql = "SELECT * FROM student WHERE student.tutorgroupID = '$tutorgroupID_selected'";
    //check is the sql correct.
    if($student_qry = mysqli_query($db_connect,$student_sql))
    {
      //check is there any student in the selected tutorgroup
      if(mysqli_num_rows($student_qry)){
        //do Query
        while($student_aa = mysqli_fetch_assoc($student_qry)){
          echo '<p>StudentID:'.$student_aa['studentID'];
          echo '&nbsp &nbsp Name:'.$student_aa['firstname'].' '.$student_aa['lastname'].'</p>';
          }
      }
      else echo "<h2>No student is in this tutorgroup</h2>";
    }


     ?>
  </body>
</html>
