<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Admin Template </title>
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
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : Wednesday , 04 July 2018 &nbsp; <a href="<?php echo base_url ('login/logout'); ?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo base_url(); ?>assets/backend/assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="<?php echo base_url ('index.php/admin/dashboard');?>"><i class="fa fa-dashboard fa-3x"></i> Dashboard </a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url('index.php/admin/user'); ?>"><i class="fa fa-user fa-3x"></i> User </a>
                    </li>
                     <li>
                        <a  href="<?php echo base_url('index.php/admin/halaman'); ?>"><i class="fa fa-book fa-3x"></i> Halaman </a>
                    </li>
                    <li>
                        <a  href="<?php echo base_url('index.php/admin/kategori'); ?>"><i class="fa fa-tasks fa-3x"></i> Kategori Produk </a>
                    </li>
						   <li  >
                        <a   href="<?php echo base_url('index.php/admin/merk'); ?>"><i class="fa fa-barcode fa-3x"></i> Merk Produk </a>
                    </li>	
                      <li  >
                        <a  href="<?php echo base_url('index.php/admin/produk'); ?>"><i class="fa fa-shopping-cart fa-3x"></i> Produk </a>
                    </li>
                    <li  >
                        <a  href="<?php echo base_url('index.php/admin/customer'); ?>"><i class="fa fa-edit fa-3x"></i> Customer </a>
                    </li>				
					 <li  >
                        <a   href="<?php echo base_url('index.php/admin/order'); ?>"><i class="fa fa-pencil fa-3x"></i> Order </a>
                    </li>	
                     <li  >
                        <a href="<?php echo base_url('index.php/admin/konfigweb'); ?>"><i class="fa fa-laptop fa-3x"></i> Konfigurasi Web </a>
                    </li>	
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <!--<h2>Admin Dashboard</h2>   
                        <h5>Welcome Yaskun Amalda , Love to see you back. </h5>-->
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
<?php echo $konten;?>          
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
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
