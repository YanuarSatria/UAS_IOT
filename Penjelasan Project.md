# UAS_IOT
Yanuar Satria Gotama   / 2009106013
                
Indah Wulan Lestar     / 2009106027
                
Patricia Chanda        / 2009106030
                
M.Rifky Cahyadi Sukri  / 2009106043


enjelasan Project Guest House Unmul

Project ini memonitoring dan controling suhu, kelembaban, dan led yang terdapat di Guest House Unmul.
Yang terbagi menjadi 4 yaitu Bedroom, Livingroom, Bathroom, dan Kitchen.

Diawali dari penyusunan UI atau Screen pada Kodular dan Block agar dapat terhubung dengan Wokwi.

Kemudian, di wokwi sambungkan ke broker pilihan yaitu Shifter.io dan masukkan code client dan
Mqttserver yaitu kelompokiot.cloud.shiftr.io.

Lalu buat webhost guna menampilkan data yang merupakan output dari wokwi, sebelumnya
sambungkan webhost ke shifter.io melalui webhooks dan masukkan topic, url, dan body.

Setelah itu pada webhost buat codingan sesuai pada url yang dimasukkan di shifter untuk menyambungkan 
yaitu data.php, lalu buat 1 file lagi untuk menampilkan data dari shifter.io yaitu show.php.

Sebelumnya buat terlebih dahulu database dan tabel yang diinginkan pada project ini terdapat
4 tabel yaitu databed, dataliving, databath, dan datakitchen. Disana akan disimpan data yang
sesuai dengan topicnya. 

Kemudian, buat codingan web yang membuat tabel berbentuk matrix 4x3 yang berisi data topic 
tiap ruangan yaitu suhu, kelembaban, dan led. Setelah itu data yang merupakan output dari wokwi
yang disalurkan melalui shifter.io yang dapat di monitoring dan controling juga melalui kodular.
