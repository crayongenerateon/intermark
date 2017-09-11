<!-- <div class="container ukms">
    <div class="row">
        <div class="col-md-12">
            <div class="produk">
                <h1 class="menu">Daftar Berita</h1><hr>
            </div>
        </div>

        <div class="col-xs-12 col-sm-10 col-sm-offset-1">

            <ul class="event-list">
                <?php foreach ($news as $row): ?>

                    <li>
                        <time datetime="2014-07-20">
                            <span class="days"><?php echo pretty_date($row['news_post_date'], 'd', FALSE) ?></span>
                            <span class="months"><?php echo pretty_date($row['news_post_date'], 'M', FALSE) ?></span>
                        </time>
                        <?php if ($row['news_image'] != NULL) { ?>
                            <img src="<?php echo $row['news_image'] ?>" />
                        <?php } ?>
                        <div class="info">
                            <h3 class="title"><a href="<?php echo news_url($row) ?>" > <?php echo character_limiter($row['news_title'], 40) ?></a></h3>
                            <p class="desc"><?php echo strip_tags(character_limiter($row['news_description'], 130)) ?></p>
                        </div>
                    </li>
                <?php endforeach ?>

            </ul>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div >
                <?php echo $this->pagination->create_links(); ?>
            </div>
        </div>
    </div> 
</div>
 -->


<section class="about-section" style="margin-top: 10px;">
  <div class="index-content">
    <div class="container">
      <a href="blog-ici.html">
        <div class="col-lg-4">
          <div class="card">
            <img src="<?php echo base_url() ?>media/templates/intermark/images/0.jpg" class="img-responsive" width="100%">
            <h4>Investment Strategy</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="<?php echo site_url('news/news_detail') ?>" class="blue-button">Read More</a>
          </div>
        </div>
      </a>
      <a href="blog-ici.html">
        <div class="col-lg-4">
          <div class="card">
            <img src="<?php echo base_url() ?>media/templates/intermark/images/1.jpg" class="img-responsive" width="100%">
            <h4>Investment Strategy</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="<?php echo site_url('news/news_detail') ?>" class="blue-button">Read More</a>
          </div>
        </div>
      </a>
      <a href="blog-ici.html">
        <div class="col-lg-4">
          <div class="card">
            <img src="<?php echo base_url() ?>media/templates/intermark/images/2.jpg" class="img-responsive" width="100%">
            <h4>Investment Strategy</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="<?php echo site_url('news/news_detail') ?>" class="blue-button">Read More</a>
          </div>
        </div>
      </a>

    </div>
  </div>

  <div class="index-content">
    <div class="container">
      <a href="blog-ici.html">
        <div class="col-lg-4">
          <div class="card">
            <img src="<?php echo base_url() ?>media/templates/intermark/images/3.jpg" class="img-responsive" width="100%">
            <h4>Investment Strategy</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="<?php echo site_url('news/news_detail') ?>" class="blue-button">Read More</a>
          </div>
        </div>
      </a>
      <a href="blog-ici.html">
        <div class="col-lg-4">
          <div class="card">
            <img src="<?php echo base_url() ?>media/templates/intermark/images/4.jpg" class="img-responsive" width="100%">
            <h4>Investment Strategy</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="<?php echo site_url('news/news_detail') ?>" class="blue-button">Read More</a>
          </div>
        </div>
      </a>
      <a href="blog-ici.html">
        <div class="col-lg-4">
          <div class="card">
            <img src="<?php echo base_url() ?>media/templates/intermark/images/5.jpg" class="img-responsive" width="100%">
            <h4>Investment Strategy</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="detail_news.php" class="blue-button">Read More</a>
          </div>
        </div>
      </a>

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