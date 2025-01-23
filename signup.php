<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Connecting Data base         Connecting Data base
    $serverName = "localhost";
    $dbName = "fyp";
    $userName = "root";
    $password = "";

    $connect = mysqli_connect($serverName, $userName, $password, $dbName);

    // if (!$connect) {
    //     echo "Connection Failed.........";
    // } else {
    //     echo "Data-Base connected Succesfully.....";
    // }

    //   Recieving user input               Recieving user input 

    $first = $_POST["firstName"];
    $last = $_POST["lastName"];
    $father = $_POST["fatherName"];
    $contact = $_POST["contact"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Gender not required
    if (empty($_POST["gender"])) {
        $gender = "null";
    } else {
        $gender = $_POST["gender"];
    }


    // Checking existance of account
    $result = $connect->query("SELECT id FROM signin WHERE email = '$email' LIMIT 1");

    if ($result->num_rows == 1) {
        echo "<script>
        alert('This Email has already been taken');
        window.location.href='fypSignup.html';
        </script>";
    } 
    
    // Inserting values in table
    else { 

        $abc = "INSERT INTO signin( firstName, lastName, fatherName, contact, email, password, gender)
            VALUES ('$first', '$last', '$father', '$contact', '$email', '$password', ' $gender')";

        if ($connect->query($abc) == true) {
            echo "<script>
            alert('Congrats!!! You are registered.,Check account details');
            window.location.href='viewacc.php';
            </script>";
            $connect->insert_id;
        } 
    }

}

?>