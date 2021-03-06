<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Shopping Cart </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
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
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/fronted/assets/ico/favicon.ico">
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
				<a href="<?php echo base_url('customer/keranjang');?>"><span class="icon-shopping-cart"></span> Item <span class="badge badge-warning"> Rp.<?php echo $total;?> </span></a>
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
		<a href="<?php echo base_url ('customer/daftar');?>">
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
			  <li class=""><a href="<?php echo base_url ('customer/');?>">Home</a></li>
			  <li class="active"><a href="<?php echo base_url ('customer/daftar');?>">List View</a></li>
			  <li class=""><a href="<?php echo base_url ('customer/tampilgrid');?>">Grid View</a></li>
			  <li class=""><a href="<?php echo base_url ('customer/tiga');?>">Three Column</a></li>
			  <li class=""><a href="<?php echo base_url ('customer/empat');?>">Four Column</a></li>
			  <li class=""><a href="<?php echo base_url ('customer/rekonfirm');?>">Rekonfrimasi</a></li>
			</ul>
			
			<form action="<?php echo base_url ('customer/search_data') ; ?> " class="navbar-search pull-left" method="post">
			  <input type="text" name="keywoard" placeholder="Search" class="search-query span1">
			  <input type="hidden" name="search_submit">
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
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">

		<?php foreach ($kat as $key => $kat) : ?>
		<li><a href="<?php echo base_url('customer/kat_prod/').$kat['id_kategori'];?>"><span class="icon-chevron-right"></span><?php echo $kat['nm_kategori'];?></a></li>
	<?php endforeach;?>

		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="<?php echo base_url('customer/keranjang');?>"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;"> Rp.<?php echo $total;?> </span></strong></a></li>
	</ul>
</div>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p> 
					 only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="#"><img src="<?php echo base_url();?>assets/fronted/assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
			<a class="shopBtn btn-block" href="#">Upcoming products <br><small>Click to view</small></a>
			<br>
			<br>
			<ul class="nav nav-list promowrapper">
			<li>
			  <div class="thumbnail">
				<?php foreach ($samping as $key => $value) : ?>

				<a class="zoomTool" href="<?php echo base_url('customer/detprod/').$value['id_produk']; ?>" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<img src="<?php echo base_url(); ?>assets/img/<?php echo $value['gambar'];?>" alt="">
				<div class="caption">
				  <h4><a class="defaultBtn" href="<?php echo base_url('customer/detprod/').$value['id_produk']; ?>">VIEW</a> <span class="pull-right"> Rp. <?php echo $value['harga'];?></span></h4>
				</div>
				<?php endforeach; ?>
			  </div>
			</li>
		  </ul>

	</div>
<div class="span9">
<div class="well well-small">
	<?php foreach ($data->result_array() as $key => $value) : ?> 
	<div class="row-fluid">	 
	
		<div class="span2">
			<img src="<?php echo base_url();?>assets/img/<?php echo $value['gambar'];?>" alt="">
		</div>
		<div class="span6">
			<h5><?php echo $value['nm_produk'];?></h5>
			<p>
			<?php echo $value['deskripsi'];?>
			</p>
		</div>
		<div class="span4 alignR">
		<div class="form-horizontal qtyFrm">
		<h3> Rp. <?php echo $value['harga'];?></h3>
		<label class="checkbox">
			<input type="checkbox">  Adds product to compair
		</label><br>
		<form class="form-horizontal qtyFrm" action="<?php echo base_url ('customer/addcart');?>" method="post">
				<input type="hidden" name="id_produk" value="<?php echo $value['id_produk'];?>">
				<input type="hidden" name="produk" value="<?php echo $value['gambar'];?>">
				<input type="hidden" name="deskripsi" value="<?php echo $value['nm_produk'];?>">
				<input type="hidden" name="harga" value="<?php echo $value['harga'];?>">

					<div class="controls">
					<input type="hidden" class="span11" name="id_cart" class="span6" placeholder="Id">
					</div>
					<div class="controls">
					<input type="hidden" class="span11" name="jumlah" class="span6" value="1">
					</div>
					<div class="controls">
					  <input type="hidden" class="span11" name="warna" class="span6" value="<?php echo $value['warna'];?>">
				  </div>
				
		<div class="btn-group">
		  <button type="submit" class="defaultBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>
		  <a href="<?php echo base_url('customer/detprod/').$value['id_produk'];?>" class="shopBtn">VIEW</a>
		 </div>
			</form>
			</div>
		</div>
		</div>
	<hr class="soften">
		<?php endforeach; ?>
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
<a href="<?php echo base_url ('customer/kontak');?>">CONTACT</a><br>
<a href="#">SITEMAP</a><br>
<a href="#">LEGAL NOTICE</a><br>
<a href="#">TERMS AND CONDITIONS</a><br>
<a href="<?php echo base_url ('customer/tentang');?>">ABOUT US</a><br>
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