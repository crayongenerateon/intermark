<section class="about-section" style="margin-top: 120px;">
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
              <p><?php echo strip_tags(character_limiter($row['news_description'], 50)) ?> <small class="text-danger"><i><?php echo pretty_date($row['date_created'], 'l, d-m-Y', FALSE) ?></i></small></p>
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
  </div>
</footer>