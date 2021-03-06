<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Registrasiku</title>
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
             <h2> Tambah Customer</h2>
                <a href="<?php echo base_url('index.php/admin/tampil'); ?>"></a>
        </div>
    </div>
        <div class="col-lg-4">
             <div class="page-header">  
                                    <form role="form" class="form-horizontal">
                                    <div class="form-group">
                                        <label> Id Customer </label>
                                        <input type="text" name="id_customer" class="form-control">
                                    </div>
                                    <div class="form-group">
                                         <label> Nama Depan </label>
                                         <input type="text" name="nama_dpn" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Nama Belakang </label>
                                         <input type="text" name="nama_blkng" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Email </label>
                                         <input type="text" name="email" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Password </label>
                                         <input type="text" name="password" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Tanggal Lahir </label>
                                         <input type="date" name="tgl_lahir" class="form-control">
                                     </div>
<br/>                                       
                                         <a href="<?php echo base_url ('index.php/admin/customer');?>" class="btn btn-success ">Simpan</a>
                                         
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
