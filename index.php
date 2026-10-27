<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pgweb8";
//Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);
//Memeriksa koneksi
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
$sql = "select * from kependudukan";
$result = $conn->query($sql);
echo "<a href='input/index.html'>Input</a>";
if  ($result->num_rows>0){
    
    echo "<table border='1px'><tr>
    <th>Kecamatan</th>
    <th>Longitude</th>
    <th>Latitude</th>
    <th>Luas</th>
    <th>Jumlah Penduduk</th></tr>";

    while($row=$result->fetch_assoc()){
        echo"<tr><td>".$row['kecamatan']."</td>
        <td>".$row['longitude']."</td>
        <td>".$row['latitude']."</td>
        <td>".$row['luas']."</td>
        <td>".$row['jumlah_penduduk']."</td></tr>";
    }
    
    echo "</table>";
}
else {
    echo "0 results";
}
$conn->close();
?>