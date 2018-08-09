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
<div class="panel panel-default">
                        <div class="panel-heading">
                             <h2> Data Order </h2>
                            <a href="<?php echo base_url('index.php/admin/order'); ?>"></a>
                        </div>
                        </div>
                        <div class="panel-body">
                        <a href="<?php echo base_url ('index.php/admin/saveord');?>" class="btn btn-success ">Tambah</a>
                        </button>
                        <br><br>
                            <div class="table-responsive table-bordered">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id Order</th>
                                            <th>Id Customer</th>
                                            <th>Tanggal Order</th>
                                            <th>Total</th>
                                            <th>Keterangan</th>
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
                                        <?php echo $a['id_customer']; ?>
                                        </td>
                                        <td>
                                        <?php echo $a['tgl_order']; ?>
                                        </td>
                                        <td>
                                        <?php echo $a['total']; ?>
                                        </td>
                                        <td>
                                        <?php echo $a['ket']; ?>
                                        </td>
                                        <td align="center">
                                        <a href="<?php echo base_url ('index.php/admin/editord/').$a['kode_order'];?>" class="btn btn-primary ">Edit</a> | 
                                        <a href="<?php echo base_url ('index.php/admin/hapord/').$a['kode_order'];?>" class="btn btn-danger ">Delete</a>
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
                            </div>
                 <!-- /. ROW  -->
                 <hr />
     <!-- /. WRAPPER  -->
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
