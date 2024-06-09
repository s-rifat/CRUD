<?php
    include "dbconfig.php";

    if (isset($_POST['update'])) {
        $stu_id = $_POST['stu_id'];
        $name = $_POST['name'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $sql = "UPDATE students SET name='$name', age='$age', email='$email' WHERE id='$stu_id'";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            header('Location: view-student-list.php');
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }

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
        } else {
            header('Location: view-student-list.php');
        }
    }
?>

<html>
    <body>
        <h2>Update Form</h2>
        <form action="" method="post">
            Name:<br>
            <input type="text" required name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="stu_id" value="<?php echo $id; ?>">
            <br>
            Age:<br>
            <input type="text" required name="age" value="<?php echo $age; ?>">
            <br>
            Email:<br>
            <input type="email" required name="email" value="<?php echo $email; ?>">
            <br>
            <br>
            <input type="submit" value="Update" name="update">
        </form>
    </body>
</html>