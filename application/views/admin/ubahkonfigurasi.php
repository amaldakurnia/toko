<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Konfigurasi Web </title>
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
             <h2> Ubah Konfigurasi</h2>
                <?php foreach($list->result_array() as $key) : ?>
        </div>
    </div>
        <div class="col-lg-4">
             <div class="page-header">  
                    <form role="form" class="form-horizontal" action="<?php echo base_url('index.php/admin/ubahkonfig'); ?>" method="post">
                                    <div class="form-group">
                                        <label> Id Konfigurasi </label>
                                        <input type="text" name="id_konfig" value="<?php echo $key['id_konfig']; ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                         <label> Nama Website </label>
                                         <input type="text" name="nama" value="<?php echo $key['nama']; ?>" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Deskripsi </label>
                                         <input type="text" name="deskripsi" value="<?php echo $key['deskripsi']; ?>" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Email </label>
                                         <input type="text" name="email" value="<?php echo $key['email']; ?>" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Telepon </label>
                                         <input type="text" name="tlp" value="<?php echo $key['tlp']; ?>" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Facebook </label>
                                         <input type="text" name="share1" value="<?php echo $key['share1']; ?>" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Twitter </label>
                                         <input type="text" name="share2" value="<?php echo $key['share2']; ?>" class="form-control">
                                     </div>
                                     <div class="form-group">
                                         <label> Instagram </label>
                                         <input type="text" name="share3" value="<?php echo $key['share3']; ?>" class="form-control">
                                     </div>
<br/>                                    <input type="submit" value="Simpan" class="btn btn-success">   
                                         <a href="<?php echo base_url ('index.php/admin/konfigweb');?>" class="btn btn-default "> Batal </a>                    
                                    <?php endforeach;?>
                                       </form>
                                 </div>               
                            </div>


     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php echo base_url ();?>assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php echo base_url ();?>assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php echo base_url ();?>assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php echo base_url ();?>assets/js/custom.js"></script>
   
</body>
</html>
