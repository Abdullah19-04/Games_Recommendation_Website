<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    function get_data()
    {
        $name = $_POST['user'];
        $file_name = 'commentform' . '.json';

        if (file_exists("$file_name")) {
            $current_data = file_get_contents("$file_name");
            $array_data = json_decode($current_data, true);

            $extra = array(
                'Email' => $_POST['email'],
                'Username' => $_POST['user'],
                'Mobile' => $_POST['mobile'],
                'Comment' => $_POST['comment'],
            );
            $array_data[] = $extra;
            echo "file exist<br/>";
            return json_encode($array_data);
        } else {
            $datae = array();
            $datae[] = array(
                'Email' => $_POST['email'],
                'Username' => $_POST['user'],
                'Mobile' => $_POST['mobile'],
                'Comment' => $_POST['comment'],
            );
            echo "file not exist<br/>";
            return json_encode($datae);
        }
    }

    $file_name = 'commentform' . '.json';

    if (file_put_contents("$file_name", get_data())) {
        header('Location:' . 'index.php');
    } else {
        echo 'There is some error';
    }
}
