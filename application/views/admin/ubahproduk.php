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
             <h2> Ubah Produk</h2>
                <?php foreach($list->result_array() as $key){?>
        </div>
    </div>
        <div class="col-lg-4">
             <div class="page-header">  
                    <form role="form" class="form-horizontal" action="<?php echo base_url('index.php/admin/ubahprod'); ?>" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label> Id Produk </label>
                                        <input type="text" name="id_produk" value="<?php echo $key['id_produk']; ?>" class="form-control">
                                    </div>
                                     <div class="form-group">
                                         <label> Nama Produk </label>
                                         <input type="text" name="nm_produk" value="<?php echo $key['nm_produk']; ?>" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Warna </label>
                                         <input type="text" name="warna" value="<?php echo $key['warna']; ?>" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Id Kategori </label>
                                         <input type="text" name="id_kategori" value="<?php echo $key['id_kategori']; ?>" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Id Merk </label>
                                         <input type="text" name="id_merk" value="<?php echo $key['id_merk']; ?>" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Bahan </label>
                                         <input type="text" name="bahan" value="<?php echo $key['bahan']; ?>" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Deskripsi</label>
                                         <input type="text" name="deskripsi" value="<?php echo $key['deskripsi']; ?>" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Gambar </label>
                                         <input type="file" name="gambar" value="<?php echo $key['gambar']; ?>" class="form-control">
                                     </div>
<br/>                                    
                                     <input type="submit" value="Simpan" class="btn btn-success">   
                                     <a href="<?php echo base_url ('index.php/admin/produk');?>" class="btn btn-default "> Batal </a>                       
                                    <?php }?>
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
