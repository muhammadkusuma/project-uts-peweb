<?php
    require_once ("../backend/getConnection.php");
    session_start();
    
    if (!isset($_SESSION['email'])) {
    header("location: ../index.php");
    }

    $conn=getConnection();


    // if (isset($_POST['submit'])) {
    //     $file_name=$_FILES['file']['name'];
    //     $file_size=$_FILES['file']['size'];
    //     $file_tmp=$_FILES['file']['tmp_name'];

    //     $insert="INSERT INTO galeri (gambar) VALUES ('$file_name')";
    //     $stmt=$conn->prepare($insert);
    //     $stmt->execute();
    //     if ($stmt->execute()) {
    //         move_uploaded_file($file_tmp,"../upload/".$file_name);
    //         echo "Image uploaded successfully.";
    //     }else {
    //         echo "Failed to upload image.";
    //     }
    // }
    $upload_dir='img/';
    if (isset($_POST['submit'])) {
        $imgName=$_FILES['image']['name'];
        $imgSize=$_FILES['image']['size'];
        $imgTmp=$_FILES['image']['tmp_name'];

        $imgExt=strtolower(pathinfo($imgName,PATHINFO_EXTENSION));
        $allowExt=array('jpeg','jpg','png','gif');
        $img=rand(1000,1000000).".".$imgExt;
        if (in_array($imgExt, $allowExt)) {
            if ($imgSize<5000000) {
                move_uploaded_file($imgTmp, $upload_dir.$img);
            }else {
                echo "File size must be less than 5MB.";
            }
        }else {
            echo "File type not supported.";
        }

        $sql="INSERT INTO galeri (gambar) VALUES ('.$img.')";
        $resilt=$conn->prepare($sql);
        $resilt->execute();

    }
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Gambar</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="add-gambar">
    <div class="container-md" id="add-gall">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Tambah Gambar</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="upload_gambar" class="form-label">Upload Gambar</label>
                        <input type="file" class="form-control" id="input_gambar" required name="image" accept="image/*" value="">
                    </div>
                    <input type="submit" value="Tambah Gambar" class="btn btn-primary btn-add-gall mb-1" name="submit">
                    <a href="dashboard.php" class="btn btn-outline-primary btn-back">Kembali</a>
                </form>
            </div>
        </div>
    </div>
    <!-- bootstrap js -->
    <script src="../bootstrap/js/bootstrap.js"></script>
</body>

</html>