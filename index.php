<?php
$conn = mysqli_connect("localhost", "root", "", "project");



?>



<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style-nav.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Gaze</title>
    </head>
    <body>
        <nav>
            <div class="logo">
                <h4>GAZE</h4>
                <p>Take your time with some of the best films here</p>
            </div>
        <ul class="list-nav">
            <li><a href=>Home</a></li>
            <li><a href= "index2.html">Genre</a></li>
            <li><a href= "#">About</a></li>
            <li><a href="tambah.php">Add Film</a></li>
        </ul>
        <div class="menu-toggle" >
            <input type="checkbox"/>
            <span></span>
            <span></span>
            <span></span>
        </div>
        </nav>
        <div class="container">
            <div class="container1">
                <h5>Rekomendasi Film Populer</h5>
                <a href='action-2.html'>BIRDS OF PRAY</a> 
                <video  autoplay="true" loop="true">
                    <source src="trailer.mp4" type="video/mp4" >
                </video>
            </div>
            <div class="container2">
                <ul>
                    <li class="kotak">
                        <img src="image/fantasy 1.1.jpg" >
                        <br>
                        <a href="fantasi-1.html">The Witcher (2020)</a>
                    </li>
                    <li class="kotak">
                        <img src="image/action 1.1.jpg" >
                        <br>
                        <a href="action-1.html">Extraction</a>
                    </li>
                    <li class="kotak">
                        <img src="image/romance 2.1.jpg" >
                        <br>
                        <a href="romance-2.html">Isn't it Romantic</a>
                    </li>
                </ul>
                
            </div>
    
    </div>
   
    <script src="javascript/burger.js"></script>
    
    </body>
</html>
