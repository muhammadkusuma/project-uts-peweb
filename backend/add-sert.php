<?php
    include_once "getConnection.php";
    session_start();
    if(isset($_POST['submit'])){
        $nama_aktifitas=$_POST['nama_sertifikat'];
        $tahun=$_POST['tahun_sertifikat'];
        $berlaku=$_POST['berlaku_sertifikat'];
        $link=$_POST['link_sertifikat'];

        $conn=getConnection();
        $sql="INSERT INTO sertifikat (nama_sertifikat, tahun, berlaku, link) VALUES (:nama_sertifikat, :tahun, :berlaku_sampai, :link_sertifikat)";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(':nama_sertifikat', $nama_aktifitas);
        $stmt->bindParam(':tahun', $tahun);
        $stmt->bindParam(':berlaku_sampai', $berlaku);
        $stmt->bindParam(':link_sertifikat', $link);
        $stmt->execute();

        if ($stmt->rowCount()>0) {
            echo "<script>alert('Data Berhasil Disimpan')</script>";
            header ("Location: ../frontend/dashboard.php");
        }else {
            echo "<script>alert('Data Gagal Disimpan')</script>";
        }

        $conn=null;
    }
?>