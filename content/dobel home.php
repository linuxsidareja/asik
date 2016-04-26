
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aplikasi Sistem Informasi Kelulusan</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="css/bootswatch.min.css">
    <script type="text/javascript" async="" src="js/ga.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>
</head>

<body>
<div class="navbar navbar-default navbar-fixed-top">
  <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">SIPKUN SMK KNBI</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="index.php?page=home">Beranda</a>
            </li>
            <li>
              <a href="index.php?page=about">About</a>
            </li>
            <li>
              <a href="index.php?page=panduan">Panduan</a>
            </li>
            <li>
              <a href="index.php?page=contact">Hubungi Kami</a>
            </li>
          </ul>
        </div>
  </div>
      </div>
     <table width="600" align="center">
  <tr>
    <td>
      
      <html>
<head>
<title> Halaman Pencarian </title>
</head>
<body>
</br>
<h4 align="center"><b>Sistem Informasi Pengumuman Kelulusan Uji Coba Tahap I Sampai VI</b></h4>
<h4 align="center"><b>SMK KARYA NUGRAHA BOYOLALI</b></h4>
<div class="well">
<div align="right"><SCRIPT language=JavaScript src="js/almanak.js"></SCRIPT> 
          <span class="style1">I</span> <SCRIPT language=JavaScript>var d = new Date();
var h = d.getHours();
if (h < 11) { document.write('Selamat pagi'); }
else { if (h < 15) { document.write('Selamat siang'); }
else { if (h < 19) { document.write('Selamat sore'); }
else { if (h <= 23) { document.write('Selamat malam'); }
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
<form class="form-horizontal" form name="formcarino" method="post" action="index.php?page=searchuc" onSubmit="return cekNo()">
<fieldset>
  <div align="center">
    <legend> Cari Berdasarkan No Peserta Anda </legend>
  </div>
  <div class="form-group">
      <label for="noujian" class="col-lg-4 control-label">No Peserta</label>
      <div class="col-lg-7">
        <input type="text" class="form-control" name="noujian" placeholder="Contoh : 16-207-001" size="30">
      </div>
  </div>
 <div class="form-group">
      <label for="tanggal" class="col-lg-4 control-label">Tanggal Lahir Peserta</label>
      <div class="col-lg-7">
        <input type="text" class="form-control" name="tgllhr" placeholder="Contoh : 25 Mei 1997" size="30">
      </div>
  </div>
    <div class="form-group">
      <div class="col-lg-7 col-lg-offset-4">
        <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="Cari" class="btn btn-primary">
      </div>
    </div>
</fieldset>
</form>
</div>
<table width="350" align="center">
  <tr>
    <td>
      <div align="center" class="alert alert-dismissable alert-danger">
<h4>
<script language="JavaScript">
TargetDate = "03/12/2015 6:30 PM";
BackColor = "";
ForeColor = "";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% Hari, %%H%% Jam, %%M%% Menit, %%S%% Detik Lagi, Menuju Uji Coba Tahap VI";
FinishMessage = "Alhamdulillah, Sudah Bisa Cek hasil Uji Coba Tahap I Sampai VI!";
</script>
<script language="JavaScript" src="js/countdown.js"></script>
</h4>
</div> 
      </td>
  </tr>
</table>
</body>
</html>      </td>
  </tr>
</table>
<br />
<br />
<div id='credits'>
 Copyright &#169; 2014 
              <a href='http://smkknbi.sch.id/'>SMK KARYA NUGRAHA BOYOLALI</a>
              | Powered by <a href='http://sinicari.blogspot.com/'>Sini Cari</a>
             </div>
</body>
</html>
