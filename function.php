<?php
$conn = mysqli_connect("localhost", "root", "", "project");


function query ($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}



function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM action WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;
    $id = $data["id"];
    $judul = htmlspecialchars ($_POST["judul"]);
    $deskripsi = htmlspecialchars ($_POST["deskripsi"]);
    $poster = htmlspecialchars ($_POST["poster"]);

$query = "UPDATE action SET

            judul = '$judul',
            deskripsi = '$deskripsi',
            poster = '$poster'
            WHERE id = $id
        ";
mysqli_query($conn, $query);
return mysqli_affected_rows($conn);
}
?>