<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="10000" id="bs-carousel">
  <!-- Overlay -->
  <!-- <div class="overlay"></div> -->

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
    <li data-target="#bs-carousel" data-slide-to="3"></li>
    <li data-target="#bs-carousel" data-slide-to="4"></li>
    <li data-target="#bs-carousel" data-slide-to="5"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
          <h1>Introduction</h1>        
          <a class="various fancybox" href="https://www.youtube.com/embed/Q6ZnKIbvXrc?ecver=2?autoplay=1" width="auto" height="auto" style="width:100% !important; height:auto !important"><strong>Learn more</strong></a>
        </hgroup>
      </div>

    </div>


    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">        
        <hgroup>
          <h1>Merdeka Assembly Hall</h1>        
          <a class="various fancybox" href="https://www.youtube.com/embed/Q6ZnKIbvXrc?ecver=2?autoplay=1" width="auto" height="auto" style="width:100% !important; height:auto !important"><strong>Learn more</strong></a>
        </hgroup>       
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">        
        <hgroup>
          <h1>Swiss-BelHotel</h1>        
          <a class="various fancybox" href="https://www.youtube.com/embed/Q6ZnKIbvXrc?ecver=2?autoplay=1" width="auto" height="auto" style="width:100% !important; height:auto !important"><strong>Learn more</strong></a>
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-4"></div>
      <div class="hero">        
        <hgroup>
          <h1>Cafe Resto</h1>        
          <a class="various fancybox" href="https://www.youtube.com/embed/Q6ZnKIbvXrc?ecver=2?autoplay=1" width="auto" height="auto" style="width:100% !important; height:auto !important"><strong>Learn more</strong></a>
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-5"></div>
      <div class="hero">        
        <hgroup>
          <h1>Tuscany reidence</h1>        
          <a class="various fancybox" href="https://www.youtube.com/embed/Q6ZnKIbvXrc?ecver=2?autoplay=1" width="auto" height="auto" style="width:100% !important; height:auto !important"><strong>Learn more</strong></a>
        </hgroup>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-6"></div>
      <div class="hero">        
        <hgroup>
          <h1>Associate Tower</h1>        
          <a class="various fancybox" href="https://www.youtube.com/embed/Q6ZnKIbvXrc?ecver=2?autoplay=1" width="auto" height="auto" style="width:100% !important; height:auto !important"><strong>Learn more</strong></a>
        </hgroup>       
      </div>
    </div>

  </div> 
</div>


<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Intermark</h4>
      </div>
      <div class="modal-body">
       <div style="position:relative;height:0;padding-bottom:58.29%"><iframe src="https://www.youtube.com/embed/Q6ZnKIbvXrc?ecver=2" style="position:absolute;width:100%;height:100%;left:0" width="618" height="360" frameborder="0" allowfullscreen></iframe></div>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div> -->

<?php if ($favicon['setting_value'] != '-'): ?>
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">

    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
     <!--    <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title"><i class="fa fa-exclamation-circle"></i>Your title goes here</h4>
        </div> -->
        <div class="modal-body">
          <img src="<?php echo favicon()?>" class="img-responsive" width="100%">
        </div>
 <!--     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
    </div> -->
  </div>

</div>
</div>
<?php endif ?>

