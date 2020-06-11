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
    // create Query
    $student_sql = "SELECT student.studentID, student.firstname, student.lastname, tutorgroup.name FROM student JOIN tutorgroup ON student.tutorgroupID = tutorgroup.tutorgroupID WHERE student.firstname LIKE '%$firstname_serch%'";
    // run Query
    $student_qry = mysqli_query($db_connect,$student_sql);
    // store result to array
    $student_aa = mysqli_fetch_assoc($student_qry);

    //output the name
    echo 'StudentID: '.$student_aa['studentID'].'<p></p>Name(Firstname-Lastname): '.$student_aa['firstname'].' '.$student_aa['lastname'].'<p></p>Turotgroup:'.$student_aa['name'];
    ?>

     <form action="serch.php" method="post">
       <button type="submit" name="button">Back</button>
     </form>
  </body>
</html>
