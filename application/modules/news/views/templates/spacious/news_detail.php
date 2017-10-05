<section class="about-section" style="margin-top: 120px">
    <div class="container">
      <div class="col-lg-12">
        <center>
         <div class="index-content">
          <div class="card" style="text-align: left;">
            <img src="<?php echo $news['news_image'] ?>" class="img-responsive" width="100%" style="width: auto; height: auto; overflow: hidden;">
            <h4><?php echo $news['news_title'] ?> <small class="text-danger pull-right"><i><?php echo pretty_date($news['date_created'], 'l, d-m-Y', FALSE) ?></i></small></h4>
            <p><?php echo $news['news_content'] ?></p>
            <br>
          </div>
        </div>
      </center>

      <div class="row">
      <?php $no = 0 ?>
      <?php foreach ($image as $row):?>
        <div class="col-md-3 col-sm-4 col-xs-6">
          <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title="This is my title" data-caption="Some lovely red flowers" data-image="<?php echo upload_url($row['news_image_path']) ?>" data-target="#image-gallery">
          <img class="img-responsive pass" src="<?php echo upload_url($row['news_image_path']) ?>" />
        </a>
        </div>
      <?php $no++; ?>
      <?php endforeach ?>
      </div>



    </div>
  </div>
</section>




<footer class="container-fluid bg-lightgray">
  <div class="copyrights" style="margin-top:25px;">
    <div class="col-md-6">
      <p>Intermark Indonesia © 2017, All Rights Reserved<br/><br>
        <small>The informations displayed about this property compromises a property advertisement
        Please contact the selling agent or developer directly to obtain any information, which may be available under terms of the application law</small>
        <br>
      </p>
    </div>
    <div class="col-md-5 col-md-offset-1">
      <div class="col-md-4 col-xs-12">
        <img src="<?php echo base_url() ?>media/templates/intermark/images/support/1.jpg" class=" hidden-xs" width="100%">
      </div>
      <div class="col-md-4 col-xs-12">
        <img src="<?php echo base_url() ?>media/templates/intermark/images/support/2.jpg" class=" hidden-xs" width="100%">
      </div>
      <div class="col-md-4 col-xs-12">
        <img src="<?php echo base_url() ?>media/templates/intermark/images/support/3.jpg" class=" hidden-xs" width="100%">
      </div>
    </div>
  </div>
</footer>




<div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="image-gallery-title"></h4>
            </div>
            <div class="modal-body">
                <img id="image-gallery-image" class="img-responsive" src="<?php echo upload_url($row['news_image_path']) ?>">
            </div>
            <div class="modal-footer">

                <div class="col-md-2">
                    <button type="button" class="btn btn-primary" id="show-previous-image">Previous</button>
                </div>

                <div class="col-md-8 text-justify" id="image-gallery-caption">
                    This text will be overwritten by jQuery
                </div>

                <div class="col-md-2">
                    <button type="button" id="show-next-image" class="btn btn-default">Next</button>
                </div>
            </div>
        </div>
    </div>
</div>