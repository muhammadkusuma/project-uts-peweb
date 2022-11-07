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
    <!-- lightgallery -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

    <style>
        *{
            margin: 0;
            padding:0;
            box-sizing: border-box;
            transition: all .2s linear;
        }

        .gallery{
            display:flex;
            justify-content:center;
            flex-wrap:wrap;
            width:90%;
            margin:0 auto;
        }

        .gallery a{
            height:200px;
            width:300px;
            margin:20px;
            border-radius:5px;
            overflow:hidden;
            box-shadow: 0 3px 5px #000;
        }

        .gallery a img{
            height:100%;
            width:100%;
            object-fit:cover;
        }

        .gallery a img:hover{
            transform: scale(1.4);
        }


    </style>
</head>

<body id="bg">

    <!-- navbar -->
    <?php
        include "navbar.php";
    ?>

    <!-- Gallery-->
    <div class="container-fluid" id="gallery">
        <div class="row my-5">
            <div class="col-12 mt-5">
                <h1 class="text-center">Gallery</h1>
            </div>
        </div>
        <div class="gallery">
            <a href="../img/img1.jpg">
                <img src="../img/img1.jpg" alt="">
            </a>
            <a href="../img/img2.jpg">
                <img src="../img/img2.jpg" alt="">
            </a>
            <a href="../img/img3.jpg">
                <img src="../img/img3.jpg" alt="">
            </a>
            <a href="../img/img4.jpg">
                <img src="../img/img4.jpg" alt="">
            </a>
            <a href="../img/img5.jpg">
                <img src="../img/img5.jpg" alt="">
            </a>
            <a href="../img/img6.jpg">
                <img src="../img/img6.jpg" alt="">
            </a>
            <a href="../img/img7.jpg">
                <img src="../img/img7.jpg" alt="">
            </a>
            <a href="../img/img8.jpg">
                <img src="../img/img8.jpg" alt="">
            </a>
            <a href="../img/img9.jpg">
                <img src="../img/img9.jpg" alt="">
            </a>
            <a href="../img/img10.jpg">
                <img src="../img/img10.jpg" alt="">
            </a>
            <a href="../img/img11.jpg">
                <img src="../img/img11.jpg" alt="">
            </a>
            
        </div>
        
    </div>
    
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

    <!-- lightbox-gallery-js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js" integrity="sha512-b4rL1m5b76KrUhDkj2Vf14Y0l1NtbiNXwV+SzOzLGv6Tz1roJHa70yr8RmTUswrauu2Wgb/xBJPR8v80pQYKtQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        lightGallery(document.querySelector('.gallery'));
    </script>
</body>

</html>