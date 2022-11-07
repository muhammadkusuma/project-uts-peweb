<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M. Wira Ade Kusuma</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top">
        <div class="container-md">
            <a class="navbar-brand" href="#">
            <img src="img/Logo.png" alt="Bootstrap" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-0 ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="frontend/profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="frontend/gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="frontend/activities.php">Activities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="frontend/certificate.php">Certificate</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <a href="mailto:mwiraadekusuma1@gmail.com" class="btn btn-outline-success">Contact</a>
                    <a href="admin.php" class="btn btn-outline-success mx-1">Login</a>
                </form>
            </div>
        </div>
    </nav>
    <!-- hero -->
    <div class="container-fluid" id="particles-js">
        <div class="row row-part">
            <div class="col col-part">
                <div class="typed">
                    <h1>I am <span class="anim"></span></h1>
                </div>
            </div>
        </div>
    </div>

    <!-- bootstrap js -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- particle js -->
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles-js', 'js/particlesjs-config.json', function () {
            console.log('callback - particles.js config loaded');
        });
    </script>

    <!-- typed.js -->
    <script src="./js/typed.js"></script>
    <script>

        var typed = new Typed('.anim', {
            strings: ["Lifetime Learner","College Student", "Web Developer"],
            typeSpeed: 90,
            backSpeed:80,
            loop: true,
        });
    </script>



</body>

</html>