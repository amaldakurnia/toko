<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Userku</title>
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
                             <h2> Data Admin </h2>
                            <a href="<?php echo base_url('index.php/admin/admin'); ?>"></a>
                        </div>
                        </div>
                        <div class="panel-body">
                        <a href="<?php echo base_url ('index.php/admin/saveadm');?>" class="btn btn-success ">Tambah</a>
                        </button>
                        <br>
                        <br>
                            <div class="table-responsive table-bordered">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id Admin</th>
                                            <th>Email</th>
                                            <th>Password</th>
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
                                        <?php echo $a['email']; ?>
                                        </td>
                                        <td>
                                        <?php echo $a['password']; ?>
                                        </td>
                                        <td align="center">
                                        <a href="<?php echo base_url ('index.php/admin/editadm/').$a['id_admin'];?>" class="btn btn-primary ">Edit</a> | 
                                        <a href="<?php echo base_url ('index.php/admin/hapadm/').$a['id_admin'];?>" class="btn btn-danger ">Delete</a>
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


    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>