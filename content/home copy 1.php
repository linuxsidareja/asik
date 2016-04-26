<html>
<head>
<title> Halaman Pengecekan Kelulusan </title>
<style type="text/css">
<!--
.style1 {font-family: "Courier New", Courier, monospace}
.style5 {
	font-family: "Times New Roman", Times, serif;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<img src="http://smkn1binangun.hol.es/images/pengumuman.png">

<div class="well">
<div align="right"><SCRIPT language=JavaScript src="js/almanak.js"></SCRIPT> 
          <span class="style1">I</span> <SCRIPT language=JavaScript>var d = new Date();
var h = d.getHours();
if (h < 11) { document.write('Selamat pagi, Siswa-Siswi SMK N 1 Binangun'); }
else { if (h < 15) { document.write('Selamat siang, Siswa-Siswi SMK N 1 Binangun'); }
else { if (h < 19) { document.write('Selamat sore, Siswa-Siswi SMK N 1 Binangun'); }
else { if (h <= 23) { document.write('Selamat malam, Siswa-Siswi SMK N 1 Binangun'); }
}}}</SCRIPT>   </div><br/>
<script>
function cekNo() {
   var cek = document.forms['formcarino']['noujian'].value;
     if(cek==null || cek=="")
     {
       alert("Nomor Peserta harus di isi dahulu!");
       return false;
     }
	var cek = document.forms['formcarino']['tgllhr'].value;
     if (cek==null || cek=="")
     {
       alert("Tanggal lahir Peserta harus di isi dahulu!");
       return false;
     }

}
</script>
<form class="form-horizontal" form name="formcarino" method="post" action="index.php?page=searchno" onSubmit="return cekNo()">
<fieldset>
  <div align="center">
    <legend><span class="style5"> MASUKKAN IDENTITAS SESUAI KARTU PESERTA UN </span></legend>
  </div>
  <div class="form-group">
      <label for="noujian" class="col-lg-4 control-label">NO. PESERTA UN</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name="noujian" placeholder="Contoh : 09-006-001-9" size="12">
      </div>
  </div>
  <div class="form-group">
      <label for="tgllhr" class="col-lg-4 control-label">TANGGAL LAHIR</label>
      <div class="col-lg-5">
        <input type="text" class="form-control" name="tgllhr" placeholder="Contoh : 10-04-1997" size="10">
      </div>
  </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <p align="right">
          <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="Lihat Hasil Kelulusan" class="btn btn-primary">
        </p>
     
      </div>
    </div>
</fieldset>
</form>
</div>
<table width="600" align="center">
  <tr>
    <td>
      <div align="center" class="alert alert-dismissable alert-danger">
<h4>
<script language="JavaScript">
TargetDate = "5/15/2015 01:00 PM";
BackColor = "";
ForeColor = "";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% Hari, %%H%% Jam, %%M%% Menit, %%S%% Detik Lagi, Menuju Waktu Pengumuman Kelulusan";
FinishMessage = "Pengumuman hasil UN sudah bisa diakses";
</script>
<script language="JavaScript" src="js/countdown.js"></script>
</h4>
</div> 
      </td>
  </tr>
</table>
</body>
</html>