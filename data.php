<?php

$servername = "localhost";
$username = "id20835199_ciaaaaaaa";
$password = "SembarangAja_123";
$dbname = "id20835199_sembarang";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Koneksi ke database gagal: ".mysqli_connect_error());
    
}else{
    echo "Selamat koneksi berhasil";
}

$webHS = json_decode(file_get_contents('php://input'),true);
$topic = $webHS['topic'];
$payload = $webHS['payload'];

if ($topic == "ruangan/bedroom/suhu" || $topic == "ruangan/bedroom/kelembaban" || $topic == "ruangan/bedroom/led"){
    $sql = "INSERT INTO databed (topic, payload) VALUES ('$topic', '$payload')";
}
else if ($topic == "ruangan/livingroom/suhu" || $topic == "ruangan/livingroom/kelembaban" || $topic == "ruangan/livingroom/led"){
    $sql = "INSERT INTO dataliving (topic, payload) VALUES ('$topic', '$payload')";
}
else if ($topic == "ruangan/bathroom/suhu" || $topic == "ruangan/bathroom/kelembaban" || $topic == "ruangan/bathroom/led"){
    $sql = "INSERT INTO databath (topic, payload) VALUES ('$topic', '$payload')";
}
else if ($topic == "ruangan/kitchen/suhu" || $topic == "ruangan/kitchen/kelembaban" || $topic == "ruangan/kitchen/led"){
    $sql = "INSERT INTO datakitchen (topic, payload) VALUES ('$topic', '$payload')";
}

mysqli_query($conn, $sql);
?>

