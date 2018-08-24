<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Shopping Cart</title>
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
				<a href="<?php echo base_url ('customer/');?>"> <span class="icon-home"></span> Home</a> 
				<a href="<?php echo base_url('customer/akun');?>"><span class="icon-user"></span> My Account</a> 
				<a href="<?php echo base_url ('customer/register');?>"><span class="icon-edit"></span> Free Register </a> 
				<a href="<?php echo base_url ('customer/kontak');?>"><span class="icon-envelope"></span> Contact us</a>
				<a href="<?php echo base_url ('customer/keranjang');?>"><span class="icon-shopping-cart"></span> Item <span class="badge badge-warning"> Rp. </span></a>
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
	<a class="logo" href="<?php echo base_url('customer/');?>"><span>Twitter Bootstrap ecommerce template</span> 
		<img src="<?php echo base_url();?>assets/fronted/assets/img/logo-bootstrap-shoping-cart.png" alt="bootstrap sexy shop">
		<a href="<?php echo base_url ('customer/keranjang');?>">
				
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
			  <li class="active"><a href="<?php echo base_url ('customer/');?>">Home	</a></li>
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
<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
	
		<?php foreach ($kat as $key => $kat) : ?>
		<li><a href="<?php echo base_url ('customer/prod');?>"><span class="icon-chevron-right"></span><?php echo $kat['nm_kategori'];?></a></li>
	<?php endforeach;?>

		<li style="border:0"> &nbsp;</li>
		<li> <a class="totalInCart" href="<?php echo base_url('customer/keranjang');?>"><strong>Total Amount  <span class="badge badge-warning pull-right" style="line-height:18px;">$448.42</span></strong></a></li>
	</ul>
</div>

			  <div class="well well-small alert alert-warning cntr">
				  <h2>50% Discount</h2>
				  <p> 
					 only valid for online order. <br><br><a class="defaultBtn" href="#">Click here </a>
				  </p>
			  </div>
			  <div class="well well-small" ><a href="#"><img src="assets/img/paypal.jpg" alt="payment method paypal"></a></div>
			
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
    <ul class="breadcrumb">
    <li><a href="<?php echo base_url('customer/');?>">Home</a> <span class="divider">/</span></li>
    <li><a href="<?php echo base_url('customer/prod');?>">Items</a> <span class="divider">/</span></li>
    <li class="active">Preview</li>
    </ul>	
	<div class="well well-small">
	<div class="row-fluid">
			<div class="span5">
			<div id="myCarousel" class="carousel slide cntr">
                <div class="carousel-inner">
                  <div class="item active">
                  <?php foreach ($data->result_array() as $key => $value) : ?>

                   <a href="#"> <img src="<?php echo base_url();?>assets/img/<?php echo $value['gambar'];?>" alt="" style="width:100%"></a>
                  </div>
                </div>
                <a class="left carousel-control" href="<?php echo base_url();?>assets/img/<?php echo $value['gambar'];?>" data-slide="prev">‹</a>
                <a class="right carousel-control" href="<?php echo base_url();?>assets/img/<?php echo $value['gambar'];?>" data-slide="next">›</a>
            </div>
			</div>
			<div class="span7">
				<h3><?php echo $value['nm_produk'];?> </h3>
				<hr class="soft"/>
				
				<form class="form-horizontal qtyFrm" action="<?php echo base_url ('customer/addcart');?>" method="post">
				<input type="hidden" name="id_produk" value="<?php echo $value['id_produk'];?>">
				<input type="hidden" name="produk" value="<?php echo $value['gambar'];?>">
				<input type="hidden" name="deskripsi" value="<?php echo $value['nm_produk'];?>">
				<input type="hidden" name="harga" value="<?php echo $value['harga'];?>">
					<div class="controls">
					<input type="hidden" class="span11" name="id_cart" class="span6" placeholder="Id">
				  </div>
				  <div class="control-group">
					<label class="control-label"><span>  Rp.  <?php echo $value['harga'];?></span></label>
					<div class="controls">
					<input type="number" class="span11" name="jumlah" min="1" max="100" class="span6" placeholder="Qty.">
					</div>
				  </div>
				
				  <div class="control-group">
					<label class="control-label"><span>Color</span></label>
					<div class="controls">
					  <select class="span11" name="warna">
						  <option><?php echo $value['warna'];?></option>
						  <option>Silver</option>
						  <option>Black</option>
						  <option>Coklat</option>
						  <option>White</option> 
						</select>
					</div>
				  </div>
				  <div class="control-group">
					<label class="control-label"><span>Bahan</span></label>
					<div class="controls">
					<select class="span11" name="bahan">
						  <option><?php echo $value['bahan'];?></option>
						  <option>Emas</option>
						  <option>Perak</option>
						  <option>Berlian</option>
						  <option>Emas dan Berlian</option> 
						</select>
					</div>
				  </div>
				  <h4><?php echo $value['stok'];?> items in stock</h4>
				  <p>
				  <button type="submit" class="shopBtn"><span class=" icon-shopping-cart"></span> Add to cart</button>
				</form>
			</div>
			</div>
			<?php endforeach; ?>
				<hr class="softn clr"/>


            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Product Details</a></li>
              <li class=""><a href="#profile" data-toggle="tab">Related Products </a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Acceseries <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#cat1" data-toggle="tab">Category one</a></li>
                  <li><a href="#cat2" data-toggle="tab">Category two</a></li>
                </ul>
              </li>
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
            <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table class="table table-striped">
				<tbody>
				<tr class="techSpecRow"><td class="techSpecTD1">Color : </td><td class="techSpecTD2"> <?php echo $value['warna'];?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Kategori : </td><td class="techSpecTD2"> <?php echo $value['id_kategori'];?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Merk : </td><td class="techSpecTD2"> <?php echo $value['id_merk'];?></td></tr>
				<tr class="techSpecRow"><td class="techSpecTD1">Deskripsi : </td><td class="techSpecTD2"> <?php echo $value['deskripsi'];?></td></tr>
				</tr>
				</tbody>
				</table>

				<p>CerrezStore adalah toko online yang menyediakan berbagai produk untuk menunjang aktivitas sehari-hari yang mencakup fashion,gadget,alat kosmetik,alat elektronik,hobi dan koleksi,fotografi,perlengkapan olahraga,otomotif,vitamin dan suplemen,perlengkapan rumah,makanan dan minuman,souvenir,dan pesta .
				</p>

			</div>
			<div class="tab-pane fade" id="profile">
			<div class="row-fluid">	  
			<div class="span2">
				<img src="<?php echo base_url();?>assets/img/<?php echo $value['gambar'];?>" alt="">
			</div>
			<div class="span6">
				<h5> <?php echo $value['nm_produk'];?> </h5>
				<p>
				<?php echo $value['deskripsi'];?>
				</p>
			</div>
			<div class="span4 alignR">
			<form class="form-horizontal qtyFrm">
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
		  <a href="<?php echo base_url('customer/detprod');?>" class="shopBtn">VIEW</a>
		 </div>
			</form>
			</div>
		</div>
			<hr class="soften"/>
			
				</div>
            </div>

</div>
</div>
</div> <!-- Body wrapper -->
<!-- 
Clients 
-->
<section class="our_client">
	<hr class="soften"/>
	<h4 class="title cntr"><span class="text">Manufactures</span></h4>
	<hr class="soften"/>
	<div class="row">
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo base_url(); ?>assets/fronted/assets/img/1.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo base_url(); ?>assets/fronted/assets/img/2.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo base_url(); ?>assets/fronted/assets/img/3.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo base_url(); ?>assets/fronted/assets/img/4.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo base_url(); ?>assets/fronted/assets/img/5.png"></a>
		</div>
		<div class="span2">
			<a href="#"><img alt="" src="<?php echo base_url(); ?>assets/fronted/assets/img/6.png"></a>
		</div>
	</div>
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