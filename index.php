<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
alert ('Dilarang melakukan konvoi, Berdasarkan Rapat Dewan Guru dan Kepala Sekolah, Serta pesan dari Kepala DISDIKPORA Cilacap & Kepolisian "Jika terbukti melakukan hal tersebut, akan diberi sanksi administrasi oleh sekolah berupa IJAZAH TIDAK DIBERIKAN"');</script>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PENGUMUMAN ONLINE SMK NEGERI 1 BINANGUN</title>
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
          <a href="http://smkn1binangun.sch.id" class="navbar-brand">SMK NEGERI 1 BINANGUN</a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="index.php?page=home">Cek Kelulusan UN</a>
            </li>
                        <li>
              <a href="index.php?page=panduan">Panduan</a>
            </li>
                      
          </ul>
          
        </div>
  </div>
      </div>
     <table width="600" align="center">
  <tr>
    <td>
      
      <?php

		  require "config.php";

		   $page=$_GET['page'];
		   $filename="content/$page.php";
		   if (!file_exists($filename))
        {
         include "content/home.php";
        }
            else
        {@include "content/$page.php";}
        ?>
      </td>
  </tr>
</table>
</body>
</html>