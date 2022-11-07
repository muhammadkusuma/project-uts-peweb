<?php
    include_once ("getConnection.php");
    session_start();
    $conn=getConnection();

    $id=$_GET['id'];

    $sql="DELETE from aktifitas where id=:id";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(":id",$id);
    $stmt->execute();

    if ($stmt->rowCount()>0) {
        echo "<script>alert('Data berhasil dihapus')</script>";
        echo "<script>window.location.href='../frontend/dashboard.php'</script>";
    } else {
        echo "<script>alert('Data gagal dihapus')</script>";
        echo "<script>window.location.href='../frontend/dashboard.php'</script>";
    }
?>