<?php

$kecamatan= $_POST["kecamatan"];
$longitude= $_POST["longitude"];
$latitude= $_POST["latitude"];
$luas= $_POST["luas"];
$jumlah_penduduk= $_POST["jumlah_penduduk"];


$servername="localhost";
$username="root";
$password="";
$dbname="pgweb8";
$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

$sql="INSERT INTO kependudukan (kecamatan,longitude,latitude,luas,jumlah_penduduk)
values ('$kecamatan','$longitude','$latitude','$luas','$jumlah_penduduk')";

if($conn->query($sql)===TRUE){
    echo"New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("Location: ../index.php");
exit();
?>