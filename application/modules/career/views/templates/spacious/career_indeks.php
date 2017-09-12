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
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
      <div class="offer offer-danger">
        <div class="shape">
          <div class="shape-text">
            <a href="">
              <span class="glyphicon  glyphicon-eye-open"></span>  
            </a>              
          </div>
        </div>
        <div class="offer-content">
          <h2 class="lead">
           Senior Creative Writter
         </h2>
         <p>
           SCW
         </p>
       </div>
     </div>
   </div>
   <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <div class="offer offer-info">
      <div class="shape">
        <div class="shape-text">
         <a href="">
          <span class="glyphicon  glyphicon-eye-open"></span>  
        </a>             
      </div>
    </div>
    <div class="offer-content">
      <h2 class="lead">
       Web Developer
     </h2>
     <p>
      (Dot Net)
    </p>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
  <div class="offer offer-radius offer-primary">
    <div class="shape">
      <div class="shape-text">
       <a href="">
        <span class="glyphicon  glyphicon-eye-open"></span>  
      </a>             
    </div>
  </div>
  <div class="offer-content">
    <h2 class="lead">
      Release Engineer
    </h2>
    <p>
      RE
    </p>
  </div>
</div>
</div>
</div>

<div class="row">
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
          Mobile Application Development
        </h2>
        <p>
          (Android, IOS, Blackberry)
        </p>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <div class="offer offer-warning">
      <div class="shape">
        <div class="shape-text">
          <a href="">
            <span class="glyphicon  glyphicon-eye-open"></span>  
          </a>           
        </div>
      </div>
      <div class="offer-content">
        <h2 class="lead">
          Web/Interactive/Flash Designer
        </h2>
        <p>
          Web
        </p>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
    <div class="offer offer-success">
      <div class="shape">
        <div class="shape-text">
         <a href="">
          <span class="glyphicon  glyphicon-eye-open"></span>  
        </a>            
      </div>
    </div>
    <div class="offer-content">
      <h2 class="lead">
       Senior Marketing Communication
     </h2>
     <p>
      SMC
    </p>
  </div>
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