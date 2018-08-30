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
                    <div class="table-responsive table-bordered">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id Halaman</th>
                                            <th>Id Menu</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                <?php if (!empty ($list)): ?>
                                    <?php foreach ($list as $key=>$a) : ?>
                                        <tr>
                                        <td>
                                        <?php echo $key+1 ?>
                                        </td>
                                        <td>
                                        <?php echo $a['id_menu']; ?>
                                        </td>
                                        <td>
                                        <?php echo $a['judul_halaman']; ?>
                                        </td>
                                        <td>
                                        <?php echo $a['deskripsi']; ?>
                                        </td>
                                        <td align="center">
                                        <a href="<?php echo base_url ('index.php/admin/edithal/').$a['id_halaman'];?>" class="btn btn-primary ">Edit</a>
                                        </td>
                                        </tr>
                                    <?php endforeach ?>
                                <?php else : ?>
                                    <tr>
                                    <td colspan="3">Data Kosong</td>
                                    </tr>
                                <?php endif ?>
                                </tbody>
                            </table>
                                </div>
            
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

