<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css">
    <title>Greeting</title>
  </head>
  <body>
    <?php
    //relocate
    if(!isset($_POST['name']))header('Location: serch.php');
    // get the firstname
    $firstname_serch = trim($_POST['name']);
    //connect to database
    $db_connect = mysqli_connect("localhost","root","","studentdb");
    //check if connect is correct
    if(mysqli_connect_errno()) echo "Connection Error" . mysqli_connect_errno();
    // create Query
    $student_sql = "SELECT student.studentID, student.firstname, student.lastname, tutorgroup.name FROM student JOIN tutorgroup ON student.tutorgroupID = tutorgroup.tutorgroupID WHERE student.firstname LIKE '%$firstname_serch%'";
    /*
    run Query
    $student_qry = mysqli_query($db_connect,$student_sql);
    store result to array
    $student_aa = mysqli_fetch_assoc($student_qry);
    */
    //run Query
    if($student_qry = mysqli_query($db_connect,$student_sql))
    {
      if(mysqli_num_rows($student_qry)){
        //outtput name
        while($student_aa = mysqli_fetch_assoc($student_qry)) echo '<p>StudentID: '.$student_aa['studentID'].'  Name: '.$student_aa['firstname'].' '.$student_aa['lastname'].'  Turotgroup:'.$student_aa['name'].'</p>';
      }
      else echo "<h2>No student named $firstname_serch was found</h2>";
    }
    ?>

     <form action="serch.php" method="post">
       <button type="submit" name="button">Back</button>
     </form>
  </body>
</html>
