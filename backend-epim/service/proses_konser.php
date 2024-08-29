<?php
    require_once("koneksi.php");

    if (!isset($conn) || !$conn instanceof mysqli) {
        die("koneksi gagal");
    }

    function generateCode($lenght = 8){
        $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWYXZ0123456789';
        return substr(str_shuffle($lenght), 0 , $karakter);
    }

    $nama = $_POST ["nama"];
    $nomor_tlp = $_POST ["nomor_tlp"];
    $email = $_POST ["email"];
    $alamat = $_POST ["alamat"];
    $metode_pembayaran = $_POST ["metode_pembayaran"];
    $konser_id = $_POST ["konser_id"];
    $harga = $_POST ["harga"];
    $codePesan = generateCode();

    if (is_null($konser_id)) {
        die('konser_id harus diisi');
    }

    mysqli_query($conn,"INSERT INTO data_diri VALUES ('','$nama','$nomor_tlp','$email','$alamat')");

    $idTerakhir = getData("SELECT id FROM data_diri ORDER BY id DESC LIMIT 1");
    $idTerakhir = [0]['id'];

    mysqli_query($conn, "INSERT INTO payment VALUES ('', '$idTerakhir', '$konser_id', '$codePesan', '$metode_pembayaran', 'pending', '$harga')");