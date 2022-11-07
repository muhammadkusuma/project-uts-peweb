<?php 
    require_once ("../backend/getConnection.php");
    session_start();

    if (!isset($_SESSION['email'])) {
        header("location: ../index.php");
    }
    $conn=getConnection();
    $sql="SELECT * FROM sertifikat WHERE id=:id";
    $stmt=$conn->prepare($sql);
    $stmt->bindParam(':id', $_GET['id']);
    $stmt->execute();
    $result=$stmt->fetch(PDO::FETCH_ASSOC);

    $id=$result['id'];
    $nama_sertifikat=$result['nama_sertifikat'];
    $tahun=$result['tahun'];
    $berlaku=$result['berlaku'];
    $link=$result['link'];
    
    $conn=null;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Sertifikat</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="edit-serti">
    <div class="container-md" id="update-serti">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Update Sertifikat</h1>
                <form method="POST" action="../backend/edit-sert.php?id=<?php echo $id?>">
                    <div class="mb-3">
                        <label for="nama_sertifikat" class="form-label">Nama Sertifikat</label>
                        <input type="text" placeholder="Public Speaking" class="form-control" id="input_nama_sertifikat" required name="nama_sertifikat" value="<?php echo $nama_sertifikat; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="tahun_sertifikat" class="form-label">Tahun</label>
                        <input type="year" placeholder="YYYY" min="2000" max="2050" class="form-control" id="input_tahun_sertifikat" required name="tahun_sertifikat" value="<?php echo $tahun;?>">
                    </div>
                    <div class="mb-3">
                        <label for="berlaku_sertifikat" class="form-label">Berlaku Sampai</label>
                        <input type="number" placeholder="YYYY" min="2000" max="2050" class="form-control" id="input_berlaku_sertifikat" required name="berlaku_sertifikat" value="<?php echo $berlaku;?>">
                    </div>
                    <div class="mb-3">
                        <label for="link_sertifikat" class="form-label">Link Sertifikat</label>
                        <input type="text" placeholder="https://" class="form-control" id="link_sertifikat" required name="link_sertifikat" value="<?php echo $link;?>">
                    </div>
                    <input type="submit" value="Update Sertifikat" class="btn btn-primary btn-update-serti mb-1" name="update">
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