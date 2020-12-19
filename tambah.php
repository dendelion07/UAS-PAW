<?php
require 'function.php';




if( isset($_POST["submit"]) ) {
    $judul = htmlspecialchars ($_POST["judul"]);
    $deskripsi = htmlspecialchars ($_POST["deskripsi"]);
    $poster = htmlspecialchars ($_POST["poster"]);

    if (isset($_POST["genre"]) && $_POST["genre"] == "action"){
    $query = "INSERT INTO action
                VALUES
                ('','$judul','$deskripsi','$poster')
                ";
    mysqli_query($conn, $query); }

    elseif (isset($_POST["genre"]) && $_POST["genre"] == "fantasi"){
        $query = "INSERT INTO fantasi
                    VALUES
                    ('','$judul','$deskripsi','$poster')
                    ";
        mysqli_query($conn, $query); }

    elseif (isset($_POST["genre"]) && $_POST["genre"] == "horor"){
        $query = "INSERT INTO horor
                    VALUES
                    ('','$judul','$deskripsi','$poster')
                    ";
        mysqli_query($conn, $query); }
    
    elseif (isset($_POST["genre"]) && $_POST["genre"] == "romance"){
        $query = "INSERT INTO romance
                    VALUES
                    ('','$judul','$deskripsi','$poster')
                    ";
        mysqli_query($conn, $query); }
    
    elseif (isset($_POST["genre"]) && $_POST["genre"] == "scifi"){
        $query = "INSERT INTO scifi
                    VALUES
                    ('','$judul','$deskripsi','$poster')
                    ";
        mysqli_query($conn, $query); }
    
    


    if( mysqli_affected_rows($conn) > 0) {
		echo "
			<script>
				alert('Film berhasil di tambahkan');
				document.location.href = 'genre.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Film gagal di tambahkan');
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
            <li><a href="index.php">Home</a></li>
            <li><a href="genre.php">Genre</a></li>
            <li><a href=>About</a></li>
        </ul>
        <div class="menu-toggle" >
            <span></span>
            <span></span>
            <span></span>
        </div>
        </nav>
        <div class="tambah">
        <h3>--- TAMBAH FILM ---</h3>
        <form action="" method="post">
            <ul>
            <li>    
                    <label for="action"> Action </label>
                    <input type="radio" name="genre" value ="action">
                    <label for="fantasi"> Fantasi  </label>
                    <input type="radio" name="genre" value ="fantasi">
                    <label for="horor"> Horor  </label>
                    <input type="radio" name="genre" value ="horor">
                    <label for="romance"> Romance  </label>
                    <input type="radio" name="genre" value ="romance">
                    <label for="scifi"> Sci-Fi  </label>
                    <input type="radio" name="genre" value ="scifi">
                </li>
                <li>
                    <label for="judul"> Judul : </label>
                    <input type="text" name="judul" id="judul" required>
                </li>
                <li>
                    <label for="deskripsi"> Deskripsi : </label>
                    <input type="text" name="deskripsi" id="deskripsi" required>
                </li>
                <li>
                    <label for="poster"> Poster : </label>
                    <input type="file" name="poster" id="poster" required>
                </li>
                <li>
                    <input type="reset" value="reset">	
                    <button type="submit" name="submit">Tambah film!</button>
                </li>
            </ul>
        </form>
        </div>
