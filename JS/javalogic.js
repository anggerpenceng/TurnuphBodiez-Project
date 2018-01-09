//1
$(document).ready(function(){
  $('.loding').css('display','none');
$(window).width(function() {
  if ($(this).width() < 2561 && $(this).width() > 1922) {
  var start = 0;
  var change = ('nav');
  var change2 = ('nav ul a');
  $(document).scroll(function(){
      start = $(this).scrollTop();
      if(start > 600){
          $(change).css('background-color','rgba(0,0,0,0.7)');
          $(change).css('padding-top','1%');
          $(change2).css('font-size','2.5vmin');
          $('nav img').css('width','25%');
          $('nav img').css('margin-top','-0.5%');
      }
      else if(start < 700){
          $(change).css('background-color','transparent');
          $(change).css('padding-top','2%');
          $(change2).css('font-size','3vmin');
          $('nav img').css('width','30%');
          $('nav img').css('margin-top','0%');
      }
    });
    //click on button 1
    $('#cli1').click(function() {
      $('#img1').css('display','block');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 2
    $('#cli2').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','block');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 3
    $('#cli3').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','block');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 4
    $('#cli4').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','block');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 5
    $('#cli5').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','block');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 6
    $('#cli6').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','block');
      $('#img7').css('display','none');
    });
    //click on button 7
    $('#cli7').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','block');
    });
}
//new
  else if ($(this).width() < 1921 && $(this).width() > 1442) {
    var start = 0;
    var change = ('nav');
    var change2 = ('nav ul a');
    $(document).scroll(function(){
        start = $(this).scrollTop();
        if(start > 600){
            $(change).css('background-color','rgba(0,0,0,0.7)');
            $(change).css('padding-top','1%');
            $(change2).css('font-size','1.5vmin');
            $('nav img').css('width','22%');
            $('nav img').css('margin-top','-0.5%');
        }
        else if(start < 700){
            $(change).css('background-color','transparent');
            $(change).css('padding-top','2%');
            $(change2).css('font-size','1.5vmin');
            $('nav img').css('width','25%');
            $('nav img').css('margin-top','0%');
        }
    });
    //click on button 1
    $('#cli1').click(function() {
      $('#img1').css('display','block');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 2
    $('#cli2').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','block');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 3
    $('#cli3').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','block');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 4
    $('#cli4').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','block');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 5
    $('#cli5').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','block');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 6
    $('#cli6').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','block');
      $('#img7').css('display','none');
    });
    //click on button 7
    $('#cli7').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','block');
    });
  }
  else if ($(this).width() < 1441 && $(this).width() > 1026) {
    var start = 0;
    var change = ('nav');
    var change2 = ('nav ul a');
    $(document).scroll(function(){
        start = $(this).scrollTop();
        if(start > 600){
            $(change).css('background-color','rgba(0,0,0,0.7)');
            $(change).css('padding-top','1%');
            $(change2).css('font-size','15px');
            $('nav img').css({"width":"28%"});
            $('nav img').css('margin-top','-0.5%');
        }
        else if(start < 700){
            $(change).css('background-color','transparent');
            $(change).css('padding-top','2%');
            $(change2).css('font-size','16px');
            $('nav img').css('width','33%');
            $('nav img').css('margin-top','0%');
        }
    });
    //click on button 1
    $('#cli1').click(function() {
      $('#img1').css('display','block');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 2
    $('#cli2').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','block');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 3
    $('#cli3').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','block');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 4
    $('#cli4').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','block');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 5
    $('#cli5').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','block');
      $('#img6').css('display','none');
      $('#img7').css('display','none');
    });
    //click on button 6
    $('#cli6').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','block');
      $('#img7').css('display','none');
    });
    //click on button 7
    $('#cli7').click(function() {
      $('#img1').css('display','none');
      $('#img2').css('display','none');
      $('#img3').css('display','none');
      $('#img4').css('display','none');
      $('#img5').css('display','none');
      $('#img6').css('display','none');
      $('#img7').css('display','block');
    });
  }
    else if ($(this).width() < 1025 && $(this).width() > 770) {
      var start = 0;
      var change = ('nav');
      var change2 = ('nav ul a');
      $(document).scroll(function(){
          start = $(this).scrollTop();
          if(start > 600){
              $(change).css('background-color','rgba(0,0,0,0.7)');
              $(change).css('padding-top','0.5%');
              $(change2).css('font-size','1.1vmax');
              $('nav img').css({"width":"25%"});
              $('nav img').css('margin-top','-0.5%');
          }
          else if(start < 700){
              $(change).css('background-color','transparent');
              $(change).css('padding-top','2%');
              $(change2).css('font-size','1.1vmax');
              $('nav img').css('width','27%');
              $('nav img').css('margin-top','0%');
          }
      });
      //click on button 1
      $('#cli1').click(function() {
        $('#img1').css('display','block');
        $('#img2').css('display','none');
        $('#img3').css('display','none');
        $('#img4').css('display','none');
        $('#img5').css('display','none');
        $('#img6').css('display','none');
        $('#img7').css('display','none');
      });
      //click on button 2
      $('#cli2').click(function() {
        $('#img1').css('display','none');
        $('#img2').css('display','block');
        $('#img3').css('display','none');
        $('#img4').css('display','none');
        $('#img5').css('display','none');
        $('#img6').css('display','none');
        $('#img7').css('display','none');
      });
      //click on button 3
      $('#cli3').click(function() {
        $('#img1').css('display','none');
        $('#img2').css('display','none');
        $('#img3').css('display','block');
        $('#img4').css('display','none');
        $('#img5').css('display','none');
        $('#img6').css('display','none');
        $('#img7').css('display','none');
      });
      //click on button 4
      $('#cli4').click(function() {
        $('#img1').css('display','none');
        $('#img2').css('display','none');
        $('#img3').css('display','none');
        $('#img4').css('display','block');
        $('#img5').css('display','none');
        $('#img6').css('display','none');
        $('#img7').css('display','none');
      });
      //click on button 5
      $('#cli5').click(function() {
        $('#img1').css('display','none');
        $('#img2').css('display','none');
        $('#img3').css('display','none');
        $('#img4').css('display','none');
        $('#img5').css('display','block');
        $('#img6').css('display','none');
        $('#img7').css('display','none');
      });
      //click on button 6
      $('#cli6').click(function() {
        $('#img1').css('display','none');
        $('#img2').css('display','none');
        $('#img3').css('display','none');
        $('#img4').css('display','none');
        $('#img5').css('display','none');
        $('#img6').css('display','block');
        $('#img7').css('display','none');
      });
      //click on button 7
      $('#cli7').click(function() {
        $('#img1').css('display','none');
        $('#img2').css('display','none');
        $('#img3').css('display','none');
        $('#img4').css('display','none');
        $('#img5').css('display','none');
        $('#img6').css('display','none');
        $('#img7').css('display','block');
      });
    }
    else if ($(this).width() < 769) {
      //click on button 1
      $('#cli1').click(function() {
        $('#img1').css('display','block');
        $('#img2').css('display','none');
        $('#img3').css('display','none');
        $('#img4').css('display','none');
        $('#img5').css('display','none');
        $('#img6').css('display','none');
        $('#img7').css('display','none');
      });
      //click on button 2
      $('#cli2').click(function() {
        $('#img1').css('display','none');
        $('#img2').css('display','block');
        $('#img3').css('display','none');
        $('#img4').css('display','none');
        $('#img5').css('display','none');
        $('#img6').css('display','none');
        $('#img7').css('display','none');
      });
      //click on button 3
      $('#cli3').click(function() {
        $('#img1').css('display','none');
        $('#img2').css('display','none');
        $('#img3').css('display','block');
        $('#img4').css('display','none');
        $('#img5').css('display','none');
        $('#img6').css('display','none');
        $('#img7').css('display','none');
      });
      //click on button 4
      $('#cli4').click(function() {
        $('#img1').css('display','none');
        $('#img2').css('display','none');
        $('#img3').css('display','none');
        $('#img4').css('display','block');
        $('#img5').css('display','none');
        $('#img6').css('display','none');
        $('#img7').css('display','none');
      });
      //click on button 5
      $('#cli5').click(function() {
        $('#img1').css('display','none');
        $('#img2').css('display','none');
        $('#img3').css('display','none');
        $('#img4').css('display','none');
        $('#img5').css('display','block');
        $('#img6').css('display','none');
        $('#img7').css('display','none');
      });
      //click on button 6
      $('#cli6').click(function() {
        $('#img1').css('display','none');
        $('#img2').css('display','none');
        $('#img3').css('display','none');
        $('#img4').css('display','none');
        $('#img5').css('display','none');
        $('#img6').css('display','block');
        $('#img7').css('display','none');
      });
      //click on button 7
      $('#cli7').click(function() {
        $('#img1').css('display','none');
        $('#img2').css('display','none');
        $('#img3').css('display','none');
        $('#img4').css('display','none');
        $('#img5').css('display','none');
        $('#img6').css('display','none');
        $('#img7').css('display','block');
      });
      //turn of animated
      $('.profile').css('animation','none');
      $('#op2').css('animation','none');
      $('.line').css('animation','none');
      $('.line2').css('animation','none');
      $('header h1').css('animation','none');
    }
  });
    //move button
    $('.gov').addClass('active');
    $('.btn1').click(function() {
      $('.gov').removeClass('active');
      $('.gov').addClass('inactive');
    });
    //button to open class
    $('.butt img').click(function() {
      $('.newmenu').css('display','block');
    });
    $('.close').click(function() {
      $('.newmenu').css('display','none');
    });
});
