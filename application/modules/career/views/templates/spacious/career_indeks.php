<!-- <div class="container ukms">
    <div class="row">
        <div class="col-md-12">
            <div class="produk">
                <h1 class="menu">Daftar Karir</h1><hr>
            </div>
        </div>

        <div class="col-xs-12 col-sm-10 col-sm-offset-1">

            <ul class="event-list">
                <?php foreach ($career as $row): ?>

                    <li>
                        <time datetime="2014-07-20">
                            <span class="days"><?php echo pretty_date($row['career_input_date'], 'd', FALSE) ?></span>
                            <span class="months"><?php echo pretty_date($row['career_input_date'], 'M', FALSE) ?></span>
                        </time>
                        <!-- <?php if ($row['news_image'] != NULL) { ?>
                            <img src="<?php echo $row['news_image'] ?>" />
                        <?php } ?> 
                        <div class="info">
                            <h3 class="title"><a href="<?php echo career_url($row) ?>" > <?php echo character_limiter($row['career_name'], 40) ?></a></h3>
                            <p class="desc"><?php echo strip_tags(character_limiter($row['career_description'], 130)) ?></p>
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
</div> -->

<section class="about-section" style="margin-top: 50px;">
 <div class="container">
   <div class="row">
 <?php foreach ($career as $row): ?>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
      <div class="offer offer-default">
        <div class="shape">
          <div class="shape-text">
            <a href="">
              <span class="glyphicon  glyphicon-eye-open"></span>  
            </a>              
          </div>
        </div>
        <div class="offer-content">
          <h2 class="lead">
           <?php echo $row['career_name']; ?>
         </h2>
         <p>
           <?php echo strip_tags(character_limiter($row['career_description'], 50)) ?>
         </p>
       </div>
     </div>
   </div>
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



<footer class="container-fluid text-center bg-lightgray">
  <div class="copyrights" style="margin-top:25px;">
    <p>Intermark Indonesia © 2017, All Rights Reserved
      <br>
      <span>Themes : Intermark</span></p>
    </div>
  </footer>