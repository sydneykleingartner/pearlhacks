<?php
$servername = "192.168.64.2";
$username = "root";
$password = "password";
$dbname = "pearlhacks";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO user (fname, lname, email)
    VALUES (:firstname, :lastname, :email)";
    $sql->bindParam(":firstname", $_POST['firstname']);
    $sql->bindParam(":lastname", $_POST['lastname']);
    $sql->bindParam(":email", $_POST['email']);

    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>
