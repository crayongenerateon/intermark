<!-- <div class="col-md-7 col-sm-12 col-xs-12">
    <div class="col-md-12">
        <div class="">
            <div class="tag">
                <h1><?php echo $posts['posts_title'] ?></h1>
                <div class="row">
                    <?php if ($posts['posts_image'] != NULL) { ?>
                        <div class="col-md-12">
                            <img src="<?php echo $posts['posts_image'] ?>" alt="Placeholder" class="img-responsive imageds">
                        </div>
                    <?php } ?>
                </div>
                <div class="row-fluid">
                    <h5>
                        <span class=""><?php echo pretty_date($posts['posts_published_date'], 'l, d-M-Y'), FALSE ?></span> - 
                        <span class="">Category: <a href=""><?php echo $posts['category_name'] ?></a> </span>
                    </h5>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="up-teks">
                            <p align="justify"><?php echo strip_tags($posts['posts_content']) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="col-md-5 col-sm-12 col-xs-12">
    <div class="row">
        <div class="col-md-12">
            <CENTER>
                <h3>POSTING LAINNYA</h3>
            </CENTER>
            <ul class="event-list">
                <?php foreach($posts_other as $row): ?>
                <li>
                    <time datetime="2014-07-20">
                        <span class="days"><?php echo pretty_date($row['posts_published_date'], 'd', FALSE) ?></span>
                        <span class="months"><?php echo pretty_date($row['posts_published_date'], 'M', FALSE) ?></span>
                        <span class="year"><?php echo pretty_date($row['posts_published_date'], 'Y', FALSE) ?></span>
                    </time>
                    <div class="info">
                        <h3 class="title"><a href="<?php echo posts_url($row); ?>"><?php echo $row['posts_title'] ?></a></h3>
                        <p class="desc"><?php echo strip_tags(character_limiter($row['posts_description'], 100)) ?></p>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div> -->

 <section class="about-section" style="margin-top: 80px">
    <div class="container">
      <div class="col-lg-12">
        <center>
         <div class="index-content">
          <div class="card">
            <!-- <img src="<?php echo $news['career_image'] ?>" class="img-responsive" width="100%" style="height: 500px; min-height: 150px; overflow: hidden;"> -->
            <br>
            <h4><?php echo $career['career_name'] ?></h4>
            <p><?php echo $career['career_description'] ?></p>
            <br>
          </div>
        </div>
      </center>

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
