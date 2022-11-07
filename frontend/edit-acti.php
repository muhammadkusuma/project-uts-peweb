<?php 
    require_once ("../backend/getConnection.php");
    session_start();

    if (!isset($_SESSION['email'])) {
        header("location: ../index.php");
    }
    $conn=getConnection();
    $sql="SELECT * FROM aktifitas WHERE id=:id";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);

    $id=$result['id'];
    $nama_kegiatan=$result['nama_kegiatan'];
    $tahun=$result['tahun'];
    $keterangan=$result['keterangan'];
    $tingkat=$result['tingkat'];
    
    $conn=null;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Aktivitas</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="edit-acti">
    <div class="container-md" id="update-acti">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Update Aktifitas</h1>
                <form method="POST" action="../backend/edit-activity.php?id=<?php echo $id?>">
                    <div class="mb-3">
                        <label for="nama_aktifitas" class="form-label">Nama Aktifitas</label>
                        <input type="text" placeholder="Hiking" class="form-control" id="input_nama_aktifitas" value="<?php echo $nama_kegiatan; ?>" required name="nama_aktifitas">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_aktifitas" class="form-label">Tahun</label>
                        <input type="year" placeholder="YYYY" min="2000" max="2050" class="form-control" id="input_tahun_aktifitas" value="<?php echo $tahun; ?>" required name="tahun_aktifitas">
                    </div>
                    <div class="mb-3">
                        <label for="keterangan_aktifitas" class="form-label">Keterangan Aktifitas</label>
                        <input type="text" placeholder="Deksripsi Singkat"  class="form-control" id="keterangan_aktifitas" value="<?php echo $keterangan; ?>" required name="keterangan_aktifitas">
                    </div>
                    <div class="mb-3">
                        <label for="tingkat_aktifitas" class="form-label">Tingkat Aktifitas</label>
                        <input type="text" class="form-control" id="tingkat_aktifitas" value="<?php echo $tingkat; ?>" required name="tingkat_aktifitas">
                    </div>
                    <input type="submit" value="Update Aktifitas" class="btn btn-primary mb-1 btn-update-acti" name="update">
                    <input type="text" class="form-control" value="<?= $id; ?>" hidden>
                    <a href="dashboard.php" class="btn btn-outline-primary btn-back">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <!-- bootstrap js -->
    <script src="../bootstrap/js/bootstrap.js"></script>
</body>

</html>