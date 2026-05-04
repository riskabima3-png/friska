<?php
$serverv= "localhoust";
$username= "root";
$password="";
$database="db_wisata";

$conn = mysqli_connect ($server, $username,$password,$database);

if (mysql_connect_errno()){
    echo "koneksi" gagal";
}elsa {
   echo "koneksi berhasil";

}
?>      