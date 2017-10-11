
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


$(document).ready(function () {
  $(".various").fancybox({
        type: "iframe", //<--added
        maxWidth: 800,
        maxHeight: 600,
        fitToView: false,
        width: '70%',
        height: '70%',
        autoSize: false,
        closeClick: false,
        openEffect: 'none',
        closeEffect: 'none'
      });
})


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


  $(window).load(function(){
    $('#onload').modal('show');
  });


  $('#nav').affix({
    offset: {
      top: $('#nav').offset().top
    }
  });

  $('#nav').affix({
    offset: {
      bottom: ($('footer').outerHeight(true) +
        $('.application').outerHeight(true)) +
      40
    }
  });




  