<?php
    include_once "getConnection.php";
    session_start();
    if(isset($_POST['submit'])){
        $nama_aktifitas=$_POST['nama_aktifitas'];
        $tahun=$_POST['tahun_aktifitas'];
        $keterangan=$_POST['keterangan_aktifitas'];
        $tingkat=$_POST['tingkat_aktifitas'];

        $conn=getConnection();
        $sql="INSERT INTO aktifitas (nama_kegiatan, tahun, keterangan, tingkat) VALUES (:nama_kegiatan, :tahun, :keterangan, :tingkat)";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(':nama_kegiatan', $nama_aktifitas);
        $stmt->bindParam(':tahun', $tahun);
        $stmt->bindParam(':keterangan', $keterangan);
        $stmt->bindParam(':tingkat', $tingkat);
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