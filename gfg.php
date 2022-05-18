<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    function get_data()
    {
        $name = $_POST['Username'];
        $file_name = 'signupdata' . '.json';

        if (file_exists("$file_name")) {
            $current_data = file_get_contents("$file_name");
            $array_data = json_decode($current_data, true);

            $extra = array(
                'email' => $_POST['email'],
                'Username' => $_POST['Username'],
                'Name' => $_POST['fname'],
                'Gender' => $_POST['genderRadios'],
            );
            $array_data[] = $extra;
            return json_encode($array_data);
        } else {
            $datae = array();
            $datae[] = array(
                'email' => $_POST['email'],
                'Username' => $_POST['Username'],
                'Name' => $_POST['fname'],
                'Gender' => $_POST['genderRadios'],
            );
            echo "file not exist<br/>";
            return json_encode($datae);
        }
    }
    $file_name = 'signupdata' . '.json';
    if (file_put_contents("$file_name", get_data())) {

        header('Location:' . 'login.php');
    } else {
        echo 'There is some error';
    }
}
