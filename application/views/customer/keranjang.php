<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Shopping Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
 	<link href="<?php echo base_url(); ?>assets/fronted/assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="<?php echo base_url(); ?>assets/fronted/style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="<?php echo base_url(); ?>assets/fronted/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo base_url ();?>assets/fronted/assets/ico/favicon.ico">
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a href="<?php echo base_url('customer/');?>"> <span class="icon-home"></span> Home</a> 
				<a href="<?php echo base_url('customer/akun');?>"><span class="icon-user"></span> My Account</a> 
				<a href="<?php echo base_url('customer/register');?>"><span class="icon-edit"></span> Free Register </a> 
				<a href="<?php echo base_url('customer/kontak');?>"><span class="icon-envelope"></span> Contact us</a>
				<a class="active" href="<?php echo base_url('customer/keranjang');?>"><span class="icon-shopping-cart"></span> Item <span class="badge badge-warning"> Rp.<?php echo $total;?> </span></a>
				<a href="<?php echo base_url ('login/logoutcus'); ?>"><span class=""></span> Logout <span class="badge badge-warning"></span></a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="<?php echo base_url ('customer/');?>"><span>Twitter Bootstrap ecommerce template</span> 
		<img src="<?php echo base_url();?>assets/fronted/assets/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
		<a href="<?php echo base_url ('customer/checkout');?>">
	</a>
	</h1>
	</div>
	<div class="span4">
	</div>
	<div class="span4 alignR">
	<p><br> <strong> Support (24/7) :  0800 1234 678 </strong><br><br></p>
	<span class="btn btn-mini">[ 2 ] <span class="icon-shopping-cart"></span></span>
	<span class="btn btn-warning btn-mini">$</span>
	<span class="btn btn-mini">&pound;</span>
	<span class="btn btn-mini">&euro;</span>
	</div>
</div>
</header>

<!--
Navigation Bar Section 
-->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			  <li class=""><a href="<?php echo base_url ('customer/');?>">Home	</a></li>
			  <li class=""><a href="<?php echo base_url ('customer/daftar');?>">List View</a></li>
			  <li class=""><a href="<?php echo base_url ('customer/tampilgrid');?>">Grid View</a></li>
			  <li class=""><a href="<?php echo base_url ('customer/tiga');?>">Three Column</a></li>
			  <li class=""><a href="<?php echo base_url ('customer/empat');?>">Four Column</a></li>
			  <li class=""><a href="<?php echo base_url ('customer/rekonfirm');?>">Rekonfirmasi</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">
			<li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm">
				  <div class="control-group">
					<input type="text" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Remember me
					</label>
					<button type="submit" class="shopBtn btn-block">Sign in</button>
				  </div>
				</form>
				</div>
			</li>
			</ul>
		  </div>
		</div>
	  </div>
	</div>
<!-- 
Body Section 
-->
	<div class="row">
	<div class="span12">
    <ul class="breadcrumb">
		<li><a href="<?php echo base_url ('customer/');?>">Home</a> <span class="divider">/</span></li>
		<li class="active">Check Out</li>
    </ul>
	<div class="well well-small">
		<h1>Check Out <small class="pull-right"> Items are in the cart </small></h1>
	<hr class="soften"/>	

	<table class="table table-bordered table-condensed">
	<a href="<?php echo base_url ('customer/addcart');?>"></a>
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>
                  <th>Warna</th>
				  <th>Unit Price</th>
                  <th>Qty</th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
                <tr>
                <?php foreach ($data->result_array() as $key => $value) : ?>
                  <td><img width="100" src="<?php echo base_url();?>assets/img/<?php echo $value['produk'];?>" alt=""></td>
                  <td><?php echo $value['deskripsi'];?></td>
                  <td><?php echo $value['warna'];?></td>
                  <td>Rp. <?php echo $value['harga'];?></td>
                  <td>
                  <!--<input class="span" style="max-width:34px" placeholder="" id="appendedInputButtons" size="16" type="text" value="<?php echo $value['jumlah_barang'];?>">-->
				  <div class="input-append" style="display:flex;max-width:80px;">
				  <form action="<?php echo base_url('customer/plus/').$value['id_cart'];?>" method="post">
				  <input type="hidden" name="plus" value="<?php echo $value['id_cart'];?>">
					<input class="span1" name="jumlah_barang" placeholder="0" id="number" type="text" name="jumlah_barang" value="<?php echo $value['jumlah_barang'];?>">
					<input type="submit" class="btn btn-mini" style="height:100%;width:22px;" value="+">
				  </form>

				  <form action="<?php echo base_url('customer/min/').$value['id_cart'];?>" method="post">
				  <input type="hidden" name="min" value="<?php echo $value['id_cart'];?>">
					<input class="span" name="jumlah_barang" placeholder="0" id="number1" type="hidden" name="jumlah_barang" value="<?php echo $value['jumlah_barang'];?>">
					<input type="submit" class="btn btn-mini" style="height:100%;width:22px;" value="-">
				  </form>
					
					<a style="height:100%;" href="<?php echo base_url('customer/hapcart/').$value['id_cart'];?>" class="btn btn-danger"><span class="icon-remove"></span></a>

				  </div>
				 </td>
				 <td> Rp. <?php echo $value['total'];?> </td>
                </tr>
                <?php endforeach; ?>
                <tr>
                  <td colspan="5" class="alignR">Total products:	</td>
                  <td><?php echo $total;?></td>
                </tr>
				</tbody>
            </table><br/>

			<table class="table table-bordered">
			<tbody>
                <tr><td>ESTIMATE YOUR SHIPPING & TAXES</td></tr>
                 <tr> 
				 <td>
					<form class="form-horizontal" action="<?php echo base_url('customer/tamcheck');?>" method="post">
			
					  <div class="control-group">
						<label class="span2 control-label" for="inputEmail">Negara</label>
						<div class="controls">
						  <input type="text" name="negara" placeholder="Negara">
						</div>
					  </div>
					  <div class="control-group">
						<label class="span2 control-label" for="inputEmail">Provinsi</label>
						<div class="controls">
						  <input type="text" name="provinsi" placeholder="Provinsi">
						</div>
					  </div>
					  <div class="control-group">
						<label class="span2 control-label" for="inputEmail">Kabupaten</label>
						<div class="controls">
						  <input type="text" name="kabupaten" placeholder="Kabupaten">
						</div>
					  </div>
					  <div class="control-group">
						<label class="span2 control-label" for="inputEmail">Alamat Lengkap</label>
						<div class="controls">
						  <input type="text" name="alamat_lengkap" placeholder="alamat Lengkap">
						</div>
					  </div>
					  <div class="control-group">
						<label class="span2 control-label" for="inputPassword">Kode Pos</label>
						<div class="controls">
						  <input type="text" name="kode_pos" placeholder="Kode Pos">
						</div>
						<br>
					  <div class="control-group">
						<div class="controls">
						  <button type="submit" class="shopBtn">Check price</button>
						</div>
					  </div>
					 
				  </td>
				  </tr>
              </tbody>
            </table>		
	<a href="<?php echo base_url('customer/prod');?>" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
	</form>

</div>
</div>
</div>
<!-- 
Clients 
-->
<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">
		<?php foreach ($merk as $key => $merk) : ?>
			<div class="span2">
			<a href="<?php echo base_url('customer/merk_prod/').$merk['id_merk'];?>"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/<?php echo $merk['gambarr'];?>"></a>
		</div>
	<?php endforeach; ?>
</section>

<!--
Footer
-->
<footer class="footer">
<div class="row-fluid">
<div class="span2">
<h5>Your Account</h5>
<a href="#">YOUR ACCOUNT</a><br>
<a href="#">PERSONAL INFORMATION</a><br>
<a href="#">ADDRESSES</a><br>
<a href="#">DISCOUNT</a><br>
<a href="#">ORDER HISTORY</a><br>
 </div>
<div class="span2">
<h5>Iinformation</h5>
<a href="contact.html">CONTACT</a><br>
<a href="#">SITEMAP</a><br>
<a href="#">LEGAL NOTICE</a><br>
<a href="#">TERMS AND CONDITIONS</a><br>
<a href="#">ABOUT US</a><br>
 </div>
<div class="span2">
<h5>Our Offer</h5>
<a href="#">NEW PRODUCTS</a> <br>
<a href="#">TOP SELLERS</a><br>
<a href="#">SPECIALS</a><br>
<a href="#">MANUFACTURERS</a><br>
<a href="#">SUPPLIERS</a> <br/>
 </div>
 <div class="span6">
<h5>The standard chunk of Lorem</h5>
The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for
 those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et 
 Malorum" by Cicero are also reproduced in their exact original form, 
accompanied by English versions from the 1914 translation by H. Rackham.
 </div>
 </div>
</footer>
</div><!-- /container -->

<div class="copyright">
<div class="container">
	<p class="pull-right">
		<a href="#"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/maestro.png" alt="payment"></a>
		<a href="#"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/mc.png" alt="payment"></a>
		<a href="#"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/pp.png" alt="payment"></a>
		<a href="#"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/visa.png" alt="payment"></a>
		<a href="#"><img src="<?php echo base_url(); ?>assets/fronted/assets/img/disc.png" alt="payment"></a>
	</p>
	<span>Copyright &copy; 2013<br> bootstrap ecommerce shopping template</span>
</div>
</div>
 
<a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/fronted/assets/js/jquery.js"></script>
	<script src="<?php echo base_url(); ?>assets/fronted/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/fronted/assets/js/jquery.easing-1.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/fronted/assets/js/jquery.scrollTo-1.4.3.1-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/fronted/assets/js/shop.js"></script>
  </body>
</html>
