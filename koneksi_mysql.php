<?php
$server = mysqli_connect("localhost","root","","latihan_xpplg");

if($server){
    echo "koneski berhasill";

} else{
    echo "gagal";
}echo "</br>";




//query insert data dalam database
$sql ="insert into profil_siswa
(nama, nis, alamat, usia, tanggal_lahir, sekolah, rombel, rayon)
values
('syahrul', '12209447', 'Bogor', '16', '2006/12/09', 'SMK Wikrama Bogor',' PPLG X', 'Cicurug')";

if(mysqli_query ($server, $sql)) { 
    echo "Penyimpanan berhasilll";
}else {
    echo "gagal meneh";
}

?>
