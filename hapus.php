<?php

include("koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $query = "DELETE FROM gambar WHERE id=$id";
    $sql = mysqli_query($connect, $query);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: index.php');
    } 
    else {
        die("gagal menghapus...");
    }

}
else {
    die("akses dilarang...");
}

?>