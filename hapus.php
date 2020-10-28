<?php

include '../koneksi.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo " 
    <script>
            alert('Data Berhasil Di Hapus !' );
            document.location.href = 'index1.php';
    </script>
";
} else {
    echo " 
    <script>
            alert('Data Tidak Berhasil Di Hapus !' );
            document.location.href = 'index1.php';
    </script>
";
}
