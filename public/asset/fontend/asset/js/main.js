$(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop()>425)
    {   
      $('.sc-fixed-nav').css('transform', 'scale(1)');
    }
    else
    { 
      $('.sc-fixed-nav').css('transform', 'scale(0)');
    }
  })
});
