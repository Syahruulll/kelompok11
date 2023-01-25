<?php 
$server = mysqli_connect("localhost","root","","latihan_xpplg");

if($server){
    echo "koneski berhasill";

} else{
    echo "gagal";
}echo "</br>";

$nama = $_POST['nama'];

$usia = $_POST['usia'];

$nis = $_POST['nis'];

$alamat = $_POST ['alamat'];

$lahir = $_POST ['lahir'];

$sekolah = $_POST ['sekolah'];

$rombel = $_POST ['rombel'];

$rayon = $_POST ['rayon'];

$prod = $_POST ['prod'];
$mat = $_POST ['mtk'];
$sej = $_POST ['sejarah'];
$inf = $_POST ['informatika'];
$sun = $_POST ['sunda'];
$mapel =($prod+$mat+$sej+$inf+$sun)/5;
$max = max ($prod,$mat,$sej,$inf,$sun);
$min = min ($prod,$mat,$sej,$inf,$sun);



// echo "<h2>BIODATA</h2>";
// echo "<h3>Nama : " . $nama;
// echo "<br/>";
// echo "Nis : " . $nis;
// echo "<br/>"; 
// echo "Usia : " . $usia;
// echo "<br/>";
// echo "Alamat : " . $alamat;
// echo "<br/>";
// echo "Tanggal lahir :" . $lahir;
// echo "<br/>";
// echo "Sekolah : " . $sekolah;
// echo "<br/>";
// echo "Rombel : " . $rombel;
// echo "<br/>";
// echo "Rayon : " . $rayon;
// echo "<br/></h3>";

// echo "<h2>Hasil Nilai</h2>";
// echo "<h3>Nilai rata-rata :" . $mapel;
// echo "<h3> Nilai maximal :" . $max;
// echo "<h3> Nilai minimum :" . $min;


$sql ="insert into profil_siswa
(nama, nis, alamat, usia, tanggal_lahir, sekolah, rombel, rayon)
values
('$nama', '$nis', '$alamat', '$usia', '$lahir', '$sekolah', '$rombel', '$rayon')";

if(mysqli_query ($server, $sql)) {
    echo "Penyimpanan berhasilll";
}else {
    echo "gagal meneh";
}


$sdl ="insert into daftar_nilai(produktif,matematika,sejarah,informatika,b_sunda,rata_rata,nilai_maximal,nilai_minimum)
values
('$prod','$mat','$sej','$inf','$sun','$mapel','$max','$min')";
if(mysqli_query ($server, $sdl)) {
    echo "Penyimpanan aluss";
}else {
    echo "gagal meneh";
}














?>