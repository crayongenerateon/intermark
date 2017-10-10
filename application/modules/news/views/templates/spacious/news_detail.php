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


        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
          <div class='list-group gallery'>
            <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo upload_url($row['news_image_path']) ?>">
              <img class="img-responsive" alt="" src="<?php echo upload_url($row['news_image_path']) ?>" />
              <div class='text-right'>
                <small class='text-muted'>Image Title</small>
              </div> <!-- text-right / end -->
            </a>
          </div> <!-- col-6 / end -->
        </div>

          <?php $no++; ?>
        <?php endforeach ?>
      </div>

      <script type="text/javascript">
        $(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
      openEffect: "none",
      closeEffect: "none"
    });
  });


</script>

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




