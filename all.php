<?php

include "./koneksi.php";

 $query = "SELECT * FROM buku";
    $statement = $connection->query($query);
    $statement->setFetchMode(PDO::FETCH_ASSOC);
    $result = $statement->fetchAll();


header('Content-Type: application/json');
echo json_encode($result);

?>