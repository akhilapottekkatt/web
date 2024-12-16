<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "deno";
    
    // Create connection
    $connection = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    } else {
        echo "Connection successful<br>";  // Corrected: Use echo for success message
    }

    // SQL to create table
    $sql = "CREATE TABLE myGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_data TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($connection->query($sql) === TRUE) {
        echo "Table myGuests created successfully";
    } else {
        echo "Error creating table: " . $connection->error;
    }

    // Close connection
    $connection->close();
?>