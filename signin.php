<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // echo "inside......................";

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
    $email = $_POST["email"];
    $pass = $_POST["password"];

    // Checking existance of account
    $foundingEmail = $connect->query("SELECT id FROM signin WHERE email = '$email' LIMIT 1");
    if ($foundingEmail->num_rows == 0) {
        echo "<script>
        alert('Account not found. Register your self');
        window.location.href='fypSignup.html';
        </script>";
    }

    // Selecting values in table
    else {

        // echo "inside.........2.............";
        // $abc = "SELECT password FROM signin WHERE email = '$email'";
        // $name = "SELECT firstName FROM signin WHERE email = '$email'";

        $query = "SELECT * FROM `signin` WHERE email = '$email' ";

        // FETCHING DATA FROM DATABASE
        $result = $connect->query($query);

        if ($result->num_rows > 0) {

            while ($row = $result->fetch_assoc()) {
                $abc = $row["password"];
                $name = $row["firstName"];
            }
        }

        // echo " first name ";
        // echo $name;
        // echo "    selected pass ";
        // echo $abc;
        // echo "       Given pass ";
        // echo $pass;

        //Checking password
        if ($abc == $pass) {
            $welcome = "welcome back";
            $greet = $welcome . "; " . $name;

            echo '<script>alert("' . $greet . '")
            window.location.href="fyp.html";
            </script>';

        } else {
            echo "<script>
            alert('wrong pasword');
            window.location.href='fypSignin.html';
            </script>";
        }

    }

}

?>