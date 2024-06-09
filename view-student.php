<?php
    include "dbconfig.php";

    if (isset($_GET['id'])) {
        $stu_id = $_GET['id'];
        $sql = "SELECT * FROM students WHERE id='$stu_id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $id = $row['id'];
            $name = $row['name'];
            $age = $row['age'];
            $email = $row['email'];
        } 
        else {
            header('Location: view-student-list.php');
        }
    }
?>

<html>
    <body>
        <h2>Student Details</h2>
        Name: <?php echo $name;?>
        <br>
        Age: <?php echo $age;?>
        <br>
        Email: <?php echo $email?>
        <br>
        <br>
        <a href="view-student-list.php">Back to Student List</a>
    </body>
</html>