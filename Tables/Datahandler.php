<?php
if (isset($_POST['On_submit'])) {
    $name = $username = $email = $password = $address = ""; // variables are declared:

    // assign value to the variables:
    $name = $_POST['Name'];
    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $address = $_POST['Address'];

    // check if variable empty then goto alert.php otherwise goto tables.php:
    if (empty($name) || empty($username) || empty($email) || empty($password) || empty($address)) {
        require_once '../Tables/alert.php';
    }else{
        require_once '../Tables/tables.php';
    }
}

// echo and prinf used for print data: 

// echo "
// Name: $name<br>
// Username: $username<br>
// Email: $email<br>
// Password: $password<br>
// Address: $address<br>
// ";    
// }