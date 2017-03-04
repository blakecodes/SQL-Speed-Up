<?php
/*Database credentials*/
$host = 'localhost';
$database = 'DATABASE_NAME';
$username = 'DATABASE_USERNAME';
$password = 'DATABASE_PASSWORD';


try {
    $handler = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
    $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Database error!';
    echo $e->getMessage();
}
?>