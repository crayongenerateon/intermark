<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('media/css/angular-multi-select.css') ?>">
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



 -->


 

<section class="about-section" style="margin-top: 20px">
  <div class="container">
    <div class="col-lg-12">
      <center>
       <div class="index-content">
        <div class="card">
          <img src="media/images/0.jpg" class="img-responsive" width="100%" style="height: 500px; min-height: 150px; overflow: hidden;">
          <h4>Investment Strategy</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <br>
        </div>
      </div>
    </center>


    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-6">
        <a href="http://www.youtube.com/watch?v=TdY3B2pg7Ko">
          <img class="img-responsive pass" src="media/images/0.jpg" />
        </a>
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6">
        <img class="img-responsive pass" src="media/images/1.jpg" />
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6">
        <img class="img-responsive pass" src="media/images/2.jpg" />
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6">
        <img class="img-responsive pass" src="media/images/3.jpg" />
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-6">
        <img class="img-responsive pass" src="media/images/4.jpg" />
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6">
        <img class="img-responsive pass" src="media/images/5.jpg" />
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6">
        <img class="img-responsive pass" src="media/images/footer2.png" />
      </div>
      <div class="col-md-3 col-sm-4 col-xs-6">
        <img class="img-responsive pass" src="media/images/train.png" />
      </div>
    </div>



  </div>
</div>
</section>












<footer class="container-fluid text-center bg-lightgray">
  <div class="copyrights" style="margin-top:25px;">
    <p>Intermark Indonesia © 2017, All Rights Reserved
      <br>
      <span>Themes : RumahCG</span></p>
    </div>
  </footer>
