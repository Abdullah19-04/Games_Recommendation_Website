<?php

$email = $_POST['email'];
$password = $_POST['Username'];

// Read the JSON file
$json = file_get_contents('signupdata.json');

// Decode the JSON file
$json_data = json_decode($json, true);


if ($json_data  == null) {
    header('Location:' . 'login.php');
}


foreach ($json_data as $insecure_val) {

    if ($insecure_val['email'] == $email  && $insecure_val['Username'] == $password) {

        $_SESSION = $insecure_val;
        header('Location:' . 'post_login/index.php');

        // echo "<pre>";print_r($_SESSION);

        break;
    } else {
        header('Location:' . 'login.php');
        foreach ($json_data as $insecure_val) {
            if ($insecure_val['email'] == $email  && $insecure_val['Username'] == $password) {

                $_SESSION = $insecure_val;
                header('Location:' . 'post_login/index.php');

                // echo "<pre>";print_r($_SESSION);

                break;
            } else {
                header('Location:' . 'login.php');
                break;
            }
        }
    }
}
