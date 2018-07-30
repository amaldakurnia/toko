<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
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
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome Yaskun Amalda , Love to see you back. </h5>
                        <a href="<?php echo base_url('index.php/admin/dashboard'); ?>"></a> 
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-shopping-cart"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">User</p>
                    <p class="text-muted" ></p>
                    <a href="<?php echo base_url ('index.php/admin/user');?>">User</a>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-edit"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Kategori</p>
                    <p class="text-muted"></p>
                    <a href="<?php echo base_url ('index.php/admin/kategori');?>">Kategori</a>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-barcode"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Merk Produk</p>
                    <p class="text-muted"></p>
                    <a href="<?php echo base_url ('index.php/admin/merk');?>"> Merk Produk</a>
                </div>
             </div>
		     </div>
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-pencil"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Produk</p>
                    <p class="text-muted"></p>
                    <a href="<?php echo base_url ('index.php/admin/produk');?>">Produk</a>
                </div>
             </div>
		     </div>
			</div>               
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Customer</p>
                    <p class="text-muted"></p>
                    <a href="<?php echo base_url ('index.php/admin/customer');?>">Customer</a>
                </div>
             </div>
		     </div>
         <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">           
      <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-tasks"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text">Order</p>
                    <p class="text-muted"></p>
                    <a href="<?php echo base_url ('index.php/admin/order');?>">Order</a>
                </div>
             </div>
         </div>

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php echo base_url(); ?>assets/backend/assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/backend/assets/js/custom.js"></script>
    
   
</body>
</html>
