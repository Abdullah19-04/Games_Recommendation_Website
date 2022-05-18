<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    function get_data()
    {
        $name = $_POST['Review'];
        $file_name = 'reviews' . '.json';

        if (file_exists("$file_name")) {
            $current_data = file_get_contents("$file_name");
            $array_data = json_decode($current_data, true);

            $extra = array(

                'Review' => $_POST['Review'],
            );
            $array_data[] = $extra;
            echo "file exist<br/>";
            return json_encode($array_data);
        } else {
            $datae = array();
            $datae[] = array(

                'Review' => $_POST['Review'],

            );
            echo "file not exist<br/>";
            return json_encode($datae);
        }
    }

    $file_name = 'reviews' . '.json';

    if (file_put_contents("$file_name", get_data())) {
        header('Location:' . 'gamepage.php');
    } else {
        echo 'There is some error';
    }
}
