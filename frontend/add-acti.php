<?php
    require_once ("../backend/getConnection.php");
    session_start();
    
    if (!isset($_SESSION['email'])) {
    header("location: ../index.php");
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Aktivitas</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="login-admin">
    <div class="container-md" id="add-acti">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Tambah Aktifitas</h1>
                <form method="POST" action="../backend/add-activity.php" name="form">
                    <div class="mb-3">
                        <label for="nama_aktifitas" class="form-label">Nama Aktifitas</label>
                        <input type="text" placeholder="Hiking" class="form-control" id="input_nama_aktifitas" required name="nama_aktifitas">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_aktifitas" class="form-label">Tahun</label>
                        <input type="year" placeholder="YYYY" min="2000" max="2050" class="form-control" id="input_tahun_aktifitas" required name="tahun_aktifitas">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan_aktifitas" class="form-label">Keterangan Aktifitas</label>
                        <input type="text" placeholder="Deksripsi Singkat"  class="form-control" id="keterangan_aktifitas" required name="keterangan_aktifitas">
                    </div>
                    <div class="mb-3">
                        <label for="tingkat_aktifitas" class="form-label">Tingkat Aktifitas</label>
                        <input type="text" placeholder="Jurusan, Provinsi, Nasional, Internasional" class="form-control" id="tingkat_aktifitas" required name="tingkat_aktifitas">
                    </div>
                    <input type="submit" value="Tambah Aktifitas" class="btn btn-primary btn-add-acti mb-1" name="submit">
                    <a href="dashboard.php" class="btn btn-outline-primary btn-back">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <!-- bootstrap js -->
    <script src="../bootstrap/js/bootstrap.js"></script>
</body>

</html>