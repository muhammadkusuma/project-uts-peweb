<?php
    include_once ("getConnection.php");
    session_start();
    $conn=getConnection();

    if(isset($_POST['update'])){
        $id=$_GET['id'];
        $nama_kegiatan=$_POST['nama_aktifitas'];
        $tahun=$_POST['tahun_aktifitas'];
        $keterangan=$_POST['keterangan_aktifitas'];
        $tingkat=$_POST['tingkat_aktifitas'];

        $sql="UPDATE aktifitas SET nama_kegiatan=:nama_kegiatan, tahun=:tahun, keterangan=:keterangan, tingkat=:tingkat WHERE id=:id";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(':nama_kegiatan', $nama_kegiatan);
        $stmt->bindParam(':tahun', $tahun);
        $stmt->bindParam(':keterangan', $keterangan);
        $stmt->bindParam(':tingkat', $tingkat);
        $stmt->bindParam(':id', $id);
        $stmt->execute();

        if ($stmt->rowCount()>0) {
            echo "<script>alert('Data Berhasil Diupdate')</script>";
            header ("Location: ../frontend/dashboard.php");
        }else {
            echo "<script>alert('Data Gagal Diupdate')</script>";
            echo "<script>window.history.back()</script>";
        }
    }

    $conn=null;
?>