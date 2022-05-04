<?php

require_once './dbconfig.php';

    if(isset($_POST['addImages']))
    {
        $userID = $_POST['userID'];
        $imgdata = $_POST['imageData'];
        $imgdata = str_replace(' ','+',$imgdata);

        // print($imgData);

        // $sql = `INSERT INTO capture (id, uid, img_data)
        // VALUES ('',$userID, $imgData)`;

        // $sql = `INSERT INTO capture (id, uid, img_data)
        // VALUES ('0','12', 'asdf123')`;

        $sql = "INSERT INTO capture (id, uid, img_data) VALUES ('0', $userID, '$imgdata')";
        $con->query($sql); 

        // if ($con->query($sql) === TRUE) {
        // echo "New record created successfully";
        // } else {
        // echo "Error: " . $sql . "<br>" . $con->error;
        // }
    };

?>
