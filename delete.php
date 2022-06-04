<?php
include './koneksi.php';

if ($_POST){
    $isbn = $_POST['isbn'];

    $statement = $koneksi->prepare("DELETE FROM buku WHERE isbn = '$isbn'");
    $statement->execute();

    $response['message'] = "Data sudah dihapus";
    $json = json_encode($response, JSON_PRETTY_PRINT);
    echo $json;

} else {
    $response['message'] = "Gagal";
    $json = json_encode($response, JSON_PRETTY_PRINT);
    echo $json;
}