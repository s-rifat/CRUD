​<?php
    include "dbconfig.php";
    if (isset($_GET['id'])) {
        $stu_id = $_GET['id'];
        $sql = "DELETE FROM students WHERE id ='$stu_id'";
        $result = $conn->query($sql);
        if ($result == TRUE) {
            header('Location: view-student-list.php');
        }else{
            echo "Error:" . $sql . "<br>" . $conn->error;
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
    }
?>