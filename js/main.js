$(document).ready(function () {
function init() {
    document._video = document.getElementById("video");
}

document.addEventListener("DOMContentLoaded", init, false);

//switching videos (playlist)
var videos = 
[
 [

 ],
 [

 ],
 [

 ],
 [

 ]
 ];
function switchVideo(n) {
    if (n >= videos.length) n = 0;

    var mp4 = document.getElementById("mp4");
    var parent = mp4.parentNode;

    document._video.setAttribute("poster", videos[n][0]);
    mp4.setAttribute("src", videos[n][1]);
  document._video.load();
}

    $(".file-upload input[type=file]").change(function(){
         var filename = $(this).val().replace(/.*\\/, "");
         $("#filename").val(filename);
    });

    $(".main-slaider").owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoHeight:true,
    navText:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }  
});


    $(".slaider-2").owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }  
});
    $(".detail-slaider").owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:false,
    responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
});

    $(".arch-slaider-3").owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:false,
    items:1,
    autoHeight: true
 
});


    $(".credit-slaider").owlCarousel({
    loop:true,
    margin:50,
    nav:true,
    navText:false,
    items:5,
    autoHeight: true,
    autoWidth:true
    
 
});


    $(function() {
    $('.questions span').click(function() {
    $(this).siblings(".questions ul").toggle();
    $(this).toggleClass('answer-open');
  });

   
    $(function() {
        $('.popup-form').on('mouseup', function() {
        $(".fancybox").fancybox().trigger('click');
        });
    });

    $(window).scroll(function() {
    var height = $(window).scrollTop();

         /*Если сделали скролл на 100px задаём новый класс для header*/
    if(height > 1){
    $('header').addClass('header-fixed');
    } else{
         /*Если меньше 100px удаляем класс для header*/
    $('header').removeClass('header-fixed');
    }

    });

    
      var track = document.querySelector('audio');
        track.volume = 0.7
      track.pause()
    
    $('.btn-audio').on('click', function(){
      var track = document.querySelector('audio');
      if (track.paused) {
        track.play()
        $(this).removeClass('muted')
      } else {
        track.pause();
        $(this).addClass('muted')
      }
    });
    $('.slide__link').on('click', function(e){
        e.preventDefault();
        console.log('Slide show prew On click! \n');

          var $this = $(this),
              item = $this.closest('.slide__item'),
              wrap = $this.closest('.slideShow'),
              gap = wrap.find('.slide__gap'),
              itemPath = $this.find('img').attr('src'),
              dur = 500;

          if(!item.hasClass('activSl')){
            item.addClass('.activSl').siblings().removeClass('activSl');
            gap.find('img').fadeOut(dur, function(){
              $(this).attr('src', itemPath).fadeIn(dur);
            });
          }         

});
});