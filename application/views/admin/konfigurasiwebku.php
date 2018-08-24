<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
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
        <!-- /. NAV SIDE  -->
                <div class="row">
                    <div class="col-md-12">
                     <h2> Konfigurasi Web </h2>  
                        <a href="<?php echo base_url('index.php/admin/konfigweb'); ?>"></a> 
                        
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <?php foreach ($konfweb as $key => $a) : ?>

                    <b><p> Nama Website </p></b>
                    <?php echo $a['nama'];?> 
                    <b><p> Deskripsi Website </p></b>
                    <?php echo $a['deskripsi'];?> 
                    <b><p> Email </p></b>
                    <?php echo $a['email'];?> 
                    <b><p> Telepon </p></b>
                    <?php echo $a['tlp'];?>  
                    <b><p> Link Share </p></b>
                    <div class="row">
                    <br>
                    <!--<?php //echo $a['share1'];?> 
                    <?php //echo $a['share2'];?> 
                    <?php //echo $a['share3'];?> -->
                    <a  href="https://facebook.com"><i class="fa fa-facebook fa-4x" ></i>
                    <a  href="https://www.instagram.com"><i class="fa fa-instagram fa-4x" ></i>
                    <br>
                    <br>
                     <a href="<?php echo base_url ('index.php/admin/editkweb/').$a['id_konfig'];?>" class="btn btn-primary ">Edit</a>
                    </div>
                <?php endforeach; ?>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
             </div> <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
