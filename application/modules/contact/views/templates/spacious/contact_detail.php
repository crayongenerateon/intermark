<!-- <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="col-md-12">
            <center>
                <h2><?php echo $name['contact_value'] ?></h2>
            </center>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <center>
                <h3><?php echo $phone['contact_value'] ?></h3>
            </center>
        </div>
    </div>
    <hr>
    <div class="row">
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
        $name_data = array('name' => 'name', 'class' => 'form-control', 'placeholder' => 'Nama Lengkap');
        $email_data = array('name' => 'email', 'class' => 'form-control', 'placeholder' => 'Email');
        $textarea_data = array('name' => 'message', 'class' => 'form-control', 'rows' => 15, 'placeholder' => 'Pesan');
        $submit_data = array('class' => 'form-control btn btn-default', 'value' => 'Kirim');
        echo form_contact(current_url(), '', $name_data, $email_data, $textarea_data, $submit_data, $div_input, $div_submit, $div_textarea)
        ?>
    </div>
    <div class="row">
        <div class="col-md-12">
            <center>
                <h3><?php echo $address['contact_value'] ?></h3>
            </center>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <center>
                <h3><?php echo $email['contact_value'] ?></h3>
            </center>
        </div>
    </div>
</div>

 -->

 

<section class="about-section" style="margin-top: 80px;">
 <div class="container">
  <div class="row">
      <div class="col-md-7">
        <h1 class="title">Get in touch with us.</h1>
        <p class="subtitle">We appreciate all feedback we receive – positive and constructive - and love to hear what you think about our programmes and services. </p>
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
                <div class="ph2 ph-small ph-big" data-input="phone">Phone Number with Country Code</div>
                <input type="text" class="form__field" name="phone" id="phone" required>
              </div>
              
              <div class="form__row">
                <label class="form__title" for="job-function">Subject</label>
                <select class="form__field form__field--select" name="job-function" required>
                  <option value="" selected="selected">Select a Subject</option> 
                <option value="op1">Subject 1</option>
                  <option value="op2">Subject 2</option>
                  <option value="op3">Subject 3</option>
                  <option value="op4">Subject 4</option>
                </select>
              </div>
              
              <div class="form__row">
                <label class="form__title">Message</label>
                <textarea class="form__message" name="text" placeholder="Enter your message for us here. We will get back to you within 2 business days." required></textarea>
              </div>
              
              <input class="form__submit" type="submit" value="Send Message">
            </form>
          </div>
      <div class="col-md-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10119.185074069741!2d29.031845602028582!3d41.05911758161741!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6477d93f7badc778!2sTRT+World!5e0!3m2!1str!2str!4v1496302367803" width="100%" height="320" frameborder="0" style="border:0" allowfullscreen></iframe>
          <h2>Contact Details</h2>
          <h3>Address</h3>
          <p>TRT World Headquarters Ahmet Adnan Saygun Street No:83<br>
          34347 Ulus, Besiktas<br>
            İstanbul / TURKEY</p>
            <div class="col-md-5 col-sm-6" style="padding-left:0px;">
                <h3>Telephone</h3>
                <p>+90 (212) 326 3000<br>
                +90 (212) 403 4600</p>
            </div>
            <div class="col-md-5 col-sm-6" style="padding-left:0px;">
                <h3>Email</h3>
                <p>enquiry@trtworld.com<br>
                pr@trtworld.com</p>
            </div>
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