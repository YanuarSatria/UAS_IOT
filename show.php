<?php

$servername = "localhost";
$username = "id20835199_ciaaaaaaa";
$password = "SembarangAja_123";
$dbname = "id20835199_sembarang";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}
            
?>     

<html>
    <head>
        <h1 align="center-left" >PA IoT Guest House Unmul</h1>
        <p align="center-left" >
            <pre>Anggota Kelompok
                <br>Yanuar Satria Gotama   / 2009106013
                <br>Indah Wulan Lestar     / 2009106027
                <br>Patricia Chanda        / 2009106030
                <br>M.Rifky Cahyadi Sukri  / 2009106043
        </p>
        <body style="background-color:#C4B0FFFF;">
            <table style="background-color:#8D91FCFF" border="1" width="85%" cellpadding="7">

            <tr style="background-color:#6265C3FF;">
                <td align="center">Ruangan</td>
                <td align="center">Suhu</td>
                <td align="center">Kelembaban</td>
                <td align="center">Led</td>
            </tr>
            <tr>
                <td align="center">Bed Room</td>
                <td align="center"> 
                <?php $suhubed = "SELECT * FROM databed WHERE topic = 'ruangan/bedroom/suhu' ORDER BY id DESC LIMIT 1";
                        $hasilbed1 = mysqli_query($conn, $suhubed);
                        $datasuhubed = mysqli_fetch_array($hasilbed1);
                        echo $datasuhubed['payload'];?>
                </td>
                
                <td align="center"> 
                <?php $lembabbed = "SELECT * FROM databed WHERE topic = 'ruangan/bedroom/kelembaban' ORDER BY id DESC LIMIT 1";
                        $hasilbed2 = mysqli_query($conn, $lembabbed);
                        $datalembabbed = mysqli_fetch_array($hasilbed2);
                        echo $datalembabbed['payload'];?>
                </td>
                
                <td align="center">  
                <?php $ledbed = "SELECT * FROM databed WHERE topic = 'ruangan/bedroom/led' ORDER BY id DESC LIMIT 1";
                        $hasilbed3 = mysqli_query($conn, $ledbed);
                        $dataledbed = mysqli_fetch_array($hasilbed3);
                          if ($dataledbed==NULL) {
                            echo "Tidak ada data masuk";
                          }else{
                            echo $dataledbed['payload'];
                          }?>
                </td>
            </tr>
            <tr>
                <td align="center">Living Room</td>
                <td align="center">
                    <?php $suhuliving = "SELECT * FROM dataliving WHERE topic = 'ruangan/livingroom/suhu' ORDER BY id DESC LIMIT 1";
                          $hasilliving1 = mysqli_query($conn, $suhuliving);
                          $datasuhuliving = mysqli_fetch_array($hasilliving1);
                          echo $datasuhuliving['payload'];?>
                </td>
                <td align="center">
                    <?php $lembabliving= "SELECT * FROM dataliving WHERE topic = 'ruangan/livingroom/kelembaban' ORDER BY id DESC LIMIT 1";
                            $hasilliving2 = mysqli_query($conn, $lembabliving);
                            $datalembabliving = mysqli_fetch_array($hasilliving2);
                            echo $datalembabliving['payload'];?>
                </td>
                <td align="center">
                    <?php $ledliving = "SELECT * FROM dataliving WHERE topic = 'ruangan/livingroom/led' ORDER BY id DESC LIMIT 1";
                          $hasilliving3 = mysqli_query($conn, $ledliving);
                          $dataledliving = mysqli_fetch_array($hasilliving3);
                          if ($dataledliving==NULL) {
                            echo "Tidak ada data masuk";
                          }else{
                            echo $dataledliving['payload'];
                          }?>
                </td>
            </tr>
            <tr>
                <td align="center">Bath Room</td>
                <td align="center">
                    <?php $suhubath = "SELECT * FROM databath WHERE topic = 'ruangan/bathroom/suhu' ORDER BY id DESC LIMIT 1";
                          $hasilbath1 = mysqli_query($conn, $suhubath);
                          $datasuhubath = mysqli_fetch_array($hasilbath1);
                          echo $datasuhubath['payload'];?>
                </td>
                <td align="center">
                    <?php $lembabbath = "SELECT * FROM databath WHERE topic = 'ruangan/bathroom/kelembaban' ORDER BY id DESC LIMIT 1";
                          $hasilbath2 = mysqli_query($conn, $lembabbath);
                          $datalembabbath = mysqli_fetch_array($hasilbath2);
                          echo $datalembabbath['payload'];?>
                </td>
                <td align="center">
                    <?php $ledbath = "SELECT * FROM databath WHERE topic = 'ruangan/bathroom/led' ORDER BY id DESC LIMIT 1";
                          $hasilbath3 = mysqli_query($conn, $ledbath);
                          $dataledbath = mysqli_fetch_array($hasilbath3);
                          if ($dataledbath==NULL) {
                            echo "Tidak ada data masuk";
                          }else{
                            echo $dataledbath['payload'];
                          }?>
                </td>
            </tr>
            <tr>
                <td align="center">Kitchen</td>
                <td align="center">
                    <?php $suhukitchen = "SELECT * FROM datakitchen WHERE topic = 'ruangan/kitchen/suhu' ORDER BY id DESC LIMIT 1";
                          $hasilkitchen1 = mysqli_query($conn, $suhukitchen);
                          $datasuhukitchen = mysqli_fetch_array($hasilkitchen1);
                          echo $datasuhukitchen['payload'];?>
                </td>
                <td align="center">
                    <?php $lembabkitchen = "SELECT * FROM datakitchen WHERE topic = 'ruangan/kitchen/kelembaban' ORDER BY id DESC LIMIT 1";
                          $hasilkitchen2 = mysqli_query($conn, $lembabkitchen);
                          $datalembabkitchen = mysqli_fetch_array($hasilkitchen2);
                          echo $datalembabkitchen['payload'];?>
                </td>
                <td align="center">
                    <?php $ledkitchen = "SELECT * FROM datakitchen WHERE topic = 'ruangan/kitchen/led' ORDER BY id DESC LIMIT 1";
                          $hasilkitchen3 = mysqli_query($conn, $ledkitchen);
                          $dataledkitchen = mysqli_fetch_array($hasilkitchen3);
                          if ($dataledkitchen==NULL) {
                            echo "Tidak ada data masuk";
                          }else{
                            echo $dataledkitchen['payload'];
                          }?>
                </td>
            </tr>

            </table>
        </body>
    </head>
</html>