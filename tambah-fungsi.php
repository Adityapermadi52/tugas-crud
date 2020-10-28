<?php
include "../koneksi.php";
if(isset($_POST ['tambah'])){
    $insertSql = mysqli_query($conn,"INSERT into datapengunjung (nama,alamat,notelepon,email)
    values
    ('$_POST[nama]','$_POST[alamat]','$_POST[notelepon]','$_POST[email]')");
    if($insertSql){
        echo "<script type='text/javascript'>alert('Data Berhasil disimpan...!'); location.href=\"index1.php\";</script>";

    }
}
?>