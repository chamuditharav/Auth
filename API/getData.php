<?php

require_once './dbconfig.php';

    if(isset($_GET['getData']))
    {
        $userID = $_GET['userID'];

        // print($imgData);

        // $sql = `INSERT INTO capture (id, uid, img_data)
        // VALUES ('',$userID, $imgData)`;

        // $sql = `INSERT INTO capture (id, uid, img_data)
        // VALUES ('0','12', 'asdf123')`;

        $sql = "SELECT img_data FROM capture WHERE id = $userID";
        $result = $con->query($sql);

        // if ($con->query($sql) === TRUE) {
        // echo "New record created successfully";
        // } else {
        // echo "Error: " . $sql . "<br>" . $con->error;
        // }

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
              echo "id: " . $row["id"]. " - uid: " . $row["uid"]. " " . $row["img_data"]. "<br>";
            }
          } else {
            echo "0 results";
          }
    };

?>