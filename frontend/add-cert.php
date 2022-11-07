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
    <title>Tambah Sertifikat</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="add-sertifikat">
    <div class="container-md" id="add-cert">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Tambah Sertifikat</h1>
                <form method="POST" action="../backend/add-sert.php" name="form">
                    <div class="mb-3">
                        <label for="nama_sertifikat" class="form-label">Nama Sertifikat</label>
                        <input type="text" placeholder="Public Speaking" class="form-control" id="input_nama_sertifikat" required name="nama_sertifikat">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_sertifikat" class="form-label">Tahun</label>
                        <input type="year" placeholder="YYYY" min="2000" max="2050" class="form-control" id="input_tahun_sertifikat" required name="tahun_sertifikat">
                    </div>
                    <div class="mb-3">
                        <label for="berlaku_sertifikat" class="form-label">Berlaku Sampai</label>
                        <input type="number" placeholder="YYYY" min="2000" max="2050" class="form-control" id="input_berlaku_sertifikat" required name="berlaku_sertifikat">
                    </div>
                    <div class="mb-3">
                        <label for="link_sertifikat" class="form-label">Link Sertifikat</label>
                        <input type="text" placeholder="https://" class="form-control" id="link_sertifikat" required name="link_sertifikat">
                    </div>
                    <input type="submit" value="Tambah Sertifikat" class="btn btn-primary btn-add-cert mb-1" name="submit">
                    <a href="dashboard.php" class="btn btn-outline-primary btn-back">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <!-- bootstrap js -->
    <script src="../bootstrap/js/bootstrap.js"></script>
</body>

</html>