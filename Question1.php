<?php
    /*$message = "Missing semi-colon"
    echo $message;

    $message2 = "Typo";
    eco $message2;

    $message3 = "Undefined variable error";
    echo $3message;

    $result=10/0;
    echo "Result is: ".$result;

    $num1 = 10;
    $num2 = 11;
    if ($num1>10) {
        echo "num1 is equal or greater to 10";
    } else if ($num2>10) {
        echo "num2 is equal or greater to 10";
    } 


    
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=my_database', 'wrong_username', 'wrong_password');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);

        // Check for connection errors
        if ($pdo->errorCode()) {
            echo "Connection failed: " . $pdo->errorInfo()[2];
        }
    } catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    } */


    try {
        $pdo = new PDO('mysql:host=localhost;dbname=my_database', 'wrong_username', 'wrong_password');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    
        // Check for connection errors
        if ($pdo->errorCode()) {
            echo "Connection failed: " . $pdo->errorInfo()[2];
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }


?>