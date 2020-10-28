<?php
include "../koneksi.php";
if(isset($_POST ['update'])){
    $updateSql = mysqli_query($conn,"INSERT into datapengunjung (nama,alamat,notelepon,email)
    values
    ('$_POST[nama]','$_POST[alamat]','$_POST[notelepon]','$_POST[email]')");
    if($updateSql){
        echo "<script type='text/javascript'>alert('Data Berhasil diedit...!'); location.href=\"index1.php\";</script>";

    }
}
?>