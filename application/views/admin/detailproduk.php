<div class="row">
 <div class="col-md-12">
<div class="panel panel-default">
                        <div class="panel-heading">
                             <h2> Detail Produk </h2>
                        </div>
                        <br>

                       <?php foreach ($data->result_array() as $key => $value) : ?>

                        <div>
                        <img src="<?php echo base_url(); ?>assets/img/<?php echo $value['gambar']; ?>" class="image img-responsive"/>
                        </div>
                        <?php endforeach; ?>

</div>
<a href="<?php echo base_url ('index.php/admin/produk');?>" class="btn btn-default "> Kembali </a>
</div>
</div>

                       