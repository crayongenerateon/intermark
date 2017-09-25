<section class="about-section" style="margin-top: 80px;">
  <center>
    <h1 class="title">NEWS & UPDATE</h1>
    <h5>“You are the creator for your own future.”</h5>
  </center>
  <div class="index-content">
    <div class="container">
      <?php foreach ($news as $row): ?>
        <a href="#">
          <div class="col-lg-4">
            <div class="card" style="margin-bottom: 20px;">
              <img src="<?php echo $row['news_image'] ?>" class="img-responsive" width="100%">
              <h4><?php echo $row['news_title'] ?></h4>
              <small><?php echo pretty_date($row['date_created'], 'l, d-m-Y', FALSE) ?></small>
              <p><?php echo strip_tags(character_limiter($row['news_description'], 50)) ?></p>
              <a href="<?php echo news_url($row) ?>" class="blue-button">Read More</a>
            </div>
          </div>
        </a>
      <?php endforeach ?>
    </div>
  </div>

  <div class="container">
    <div class="col-md-12">
      <div >
        <?php echo $this->pagination->create_links(); ?>
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