<?php
function dbQuery($sql) {
    $hostName = '172.105.177.85';
    $userName = 'friendlyg';
    $passwd = 'Yolo2009$$';
    $dbName = 'friendlygvicave';

    $conn = mysqli_connect($hostName, $userName, $passwd, $dbName);

    if ($conn) {
        $data = mysqli_query($conn, $sql);
        mysqli_close($conn);
    } else {
        die("Connection failed: " . mysqli_connect_error());
    }
    return $data;
}
