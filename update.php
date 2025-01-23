<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="Assests/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="mySheet.css">
    <link rel="stylesheet" href="Assests/bootstrap-5.1.3-examples/footers/footers.css">
    <link rel="stylesheet" href="Assests/bootstrap-5.1.3-dist/css/bootstrap.css">

    <script src="Assests/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="Assests/bootstrap-5.0.2-dist/bootstrap-5.0.2-dist/js/bootstrap.js"></script>
    <script src="https://kit.fontawesome.com/44c771ee07.js" crossorigin="anonymous"></script>
</head>

<title>Update Account</title>

<style>
    .feedback-table {
        width: 100%;
        border-collapse: collapse;
    }

    .feedback-table th,
    .feedback-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .feedback-table td {
        background-color: rgba(0, 0, 0, 0.096) !important;
    }

    .feedback-table th {
        background-color: black;
        color: white;
        font-weight: bold;
    }
</style>

<body class="backImg">

    <!--      Nevigation                  Nevigation                  Nevigation             -->
    <nav class="navbar  navbar-expand-md navbar-dark fixed-top bg-dark txt">
        <div class="container-fluid">
            <a class="navbar-brand"> <img src="images/lenovoRed.png" alt="" width="75px"><label class="txtSlog">For
                    those who do</label><sup class="txtSlog" style="font-weight: bold;">TM</sup></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">

                <!-- Navbar options                 Navbar options                        Navbar options -->
                <ul class="navbar-nav me-auto mb-2 mb-md-0">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="fyp.html">
                            <i class="fa-solid fa-house"></i>&nbsp;Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="fypContacts.html">&nbsp;&nbsp;&nbsp;<i
                                class="fa-solid fa-phone"></i>&nbsp;Contact us</a></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="fypSupport.html">&nbsp;&nbsp;&nbsp;<i
                                class="fa-solid fa-screwdriver-wrench"></i>&nbsp;Technical Support</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="feedback.html">&nbsp;&nbsp;&nbsp;
                            <i class="fa-regular fa-comment-dots"></i>&nbsp;Feedback</a>
                    </li>

                </ul>

                <!--      Search bar                  Search bar               Search bar         -->
                <div class="search mt-3 col-3 " id="searchId">
                    <form class="d-flex">
                        <input class="form-control me-2" id="searchInp" type="search" placeholder="Search"
                            aria-label="Search">
                        <button onclick="openTab()" class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                &nbsp;&nbsp;

                <!--     Sign in - Sign up               Sign in - Sign up         Sign in - Sign up      -->
                <div class="mt-3  d-flex">
                    <span class="col-12">
                        <a href="fypSignin.html"><button type="submit" style="font-size: 13px; font-weight: bolder;"
                                class="btn btn-outline-info ">Sign
                                in</button></a>
                    </span>
                </div>
            </div>
        </div>

    </nav>

    <br><br>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class=" mainclForm txtForm ">
            <h1 class="text-center">Verify Yourself</h1>
            <h3>Email &nbsp;<sup><i style="font-size: 15px;" class="fa-solid fa-asterisk fa-sm"></i></sup></h3>
            <input type="email" style="font-weight: bold;" name="email" class="form-control inpPropForm"
                placeholder="Enter you current email (john@xyzmail.com)" required>

            <h3>Password &nbsp;<sup><i style="font-size: 15px;" class="fa-solid fa-asterisk fa-sm"></i></sup></h3>
            <input type="password" style="font-weight: bold;" name="password" class="form-control inpPropForm"
                placeholder="Enter your current password (*************)" required>
            <br>

            <!-- Updating                   Updating                  Updating -->
            <h1 class="text-center">Only enter field you want to update</h1>
            <input type="text" style="font-weight: bold;" name="firstup" class="form-control "
                placeholder="Enter updated FIRST NAME"><br>
            <input type="text" style="font-weight: bold;" name="lastup" class="form-control "
                placeholder="Enter updated LAST NAME"><br>
            <input type="text" style="font-weight: bold;" name="fatherup" class="form-control "
                placeholder="Enter updated FATHER NAME"><br>
            <input type="email" style="font-weight: bold;" name="emailup" class="form-control "
                placeholder="Enter updated EMAIL ADDRESS"><br>
            <input type="number" style="font-weight: bold;" name="contactup" class="form-control "
                placeholder="Enter updated CONTACT NO."><br>
            <input type="text" style="font-weight: bold;" name="passwordup" class="form-control "
                placeholder="Enter updated PASSWORD"><br>
            <input type="text" style="font-weight: bold;" name="genderup" class="form-control "
                placeholder="Enter updated GENDER (male, female, custom)"><br>

            <div class="text-center ">
                <button type="reset" name="clear" value="clear" class="buttonForm btn btn-danger">Donot Update</button>
                &nbsp;&nbsp;&nbsp;
                <button type="submit" name="submit" value="submit" class="buttonForm btn btn-success">Update Account
                    Info</button><br>
            </div>

        </div>
    </form>

    <br><br>

    <!--       php               php                   php                   php -->
    <div class="reg text-center">

        <?php

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $serverName = "localhost";
            $dbName = "fyp";
            $userName = "root";
            $password = "";

            $connect = mysqli_connect($serverName, $userName, $password, $dbName);

            //   Recieving user input               Recieving user input 
            $email = $_POST["email"];
            $pass = $_POST["password"];

            // Checking existance of account
            $foundingEmail = $connect->query("SELECT id FROM signin WHERE email = '$email' LIMIT 1");
            if ($foundingEmail->num_rows == 0) {
                echo "<script>
                        alert('Account not found. Register your self');
                        window.location.href = 'fypSignup.html';
                    </script>";
            }

            // Account exists.. Checking password
            else {

                $query = "SELECT * FROM `signin` WHERE email = '$email' ";

                // FETCHING DATA FROM DATABASE
                $result = $connect->query($query);

                if ($result->num_rows > 0) {

                    while ($row = $result->fetch_assoc()) {
                        $dbpass = $row["password"];
                    }

                    // update account if password match
                    if ($dbpass == $pass) {
                        $updatequery = "UPDATE signin SET ";

                        $firstup = $_POST["firstup"];
                        if (!empty($firstup)) {
                            $updatequery .= "firstName = '$firstup', ";
                        }

                        $lastup = $_POST["lastup"];
                        if (!empty($lastup)) {
                            $updatequery .= "lastName = '$lastup', ";
                        }

                        $fatherup = $_POST["fatherup"];
                        if (!empty($fatherup)) {
                            $updatequery .= "fatherName = '$fatherup', ";
                        }

                        $emailup = $_POST["emailup"];
                        if (!empty($emailup)) {
                            $updatequery .= "email = '$emailup', ";
                        }

                        $contactup = $_POST["contactup"];
                        if (!empty($contactup)) {
                            $updatequery .= "contact = '$contactup', ";
                        }

                        $passup = $_POST["passwordup"];
                        if (!empty($passup)) {
                            $updatequery .= "password = '$passup', ";
                        }

                        $genderup = $_POST["genderup"];
                        if (!empty($genderup)) {
                            $updatequery .= "gender = '$genderup', ";
                        }

                        // Remove the trailing comma and space from the updatequery
                        $updatequery = rtrim($updatequery, ', ');

                        // Add WHERE clause to specify which user to update
                        $updatequery .= " WHERE email = '$email' ";

                        // Execute the update query
                        if ($connect->query($updatequery) === TRUE) {
                            echo "<script>
                                alert('Your account is updated. See account details');
                                window.location.href = 'viewacc.php';
                                </script>";
                        }

                        // data not updated
                        else
                        {
                            echo "<script>
                                alert('Failed to update account.');
                                </script>";
                        }

                    }

                    //password not matched
                    // else {
                    //     echo "<script>
                    //         alert('wrong pasword');
                    //         window.location.href = 'update.php';
                    //     </script>";
                    // }

                }


            }
        }

        ?>

    </div>

    <!-- Footer                    Footer                                     Footer -->
    <div style="background-color: black; color: white;">

        <div class="b-example-divider"></div>

        <div class="container">
            <footer class="py-3">
                <div class="row">
                    <div class="col-2">
                        <h5>Account/ Reviews</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="viewacc.php" class="nav-link p-0">Account Details</a>
                            </li>
                            <li class="nav-item mb-2"><a href="update.php" class="nav-link p-0">Update Account</a></li>
                            <li class="nav-item mb-2"><a href="delacc.php" class="nav-link p-0">Delete Account</a></li>
                            <li class="nav-item mb-2"><a href="viewfeedback.php" class="nav-link p-0">View Feedback</a></li>
                        </ul>

                    </div>

                    <div class="col-2">
                        <h5>Forms</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="feedback.html" class="nav-link p-0">Product Feedback</a>
                            </li>
                            <li class="nav-item mb-2"><a href="fypSignin.html" class="nav-link p-0">Log in</a></li>
                            <li class="nav-item mb-2"><a href="fypSignup.html" class="nav-link p-0">Sign up</a></li>
                        </ul>
                    </div>

                    <div class="col-2">
                        <h5>Support</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item mb-2"><a href="window.html" class="nav-link p-0 ">Window</a></li>
                            <li class="nav-item mb-2"><a href="driver.html" class="nav-link p-0 ">Driver</a></li>
                            <li class="nav-item mb-2"><a href="vantage.html" class="nav-link p-0 ">Vantage</a></li>
                            <li class="nav-item mb-2"><a href="bios.html" class="nav-link p-0 ">BIOS</a></li>
                        </ul>
                    </div>


                    <!-- Subscription          Subscription            Subscription       -->
                    <div class="col-4 offset-1">
                        <h5>Get our newsletter for free...</h5>
                        <p>Monthly digest of whats new and exciting from us.</p>
                        <div class="d-flex w-100 gap-2 ">
                            <label for="newsletter1" style="font-size: 17px;">Become community member >>></label>
                            <a href="fypSignup.html"><button type="submit" class="btn btn-danger ">Register</button></a>
                        </div>
                    </div>

                </div>

                <!-- Lenovo Symbol - Social Media              Lenovo Symbol - Social Media -->
                <div class="d-flex justify-content-between  my-1 border-top">
                    <p><img src="images/lenovoRed.png" alt="" width="105px"><i><br><b>"We DO what we say & we own what
                                we DO"</b></i></p>

                    <ul class="list-unstyled d-flex">
                        <li class="ms-3"><a class="link-dark" target="_blank"
                                href="https://linkedin.com/company/lenovo"><svg class="bi" width="24" height="24">
                                </svg><i class="my-5 reg fa-brands fa-linkedin-in fa-xl"></i></a></li>

                        <li class="ms-3"><a class="link-dark" target="_blank" href="https://twitter.com/lenovo_ME"><svg
                                    class="bi" width="24" height="24">
                                </svg><i class="my-5 reg fa-brands fa-x-twitter fa-xl"></i></i></a></li>

                        <li class="ms-3"><a class="link-dark" target="_blank"
                                href="https://www.instagram.com/lenovo_me"><svg class="bi" width="24" height="24">
                                </svg><i class="my-5 reg fa-brands fa-instagram fa-xl"></i></a></li>

                        <li class="ms-3"><a class="link-dark" target="_blank"
                                href="https://www.facebook.com/LenovoMiddleEast"><svg class="bi" width="24" height="24">
                                </svg><i class="my-5 reg fa-brands fa-facebook fa-xl"></i></a></li>
                    </ul>
                </div>

            </footer>
        </div>

    </div>

    <script src="Assests/JQuery3.7.0/code.jquery.com_jquery-3.7.0.min.js"></script>
    <script src="search.js"></script>

</body>

</html>