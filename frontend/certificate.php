<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M. Wira Ade Kusuma</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <!-- my css -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body id="bg">

    <!-- navbar -->
    <?php
        include "navbar.php";
    ?>

    <!-- Certificate -->
    <div class="container-fluid" id="sert">
        <div class="row my-5">
            <div class="col-12 mt-5">
                <h1 class="text-center">My Certificate</h1>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="card card-acti">
                    <div class="card-body">
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Tahun</th>
                                    <th scope="col">Nama Sertifikat</th>
                                    <th scope="col">Berlaku Sampai</th>
                                    <th scope="col">Link</th>
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
                                        echo "</tr>";
                                    }

                                    $conn=null;
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php
        include "footer.php";
    ?>

    <!-- bootstrap js -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>

    <!-- particle js -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles-js', 'js/particlesjs-config.json', function () {
            console.log('callback - particles.js config loaded');
        });
    </script>




</body>

</html>