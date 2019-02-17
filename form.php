<?php
    try {
        $user="root";
        $password="";
        $dbh = new PDO('mysql:host=localhost', $user, $password);
        echo '<h1>Connected to MySQL</h1>';
    } catch (PDOException $e) {
        echo '<h1>MySQL Server is not connected</h1>';
        echo "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>
