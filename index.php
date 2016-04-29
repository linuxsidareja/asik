<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="css/bootswatch.min.css">
    <script type="text/javascript" async="" src="js/ga.js"></script>
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>
    
    <title>Pengumuman Online SMA Negeri 1 Bantarsari</title>

    <!-- Custom styles for this template -->
    <link href="css/pengumuman.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="$('#peringatan').modal('show')">

		<div class="modal fade" id="peringatan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel-peringatan" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel-peringatan"><strong>Peringatan!!!</strong></h4>
			  </div>
			  <div class="modal-body" style="text-align:center;">
			  <h2 class="tengah">Dilarang melakukan konvoi! <br>Berdasarkan Rapat Dewan Guru dan Kepala Sekolah, Serta pesan dari Kepala DISDIKPORA Cilacap & Kepolisian. <br><br>Jika terbukti melakukan hal tersebut, akan diberi sanksi administrasi oleh sekolah berupa <br><strong>IJAZAH TIDAK DIBERIKAN</strong>.</h2>
			  <p class="tengah"><strong>- TU -</strong></p>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">Tutup</button>
			  </div>
			</div>
		  </div>
		</div>

    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right" role="tablist">
          <li role="presentation" class="active"><a href="/">Home</a></li>
          <li role="presentation"><a href="index.php?page=about">Tentang</a></li>
          <li role="presentation"><a href="index.php?page=panduan">Panduan</a></li>
        </ul>
        <h3 class="text-muted">SMA N 1 Bantarsari</h3>
      </div>

      <div class="container">
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
      </div>


      <div class="footer">
        <p>&copy; RDesCilacap 2016</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
