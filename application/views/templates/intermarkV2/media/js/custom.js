
new WOW().init();

wow = new WOW(
{
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    )
wow.init();




$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
      openEffect: "none",
      closeEffect: "none"
    });
  });



  // // toggle class scroll 
  // $(window).scroll(function() {
  //   if($(this).scrollTop() > 50)
  //   {
  //     $('.navbar-trans').addClass('afterscroll');
  //   } else
  //   {
  //     $('.navbar-trans').removeClass('afterscroll');
  //   }  

  // });
  // 