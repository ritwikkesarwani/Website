<?php

    header("Content-Type: application/json; charset=UTF-8");
    $url = "localhost:3306";
    $database = "test";
    $username = "noob";
    $password = "7WBT]9yJXdQ77_sl";
    $id=(int)$_GET["id"];

    $conn = new mysqli($url, $username, $password, $database);
    $stmt = $conn->prepare("SELECT * FROM reservations where id=$id");
    $stmt->execute();
    $result = $stmt->get_result();
    $outp = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode($outp);
    $conn->close();
?>