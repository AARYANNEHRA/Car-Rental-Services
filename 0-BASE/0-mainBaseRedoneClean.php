<!DOCTYPE html> 

<html> 

    <head>
        <title>
            Car Rentals
        </title>
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@200;300;400;500&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="0-mainBaseRedoneClean.css">

    </head>

    <body>
        <div class="main-header-container">
            <div class="logo"><img src="Pics/official.png"></div>
            <div class="title-text title-text-top">Trip to the Tee</div>
            <div class="trigger-main-stages-container">
                <ion-icon name="menu" onclick="menuToggle()"></ion-icon>
            </div>

        </div>

        <div class="main-stages-container active" id="stages">
            <div class="div-stages s1">Car Rentals<div class="borderBottom b1"></div></div>
            <div class="div-stages s2">Suites<div class="borderBottom b2"></div></div>
            <div class="div-stages s3">Enroute<div class="borderBottom b3"></div></div>
            <div class="div-stages s4">Explore<div class="borderBottom b4"></div></div>
            <div class="div-stages s5">Payment<div class="borderBottom b5"></div></div>
            <div class="div-stages s6">Gracias<div class="borderBottom b6"></div></div>
        </div>
<!-- =================================================================================== -->
        <div class="main-content-container">
            <!-- <iframe src="../CarMain.html" frameborder="0"></iframe> -->
            <div class="whitespace" style="height: 90vh; background-color: #A03650;"></div>

        </div>
<!-- =================================================================================== -->

        <div class="main-footer-container">
            <!-- <div class="whitespace"></div>
            <div class="whitespace"></div>
            <div class="to-top">
                <a href="#"><ion-icon name="chevron-up"></ion-icon><span>To top</span></a>
            </div> -->

            <div class="h-rule"><hr></div>
            <div class="title-text title-text-bottom">Trip to the Tee</div>
            <div class="h-rule"><hr></div>
            <div class="to-top">
                <a href="#"><ion-icon name="chevron-up"></ion-icon><span>To top</span></a>
            </div>

        </div>

        <div class="main-footer-container-2">
            <div class="socials">
                <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                <a href="#"><ion-icon name="logo-pinterest"></ion-icon></a>
                <a href="#"><ion-icon name="logo-youtube"></ion-icon></a>       
                <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                <a href="https://www.instagram.com/triptothetee/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
            </div>
            <div class="copyrights">Trip to the Tee &#169; Copyright 2021</div>
            <div class="h-rule-2"><hr></div>
            <div class="side"></div>
        </div>


        <!-- SCRIPT INSERTS -->
        <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js">
        </script>

        <script src="0-mainBaseRedoneClean.js"></script>

    </body>
</html>