<!-- <div class="col-sm-9 col-md-10 main">

    <h3 class="page-header">
        Sunting Contact
    </h3><hr>

    <?php echo form_open_multipart(current_url()) ?>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-4">
                <label>Nama Contact</label>
            </div>
            <div class="col-md-8">
                <input type="text" name="name" value="<?php echo $name['contact_value'] ?>" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>No. Telepon</label>
            </div>
            <div class="col-md-8">
                <input type="text" name="phone" value="<?php echo $phone['contact_value'] ?>" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Email</label>
            </div>
            <div class="col-md-8">
                <input type="text" name="email" value="<?php echo $email['contact_value'] ?>" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Alamat Contact</label>
            </div>
            <div class="col-md-8">
                <textarea name="address" rows="7" class="form-control"> <?php echo $address['contact_value'] ?></textarea>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Facebook</label>
            </div>
            <div class="col-md-8">
                <input type="text" name="facebook" value="<?php echo $facebook['contact_value'] ?>" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-4">
                <label>Twitter</label>
            </div>
            <div class="col-md-8">
                <input type="text" name="twitter" value="<?php echo $twitter['contact_value'] ?>" class="form-control">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" value="Simpan" class="btn btn-primary pull-right">
            </div>
        </div>
    </div>
    <?php echo form_close() ?>
    <div class="col-md-4">
        <div class="alert alert-info">
            Kolom tidak boleh kosong, Jika ingin di nonaktifkan silakan beri tanda ( - ) pada kolom yang tersedia.
        </div>
    </div>

</div>
 -->

 

<section class="about-section" style="margin-top: 20px;">
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
      <span>Themes : RumahCG</span></p>
    </div>
  </footer>