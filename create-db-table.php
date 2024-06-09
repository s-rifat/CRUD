<?php
     $servername = "localhost"; // Replace with your server name
     $username = "root"; // Replace with your MySQL username
     $password = ""; // Replace with your MySQL password
     $dbname = "university";
 
     // Create connection
     $conn = new mysqli($servername, $username, $password);
 
     // Check connection
    if ($conn->connect_error) {
        die("DB Connection failed: " . $conn->connect_error);
    } 
    
    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    if ($conn->query($sql) === TRUE) {
        echo "Database created!<br>";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    // Close connection to create a new one for the database
    $conn->close();

    // Create connection to the new database
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL to create table
    $sql = "CREATE TABLE IF NOT EXISTS students (
        id INT PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(50) NOT NULL,
        age INT,
        email VARCHAR(50),
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    )";

    if ($conn->query($sql) === TRUE) {
        echo "Students table created!<br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // Close connection
    $conn->close();

?>