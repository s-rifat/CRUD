<?php
    include "dbconfig.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Student Database</title>
    </head>
    <body>
        <div>
            <h2>Student List</h2>
            <table class="table" border="1">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <?php
                    $sql = "SELECT * FROM students";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {

                ?>
                        
                            <tr>
                                <td><?php echo $row['id']?></td>
                                <td><?php echo $row['name']?></td>
                                <td><?php echo $row['age']?></td>
                                <td><?php echo $row['email']?></td>
                                <td>
                                    <a href="view-student.php?id=<?php echo $row['id']?>">Details</a>&nbsp;
                                    <a href="update-student.php?id=<?php echo $row['id']?>">Edit</a>&nbsp;
                                    <a href="delete-student.php?id=<?php echo $row['id']?>">Delete</a>
                                </td>
                            </tr>
                <?php      
                    }
                ?>
            </table>
            <br>
            <a href="submit-student-form.php">Back to Student Form</a>
        </div>
    </body>
</html>