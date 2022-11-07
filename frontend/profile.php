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

<body>
    <!-- navbar -->
    <?php
        include "navbar.php";
    ?>

    <!-- hero -->
    <section class="jumbotron text-center">
        <img src="../img/foto.jpg" alt="M. Wira Ade Kusuma" width="200" class="rounded-circle img-thumbnail" />
        <h1 class="display-4">M. Wira Ade Kusuma</h1>
        <p class="lead">College Student | Lifetime Learner</p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,192L40,165.3C80,139,160,85,240,106.7C320,128,400,224,480,256C560,288,640,256,720,208C800,160,880,96,960,85.3C1040,75,1120,117,1200,149.3C1280,181,1360,203,1400,213.3L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>

    <!-- about -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4">
                    <p>
                        An Information Systems Student At The State Islamic University of
                        Sultan Syarif Kasim Riau, Who Likes Web development And Web Design
                        And Has A Little Knowledge Of Networks And Servers. Lives in
                        Indonesia, Riau.
                    </p>
                </div>
                <div class="col-md-4">
                    <p>
                        Seorang Mahasiswa Sistem Informasi di Universitas Islam Negeri
                        Sultan Syarif Kasim Riau, Yang Menyukai Web Develop dan Web Design
                        Serta Menguasai Sedikit Mengenai Jaringan dan Server. Tinggal di
                        Indonesia, Riau.
                    </p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="hsl(233, 65%, 29%)" fill-opacity="1"
                d="M0,32L0,224L240,224L240,160L480,160L480,192L720,192L720,128L960,128L960,64L1200,64L1200,224L1440,224L1440,320L1200,320L1200,320L960,320L960,320L720,320L720,320L480,320L480,320L240,320L240,320L0,320L0,320Z">
            </path>
        </svg>
    </section>

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