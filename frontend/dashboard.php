<?php
    require_once ("../backend/getConnection.php");
    session_start();

    if (!isset($_SESSION['email'])) {
        header("location: ../index.php");
    }

    $email=$_SESSION['email'];
    $conn=getConnection();
    $query="SELECT * FROM users WHERE email=:email";
    $stmt=$conn->prepare($query);
    $stmt->execute(
        array(
            'email'=>$email
        )
    );
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">

    <style>
    </style>
</head>

<body id="dashboard">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark ">
        <div class="container-md">
            <a class="navbar-brand" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-0 ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../index.php" target=_blank>Lihat Situs</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <a href="../backend/logout.php" class="btn btn-outline-primary">Log Out</a>
                </form>
            </div>
        </div>
    </nav>

    <div class="container-md">
            <?php

            if (isset($_SESSION['email'])) {
                echo "<h1 class='text-center mt-4 mb-5'>Hello, ".$row['name']."</h1>";
            }
            $conn=null;

        ?>
    </div>

    <!-- menu aktifitas -->
    <div class="container-md card mb-5" id="#aktifitas">
        <h2 class="text-center mt-3">Aktifitas</h2>
        <div class="card card-acti m-3">
            <div class="card-body">
                <div class="">
                    <?php
                        echo "<a href=\"../frontend/add-acti.php\">TAMBAH</a>";
                    ?>
                </div>
                <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Nama Kegiatan</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Tingkat</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    include_once "../backend/getConnection.php";

                                    $conn=getConnection();
                                    $sql="SELECT * FROM aktifitas order by tahun desc";
                                    $stmt=$conn->prepare($sql);
                                    $stmt->execute();
                                    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
                                    foreach($result as $row){
                                        echo "<tr>";
                                        echo "<td>".$row['tahun']."</td>";
                                        echo "<td>".$row['nama_kegiatan']."</td>";
                                        echo "<td>".$row['keterangan']."</td>";
                                        echo "<td>".$row['tingkat']."</td>";
                                        echo "<td><a href=\"edit-acti.php?id=$row[id]\">EDIT</a> | <a href=\"../backend/del-activity.php?id=$row[id]\">HAPUS</a></td>";
                                        echo "</tr>";
                                    }

                                    $conn=null;
                                ?>
                            </tbody>
                        </table>
            </div>
        </div>
    </div>
    <!-- menu sertifikat -->
    <div class="container-md card mb-5" id="#sertifikat">
        <h2 class="text-center mt-3">Sertifikat</h2>
        <div class="card card-sert m-3">
            <div class="card-body">
                <div class="">
                    <?php
                        echo "<a href=\"../frontend/add-cert.php\">TAMBAH</a>";
                    ?>
                </div>
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Tahun</th>
                            <th scope="col">Nama Sertifikat</th>
                            <th scope="col">Berlaku Sampai</th>
                            <th scope="col">Link</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        include_once "../backend/getConnection.php";

                        $conn=getConnection();
                        $sql="SELECT * FROM sertifikat order by tahun desc";
                        $stmt=$conn->prepare($sql);
                        $stmt->execute();
                        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
                        foreach($result as $row){
                            echo "<tr>";
                            echo "<td>".$row['tahun']."</td>";
                            echo "<td>".$row['nama_sertifikat']."</td>";
                            echo "<td>".$row['berlaku']."</td>";
                            echo "<td><a href='".$row['link']."' target='_blank'>Lihat Sertifikat</a></td>";
                            echo "<td><a href=\"edit-cert.php?id=$row[id]\">EDIT</a> | <a href=\"../backend/del-sert.php?id=$row[id]\">HAPUS</a></td>";
                            echo "</tr>";
                        }

                        $conn=null;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- menu galeri -->
    <!-- <div class="container-md card mb-5" id="#galeri">
        <h2 class="text-center mt-3">Galeri</h2>
        <div class="card card-acti m-3">
            <div class="card-body">
                <div class="">
                    <?php
                        echo "<a href=\"../frontend/add-gall.php\">TAMBAH</a>";
                    ?>
                </div>
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        include_once "../backend/getConnection.php";

                        $conn=getConnection();
                        $sql="SELECT * FROM galeri order by id desc";
                        $stmt=$conn->prepare($sql);
                        $stmt->execute();
                        $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($result as $row) {
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td><a href=\"../backend/del-galeri.php?id=$row[id]\">HAPUS</a></td>";
                            echo "</tr>";
                        }

                        $conn=null;
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> -->
    <!-- bootstrap js -->
    <script src="../bootstrap/js/bootstrap.js"></script>
</body>

</html>