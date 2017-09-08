<link rel="stylesheet" type="text/css" href="<?php echo base_url('media/css/angular-multi-select.css') ?>">
<script type="text/javascript" src="<?php echo base_url('media/js/angular-multi-select.js') ?>"></script>
<link href="<?php echo base_url('/media/css/mediamanager.css'); ?>" rel="stylesheet">
<script src="<?php echo base_url('/media/js/mediamanager.js'); ?>"></script>

<div class="col-sm-9 col-md-10 main">
    <div class="row">
        <div class="col-md-8">
            <h3 class="page-header">
                Detail Berita
            </h3>
        </div>
        <div class="col-md-4">
            <span class=" pull-right">
                <a href="<?php echo site_url('gadmin/news') ?>" class="btn btn-info"><span class="ion-arrow-left-a"></span>&nbsp; Kembali</a> 
                <a href="<?php echo site_url('gadmin/news/edit/'.$news['news_id']) ?>" class="btn btn-warning"><span class="ion-edit"></span>&nbsp; Edit</a> 
            </span>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-2">
            <?php if(!empty($news['news_image'])){ ?>
            <img src="<?php echo upload_url($news['news_image']) ?>" class="img-responsive avatar">
            <?php }else{ ?>
            <img src="<?php echo base_url('media/image/missing-image.png') ?>" class="img-responsive avatar">
            <?php } ?>
        </div>
        <div class="col-md-10">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Judul Berita</td>
                        <td>:</td>
                        <td><?php echo $news['news_title'] ?></td>
                    </tr>
                    <tr>
                        <td>Deskripsi Singkat Berita</td>
                        <td>:</td>
                        <td><?php echo $news['news_description'] ?></td>
                    </tr>
                    <tr>
                        <td>Isi Berita</td>
                        <td>:</td>
                        <td><?php echo $news['news_content'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal input</td>
                        <td>:</td>
                        <td><?php echo pretty_date($news['date_created']) ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <br>
    <br>
    <h4>Foto</h4>
    <hr>
    <div class="row">
        <?php $no = 0 ?>
        <?php foreach ($image as $key): ?>

            <div class="col-md-3 imgs">

            <img src="<?php echo upload_url($key['news_image_path']) ?>" class="img img-responsive">
                <div class="img-info">

                    <div class="imgaction">
                        <a class="zoomin">
                            <i class="glyphicon glyphicon-zoom-in icon-white" title="zoom in"></i>
                            <input type="hidden" value="<?php echo upload_url($key['news_image_path'])?>" >
                        </a>
                        <a onclick="return confirm('Anda yakin akan menghapus?')" href="<?php echo site_url('/gadmin/news/delete_image/' . $key['news_image_id'] . '/' . $key['news_news_id']) ?>">
                            <i class="glyphicon glyphicon-remove icon-white" title="delete"></i>
                        </a>
                    </div>
                </div>
            </div>

            <?php $no++; ?>
        <?php endforeach ?>
    </div>

</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <p></p>
            </div>
            <div class="modal-body img_centre">

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var myApp = angular.module('myApp', [ 'multi-select' ]);

</script>



