<section class="about-section" style="margin-top: 120px;">
 <div class="container">

  <div class="col-md-12">
    <div class="col-md-7">
      <h1 class="title">Do your best at every opportunity that you have</h1>
      <!-- <p class="subtitle">We appreciate all feedback we receive – positive and constructive - and love to hear what you think about our programmes and services. </p> -->
    </div>
  </div>

  <div class="row map-form">
    <div class="col-md-12">
      <div class="col-md-7">

        <?php if ($this->session->flashdata('incomplete')) { ?>
        <div class="alert alert-danger alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <?php echo $this->session->flashdata('incomplete') ?>
        </div>
        <?php } elseif ($this->session->flashdata('complete')) { ?>
        <div class="alert alert-success alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          Data diri anda telah kami simpan, silahkan tunggu balasan kami.
        </div>
        <?php }
        ?>
        <?php
        $div_input = array('class' => 'form-group col-md-6 col-sm-12 col-xs-12');
        $div_submit = array('class' => 'form-group col-md-4 col-md-offset-8');
        $div_textarea = array('class' => 'form-group col-md-12 col-sm-12 col-xs-12');
        $name_data = array('name' => 'name', 'class' => 'form-control', 'placeholder' => 'Full Name');
        $email_data = array('name' => 'email', 'class' => 'form-control', 'placeholder' => 'Email');
        $textarea_data = array('name' => 'message', 'class' => 'form-control', 'rows' => 15, 'placeholder' => 'Massage');
        $submit_data = array('class' => 'form-control btn btn-success', 'value' => 'Send Massage');
        echo form_contact(current_url(), '', $name_data, $email_data, $textarea_data, $submit_data, $div_input, $div_submit, $div_textarea)
        ?>
        
      </div>
      <div class="col-md-5">
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6501855780707!2d106.6873393142591!3d-6.309604063502476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e531ee63e259%3A0x10ca1514be4fe7a3!2sIntermark+Indonesia!5e0!3m2!1sid!2sid!4v1505190136645" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
       <h2>Contact Details</h2>
       <h3>Address</h3>
       <p><?php echo $address['contact_value'] ?></p>
       <div class="col-md-5 col-sm-6" style="padding-left:0px;">
        <h3>Telephone</h3>
        <p><?php echo $phone['contact_value'] ?></p><p></p>
        <h3>Social Media</h3>
        
        <ul class="social-nav">
          <li><a href="<?php echo $facebook['contact_value'] ?>" target="_blank" title="Facebook" rel="nofollow" class="facebook"><i class="ion ion-social-facebook"></i></a></li>
          <li><a href="<?php echo $twitter['contact_value'] ?>" target="_blank" title="Instagram" rel="nofollow" class="google"><i class="ion ion-social-instagram-outline"></i></a></li>       
        </ul>
      </div>
      <div class="col-md-5 col-sm-6" style="padding-left:0px;">
        <h3>Email</h3>
        <p><a href="mailto:info@intermarkindonesia.com"><i class="mdi mdi-email"></i><?php echo $email['contact_value'] ?></a></p>
      </div>
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
  </div>
</footer>