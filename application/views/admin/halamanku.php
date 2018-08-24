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
                     <h2> Halaman </h2>  
                        <a href="<?php echo base_url('index.php/admin/hal'); ?>"></a> 
                        
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
                 <?php foreach ($hal as $key => $a) : ?>
                    <h4><b>ABOUT</b></h4>
                    <b><p> Judul Halaman </p></b>
                    <?php echo $a['judul_halaman'];?> 
                    <b><p> Deskripsi </p></b>
                    <?php echo $a['deskripsi'];?>  
                    <br>
                    <br>
                     <a href="<?php echo base_url ('index.php/admin/edithal/').$a['id_halaman'];?>" class="btn btn-primary ">Edit</a>
                <?php endforeach; ?>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
             </div> <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url();?>assets/js/custom.js"></script>
    
   
</body>
</html>

