
<?php
$conn = mysqli_connect("localhost","root","","crudnative");

/*if($conn){
    echo"Koneksi Sukses";
}else{
    echo"Koneksi Gagal";
}*/

function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM datapenggunjung WHERE id= $id");
    return mysqli_affected_rows($conn);
}


?>

