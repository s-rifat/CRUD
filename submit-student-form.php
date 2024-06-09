<!DOCTYPE html>
<html>
  <head>
    <title>Student Database</title>
  </head>
  <body>
  <h2>Student Form</h2>
    <form action="" method="POST">
        Name:<br>
        <input type="text" name="name" required> <br>
        Age:<br>
        <input type="number" name="age" required> <br>
        Email:<br>
        <input type="email" name="email" required> <br>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>
    <br>
    <a href="view-student-list.php">View Student List</a>
  </body>
</html>

<?php
  include "dbconfig.php";
  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $sql = "INSERT INTO students(name, age, email) VALUES ('$name','$age','$email')";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      header('Location: view-student-list.php');
    }else{
      echo "Error:". $sql . "<br>". $conn->error;
    }
    $conn->close();
  }
?>