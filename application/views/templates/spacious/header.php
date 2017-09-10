<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Intermark <?php echo isset($title) ? ' | ' . $title : null; ?></title>
  <link rel="icon" href="<?php echo base_url() ?>media/templates/intermark/images/ico/Nazih.png" type="icon">
  <!-- Bootstrap Core CSS -->
  <link href="<?php echo base_url() ?>media/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>media/css/ionicons.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>media/templates/intermark/css/font-awesome.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>media/templates/intermark/css/animate.min.css" rel="stylesheet" type="text/css">
  <!-- <link href="media/templates/intermark/css/material.indigo-pink.min.css" rel="stylesheet" type="text/css"> -->

  <!-- Custom CSS -->
  <link href="<?php echo base_url() ?>media/templates/intermark/css/custom.css" rel="stylesheet" type="text/css">

  <!-- Core JavaScript Files -->
  <script type="text/javascript" src="<?php echo base_url() ?>media/templates/intermark/js/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>media/js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>media/js/bootstrap.min.js"></script>

  <!-- Custom x JavaScript -->
  <!-- <script type="text/javascript" src="media/templates/intermark/js/material.min.js"></script> -->
  <script type="text/javascript" src="<?php echo base_url() ?>media/templates/intermark/js/wow.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>media/templates/intermark/js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url() ?>media/templates/intermark/js/custom.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
  <script src="https://apis.google.com/js/platform.js" async defer></script>

  <script>
    $(function() {

      $(".imgLiquidFill").imgLiquid({
        fill: true,
        horizontalAlign: "center",
        verticalAlign: "center"
      });
    });
  </script>

  <div id="fb-root"></div>
</head>

<body>


  <!--bg img  -->
  <div class="container-fluid main">
    <nav class="top-bar">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-xs-5 hidden-xs">
            <ul class="tools">     
              <li>
                <a class="" href="#"> <small> +123 4567 89108088</small> </a>
              </li>
            <!-- <li>
               <a class="" href="#"><i class="fa fa-envelope" aria-hidden="true"></i><small> intermark@gmail.com</small></a>
             </li> -->
           </ul>
         </div>
         <div class="col-sm-4 text-center">
         </div>
         <?php echo $this->template->load('menu'); ?>
       </div>
     </div>
   </nav>   <!--TOP-NAVBAR-END-->
 </div>

 <!--====================== NAVBAR MENU START===================-->
 <nav class="navbar navbar-default">
 <div class="container">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>                        
    </button>
    <a class="navbar-brand" href="#"><img src="<?php echo base_url() ?>media/templates/intermark/images/ico/Nazih.png" class=" hidden-xs" width="20%" style="margin-top: -16px;"></a>
     <a class="navbar-brand" href="#"><img src="<?php echo base_url() ?>media/templates/intermark/images/ico/Nazih.png" class=" hidden-lg hidden-md hidden-sm" width="30%" style="margin-top: -14px;"></a>
  </div>
  <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown">Associate Tower<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="ion ion-location"></i> Lokasi</a></li>
          <li><a href="#"><i class="ion ion-cash"></i> Harga</a></li>
          <li><a href="#"><i class="ion ion-image"></i> Galeri</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown">Tuscany Residence<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="ion ion-location"></i> Lokasi</a></li>
          <li><a href="#"><i class="ion ion-cash"></i> Harga</a></li>
          <li><a href="#"><i class="ion ion-image"></i> Galeri</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown">Swiss-Belhotel<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="ion ion-location"></i> Lokasi</a></li>
          <li><a href="#"><i class="ion ion-cash"></i> Harga</a></li>
          <li><a href="#"><i class="ion ion-image"></i> Galeri</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown">Merdeka Assembly Hall<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="ion ion-location"></i> Lokasi</a></li>
          <li><a href="#"><i class="ion ion-cash"></i> Harga</a></li>
          <li><a href="#"><i class="ion ion-image"></i> Galeri</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="" class="dropdown-toggle" data-toggle="dropdown">Shop Hause & Commercial<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="ion ion-location"></i> Lokasi</a></li>
          <li><a href="#"><i class="ion ion-cash"></i> Harga</a></li>
          <li><a href="#"><i class="ion ion-image"></i> Galeri</a></li>
        </ul>
      </li>     
    </ul>
  </div>
</div>
</nav>



