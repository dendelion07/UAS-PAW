<?php
require 'function.php';
$action = query("SELECT * FROM action");
$fantasi = query("SELECT * FROM fantasi");
$horor = query("SELECT * FROM horor");
$romance = query("SELECT * FROM romance");
$scifi = query("SELECT * FROM scifi");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style-nav.css">
        <link rel="stylesheet" type="text/css" href="css/stylegenre.css">
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
            <li><a href="tambah.php">Add Film</a></li>
        </ul>
        <div class="menu-toggle" >
            <span></span>
            <span></span>
            <span></span>
        </div>
        </nav>
        <h1>Genre</h1>
        <div class="container">   
            <ul>
                <h2>Action</h2>
                <?php foreach( $action as $row ) : ?>
                <li class="Action">
                    <div>
                    <img src="image/<?= $row["poster"]; ?>" >
                    <br>
                    <a href="action-1.html"><?= $row["judul"]; ?></a>
                    <br>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
                    <br>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data??');">Hapus</a>
                    </div>
                </li>
                <?php endforeach; ?>
                <h2>Fantasi</h2>
                <?php foreach( $fantasi as $row ) : ?>
                <li class="Fantasi">
                    <div>
                    <img src="image/<?= $row["poster"]; ?>" >
                    <br>
                    <a href="fantasi-1.html"><?= $row["judul"]; ?></a>
                   
                    <br>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
                    <br>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data??');">Hapus</a>
                    </div>
                </li>
                <?php endforeach; ?>
                <h2>Horor</h2>
                <?php foreach( $horor as $row ) : ?>
                <li class="Horor">
                    <div>
                    <img src="image/<?= $row["poster"]; ?>" >
                    <br>
                    <a href="horor-1.html"><?= $row["judul"]; ?></a>
                    <br>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
                    <br>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data??');">Hapus</a>
                    </div>
                </li>
                <?php endforeach; ?>
                <h2>Romance</h2>
                <?php foreach( $romance as $row ) : ?>
                <li class="Romance">
                    <div>
                    <img src="image/<?= $row["poster"]; ?>" >
                    <br>
                    <a href="romance-1.html"><?= $row["judul"]; ?></a>
                    <br>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
                    <br>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data??');">Hapus</a>
                    </div>
                </li>
                <?php endforeach; ?>
                <h2>Sci-Fi</h2>
                <?php foreach( $scifi as $row ) : ?>
                <li class="Sci-fi">
                    <div>
                    <img src="image/<?= $row["poster"]; ?>" >
                    <br>
                    <a href="sci-fi-1.html"><?= $row["judul"]; ?></a>
                    <br>
                    <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a>
                    <br>
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data??');">Hapus</a>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        </body>
        <script src="javascript/burger.js"></script>
    </html>
        




