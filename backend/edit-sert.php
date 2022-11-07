<?php
    include_once ("getConnection.php");
    session_start();
    $conn=getConnection();

    if (isset($_POST['update'])) {
        $id=$_GET['id'];
        $nama_sertifikat=$_POST['nama_sertifikat'];
        $tahun=$_POST['tahun_sertifikat'];
        $berlaku=$_POST['berlaku_sertifikat'];
        $link=$_POST['link_sertifikat'];

        $sql="UPDATE sertifikat SET nama_sertifikat=:nama_sertifikat, tahun=:tahun, berlaku=:berlaku, link=:link WHERE id=:id";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(':nama_sertifikat', $nama_sertifikat);
        $stmt->bindParam(':tahun', $tahun);
        $stmt->bindParam(':berlaku', $berlaku);
        $stmt->bindParam(':link', $link);
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