<section class="about-section" style="margin-top: 80px;">
 <div class="container">
  <div class="row">
    <div class="col-md-7">
      <h1 class="title">Do your best at every opportunity that you have</h1>
      <!-- <p class="subtitle">We appreciate all feedback we receive – positive and constructive - and love to hear what you think about our programmes and services. </p> -->
    </div>
  </div>
  <div class="row map-form">
    <div class="col-md-7">
      <form class="form">
        <div class="form__row">
          <div class="ph1 ph-small ph-big" data-input="name">Full Name</div>
          <input type="text" class="form__field" name="name" id="name" required>
        </div>
        
        <div class="form__row">
          <div class="ph2 ph-small ph-big" data-input="email">Email Adress</div>
          <input type="email" class="form__field" name="email" id="email" required>
        </div>
        
        <div class="form__row">
          <label class="form__title">Message</label>
          <textarea class="form__message" name="text" placeholder="Enter your message for us here. We will get back to you within 2 business days." required></textarea>
        </div>
        
        <input class="form__submit" type="submit" value="Send Message">
      </form>
    </div>
    <div class="col-md-5">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6501855780707!2d106.6873393142591!3d-6.309604063502476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e531ee63e259%3A0x10ca1514be4fe7a3!2sIntermark+Indonesia!5e0!3m2!1sid!2sid!4v1505190136645" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
     <h2>Contact Details</h2>
     <h3>Address</h3>
     <p><?php echo $address['contact_value'] ?></p>
     <div class="col-md-5 col-sm-6" style="padding-left:0px;">
      <h3>Telephone</h3>
      <p><?php echo $phone['contact_value'] ?></p>
    </div>
    <div class="col-md-5 col-sm-6" style="padding-left:0px;">
      <h3>Email</h3>
      <p><?php echo $email['contact_value'] ?></p>
    </div>
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