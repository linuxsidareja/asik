<html>
<head>
<title> Hasil Pencarian </title>
</head>
<body>
<?php
include "../config.php";

$noujian= $_POST['noujian'];
$tgllhr= $_POST['tgllhr']; //get the nama value from form

$q = "SELECT * from tb_student where noujian = '$noujian'  AND  tgllhr='$tgllhr' "; //query to get the search result
$result = mysql_query($q); //execute the query $q

$num_rows = mysql_num_rows($result);
if($num_rows == 0) echo "<br><div align='center' class='alert alert-dismissable alert-danger'><h4>Maaf, Data anda tidak ditemukan!</h4></div><meta http-equiv='refresh' content='2; url=index.php'>";
else 
echo "<div align='center'><h4>Lembar Hasil Ujian</h4></div>";
echo "<table width='400' class='table table-striped table-hover'>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
 <tr class='active'>
    <td width='180'>No Peserta </td>
    <td colspan='3'><strong>".$data['noujian']."</strong></td>
  </tr>
  <tr>
    <td>Nama Lengkap</td>
    <td colspan='3'><font style='text-transform: capitalize;'><strong>".$data['name']."</strong></font></td>
  </tr>
 <tr>
    <td>Jurusan</td>
    <td colspan='3'><font style='text-transform: capitalize;'><strong>".$data['sekolah']."</strong></font></td>
  </tr>

  <tr>
    <td>Keterangan</td>
    <td colspan='3'><b><font color='blue' size='6' style='text-transform: uppercase;'>".$data['ket']."</td>
  </tr>";
echo "</table>";
echo "<div align='center'><a href='http://smkn1binangun.sch.id' class='btn btn-success'>SELAMAT & SUKSES</a></div>";
}

?>
<br><p align="center"><font color="red"><b><h3>PENGUMUMAN</b></h3></p>
<p><font align="left" color="black">
<ul>
<li>Dilarang melakukan konvoi, Berdasarkan Rapat Dewan Guru dan Kepala Sekolah, Serta pesan dari Kepala DISDIKPORA Cilacap & Kepolisian "Jika terbukti melakukan hal tersebut, akan diberi sanksi admiinistrasi oleh sekolah berupa
<font color="red"><b>IJAZAH TIDAK DIBERIKAN</b></font>
</li>
<li>Dilarang hura hura</li>
<li>Jaga Keselamatan diri sendiri</li>
<li>Jaga nama baik sekolah</li>
<li>
Hari Senin, 18 Mei 2015 pukul 08:00 berangkat untuk melakukan Gladi Kotor Persiapan Wisuda dan Pengambilan Undangan Wisuda Untuk Orang Tua,  mengenakan seragam sekolah
</li>
<li>
Hari Selasa, 19 Mei 2015 berangkat untuk melakukan kegiatan Gladi Bersih dan Informasi seputar wisuda, mengenakan seragam sekolah
</li>
<li>
Pelaksanaan wisuda tanggal 20 Mei 2015. Peserta (siswa/i)  jam 07.00 dan untuk orang tua siswa jam 08:00 (undangan bisa diambil hari Senin, 18 Mei 2015)
</li>
</ul>
</body>
</html>