<?php
include ("koneksi.php");
if (isset($_GET['del'])) {
    $delete_kode = $_GET['del'];
    
    $delete_query = "DELETE FROM mahasiswa WHERE nim = '$delete_kode'";

    if (mysqli_query($conn, $delete_query)) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . $delete_query . "<br>" . mysqli_error($conn);
    }
}
?>