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

    $fullName = $_POST["fullName"];
    $email = $_POST["email"];
    $purchase = $_POST["purchase"];
    $product = $_POST["product"];
    $need = $_POST["need"];
    $innovative = $_POST["innovative"];

    if (empty($_POST["reason"])) { // reason not required
        $reason = "null";
    } else {
        $reason = $_POST["reason"];
    }

    if (empty($_POST["recommend"])) { // recommend not required
        $recommend = "null";
    } else {
        $recommend = $_POST["recommend"];
    }

    $abc = "INSERT INTO feedback( fullName, email, purchased, product, reason, needed, innovative, recommendation)
        VALUES ('$fullName', '$email', '$purchase', '$product', '$reason', '$need', '$innovative', '$recommend')";

    if ($connect->query($abc) == true) {

        echo "<script>
        alert('Thanks for you feedback..Check feedback');
        window.location.href='viewfeedback.php';
        </script>";

        $connect->insert_id;
    } 

}

?>