<?php
$dsn = 'mysql:host=localhost;dbname=checkergame';

$username = 'root';
$password = '';

try {
            $db = new PDO($dsn, $username, $password);
            //echo "successfully connected to db";
        }
        catch (Exception $e) {
            $error = $e->getMessage();
            echo $error;
            exit();
        }
?>