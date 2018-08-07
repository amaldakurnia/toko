<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url(); ?>assets/backend/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url(); ?>assets/backend/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php echo base_url(); ?>assets/backend/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url(); ?>assets/backend/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>

    <div class="container">
        <div class="row">
             <h2> Tambah Halaman</h2>
        </div>
    </div>
        <div class="col-lg-4">
             <div class="page-header">  
                                    <form role="form" class="form-horizontal" action="<?php echo base_url ('index.php/admin/tam_hal') ?>" method="post">
                                    <div class="form-group">
                                        <label> Id Halaman </label>
                                        <input type="text" name="id_halaman" class="form-control">
                                    </div>
                                    <div class="form-group">
                                         <label> Id Menu </label>
                                         <input type="text" name="id_menu" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Judul Halaman </label>
                                         <input type="text" name="judul_halaman" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Deskripsi </label>
                                         <input type="text" name="deskripsi" class="form-control">
                                     </div>
<br/>                                       
                                    <input type="submit" value="Simpan" class="btn btn-success">
                                    <a href="<?php echo base_url ('index.php/admin/halaman');?>" class="btn btn-default "> Batal </a>     
                                    <hr />
                                </form>
                            </div>               
                        </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
