<?php
include ("koneksi.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nim = $_POST['nimUpdate'];
        $nama = $_POST['namaUpdate'];
        $prodi = $_POST['prodiUpdate'];

        $update_query = "UPDATE mahasiswa SET nama = '$nama', prodi = '$prodi' WHERE nim = $nim ";

        if (mysqli_query($conn, $update_query)) {
            echo "Data berhasil diupdate.";
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }
    }
?>