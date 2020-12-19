<?php
require 'function.php';

$id=$_GET["id"];
$film = query("SELECT * FROM action WHERE id = $id");




if (isset($_POST["submit"])) {
    if(ubah($_POST) > 0 ) {
            echo "
                <script>
                    alert('Film berhasil diubah');
                    document.location.href = 'genre.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Film gagal diubah');
                    document.location.href = 'genre.php';
                </script>
            ";
        }
    }



?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style-nav.css">
        <link rel="stylesheet" type="text/css" href="css/stylegenre.css">
        <link rel="stylesheet" type="text/css" href="css/tambah.css">
        <title>Gaze/Genre</title>
    </head>
    <body>
        <nav>
            <div class="logo">
                <h4>GAZE</h4>
                <p>Take your time with some of the best films here</p>
            </div>
        <ul class="list-nav">
            <li><a href=>Home</a></li>
            <li><a href=>Genre</a></li>
            <li><a href=>About</a></li>
            <li><a href= "tambah.php">Add Film</a></li>
        </ul>
        <div class="menu-toggle" >
            <span></span>
            <span></span>
            <span></span>
        </div>
        </nav>
        <div class="tambah">
        <h3>--- UBAH FILM ---</h3>
        <form action="" method="post">
                <input type="hidden" name="id" value="<?= $action ["id"]; ?>">	
            <ul>
                <li>
                    <label for="judul"> Judul : </label>
                    <input type="text" name="judul" id="judul" required value= "<?= $film [0] ["judul"]; ?>">
                </li>
                <li>
                    <label for="deskripsi"> Deskripsi : </label>
                    <input type="text" name="deskripsi" id="deskripsi" required value="<?= $film [0]["deskripsi"]; ?>">
                </li>
                <li>
                    <label for="poster"> Poster : </label>
                    <input type="file" name="poster" id="poster"  value="<?= $film [0] ["poster"]; ?>">
                </li>
                <li>
                    <input type="reset" value="reset">	
                    <button type="submit" name="submit">Ubah data film!</button>
                </li>
            </ul>
        </form>
        </div>