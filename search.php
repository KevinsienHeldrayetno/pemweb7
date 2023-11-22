<?php
include ("koneksi.php");
if (isset($_GET['prodiSearch'])){
        $prodi = $_GET['prodiSearch'];

        if($prodi == "Informatika"){
            $query = "SELECT * FROM mahasiswa WHERE prodi = 'Teknik Informatika'";
        }elseif($prodi == "Elektro"){
            $query = "SELECT * FROM mahasiswa WHERE prodi = 'Teknik Elektro'";
        }elseif($prodi == "Telekomunikasi"){
            $query = "SELECT * FROM mahasiswa WHERE prodi = 'Teknik Telekomunikasi'";
        }elseif($prodi == "Tambang"){
            $query = "SELECT * FROM mahasiswa WHERE prodi = 'Teknik Tambang'";
        }elseif($prodi == "Sipil"){
            $query = "SELECT * FROM mahasiswa WHERE prodi = 'Teknik Sipil'";
        }else{
            echo "Gagal";
        }
        
        $result = $conn->query($query);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "NIM: " . $row["nim"]. " - Name: " . $row["nama"]. " - Prodi " . $row["prodi"]. "<br>";
            }
        } else {
            echo "0 results";
        }
    }
?>