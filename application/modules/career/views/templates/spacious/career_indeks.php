  <section class="about-section" style="margin-top: 120px;">
   <div class="container">
     <div class="row">
       <?php foreach ($career as $row): ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
          <div class="offer offer-default">
            <div class="shape">
              <div class="shape-text">
                <a href="<?php echo career_url($row) ?>">
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