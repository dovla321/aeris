




/*function topInViewport(element) {
    return $(element).offset().top >= $(window).scrollTop() && $(element).offset().top          <= $(window).scrollTop() + $(window).height();
 }
$(window).on("load resize scroll",function(e){
    topInViewport($(".part"))
    console.log('topInViewport');
});*/

//video resize

$(document).ready(function(){
        $('.video-section1 .video-tehnowrapp12').css('height', $(window).height());
            
    });
    $(window).resize(function(){
        $('.video-section1 .video-tehnowrapp12').css('height', $(window).height());
          
    });





//color background changer


$(window).on("load scroll", function(e) {
         
         var bheight = $('body').height();
         var percent1 = 0.1;
         var percent2 = 0.2;
         var percent3 = 0.3;
         var percent4 = 0.4;
         var percent5 = 0.5;
         var percent6 = 0.6;
         var percent7 = 0.7;
        
         var hpercent1 = bheight * percent1;
         var hpercent2 = bheight * percent2;
         var hpercent3 = bheight * percent3;
         var hpercent4 = bheight * percent4;
         var hpercent5 = bheight * percent5;
         var hpercent6 = bheight * percent6;
         var hpercent7 = bheight * percent7;

         //console.log(hpercent, 'visdina');

         if ($(".container-navi").offset().top > hpercent1) {
           $("body").removeClass("color2 color3 color4 color5 color6 color7");
           $("body").addClass("color1");
           
         } 
         if ($(".container-navi").offset().top > hpercent2) {
           $("body").removeClass("color1 color3 color4 color5 color6 color7");
           $("body").addClass("color2");
           
         }
         if ($(".container-navi").offset().top > hpercent3) {
           $("body").removeClass("color1 color2 color4 color5 color6 color7");
           $("body").addClass("color3");
           
         }
          if ($(".container-navi").offset().top > hpercent4) {
           $("body").removeClass("color1 color2 color3 color5 color6 color7");
           $("body").addClass("color4");
           
         }
         if ($(".container-navi").offset().top > hpercent5) {
           $("body").removeClass("color1 color2 color3 color4 color6 color7");
           $("body").addClass("color5");
           
         }
         if ($(".container-navi").offset().top > hpercent6) {
           $("body").removeClass("color1 color2 color3 color4 color5 color7");
           $("body").addClass("color6");
           
         }
         if ($(".container-navi").offset().top > hpercent7) {
           $("body").removeClass("color1 color2 color3 color4 color5 color6");
           $("body").addClass("color7");
           
         }
         

    });



//accordian text 






const faqs=document.querySelectorAll(".faq");


faqs.forEach((faq)=>{
    faq.addEventListener("click",()=>{
        faq.classList.toggle("active");
    });
});

//logo-dropdown on hover

const logDrops=document.querySelectorAll(".logDrop");

const removelogDrops=document.querySelectorAll(".logDrop");


logDrops.forEach((logDrop)=>{
    logDrop.addEventListener("mouseenter",()=>{
        logDrop.classList.toggle("active");
    });
});

removelogDrops.forEach((logDrop)=>{
    logDrop.addEventListener("mouseleave",()=>{
        logDrop.classList.remove("active");
    });
});

//logo-dropdown on click

const logDropss=document.querySelectorAll(".logDrop");

logDropss.forEach((logDrop)=>{
    logDrop.addEventListener("click",()=>{
        logDrop.classList.toggle("activeClick");
    });
});







//navbar scroll

$(document).ready(function(){
    $(window).on('scroll',function(){
        if ($(window).scrollTop()){
            $(".container-navi").addClass('bgc');
        }else{
            $(".container-navi").removeClass('bgc');
        }
    });
});







//SMOOTH BACKGROUND-COLOR-CHANGE


$(window).scroll(function(){
   
   var $window=$(window),
       $body=$('body'),
       $part=$('.part');

   var scroll=$window.scrollTop()+($window.height()/3);
   $part.each(function(){
      var $this=$(this);
      if($this.position().top<=scroll &&
      $this.position().top+$this.height()>scroll){
        $body.removeClass(function(index,css){
            return (css.match(/(^|\s)color-\S+/g) ||
                []).join('');

        });

         $body.addClass('color-'+$(this).data('color'));
      }
   });   
}).scroll();


//SMOOTH BACKGROUND-COLOR-CHANGE br2


$(window).scroll(function(){
   
   var $window=$(window),
       $body=$('body'),
       $part1=$('.part1');

   var scroll=$window.scrollTop()+($window.height()/3);
   $part1.each(function(){
      var $this=$(this);
      if($this.position().top<=scroll &&
      $this.position().top+$this.height()>scroll){
        $body.removeClass(function(index,css){
            return (css.match(/(^|\s)color-\S+/g) ||
                []).join('');

        });

         $body.addClass('color-'+$(this).data('color'));
      }
   });   
}).scroll();


/*$(function(){
    'use strict';
    var view =$(window).height();
    $('.part')
    .height(view)
    .scrollie({
        scrolloffset:-100,
        scrollingInView:function(elem){
            var bgColor = elem.data('background');
            $('body').css('background-color',bgColor);
        }
    });
});*/



const according=document.getElementsByClassName('softwer-black-con');

for (i=0;i<according.length; i++){
    according[i].addEventListener('click',function(){
        this.classList.toggle('active')
    })
}







//


$(document).ready(function(){
    $('.mirko').click(function(){

        $('nav').toggleClass('show_links');
        $('.mirko').toggleClass('toggle');
        
    })
});






// Mouse move backgrpund change image



var imageUrls = [
                            " http://localhost/AERIS/wp-content/themes/aeris/img/dynamicImages/ej1.jpg",
                            " http://localhost/AERIS/wp-content/themes/aeris/img/dynamicImages/ej2.jpg",
                            " http://localhost/AERIS/wp-content/themes/aeris/img/dynamicImages/ej3.jpg",
                            " http://localhost/AERIS/wp-content/themes/aeris/img/dynamicImages/ej4.jpg",
                            " http://localhost/AERIS/wp-content/themes/aeris/img/dynamicImages/ej5.jpg",
                            " http://localhost/AERIS/wp-content/themes/aeris/img/dynamicImages/ej6.jpg",
                            " http://localhost/AERIS/wp-content/themes/aeris/img/dynamicImages/ej7.jpg",
                            " http://localhost/AERIS/wp-content/themes/aeris/img/dynamicImages/ej8.jpg",
                            " http://localhost/AERIS/wp-content/themes/aeris/img/dynamicImages/ej9.jpg",
                            " http://localhost/AERIS/wp-content/themes/aeris/img/dynamicImages/ej10.jpg",
                            " http://localhost/AERIS/wp-content/themes/aeris/img/dynamicImages/ej11.jpg",
                            " http://localhost/AERIS/wp-content/themes/aeris/img/dynamicImages/ej12.jpg",
                            " http://localhost/AERIS/wp-content/themes/aeris/img/dynamicImages/ej13.jpg"
                        ];
                        var images = [];
                        for (var imageUrlIndex = 0; imageUrlIndex < imageUrls.length; imageUrlIndex++) {
                            images[imageUrlIndex] = new Image();
                            images[imageUrlIndex].src = imageUrls[imageUrlIndex];
                        }
                        jQuery(document).ready(function() {
                            jQuery(document).mousemove(function(e) {
                                var eyeCoordinate = jQuery("#dynamicImageContainer").offset();
                                var x1 = e.pageX;
                                var x2 = (eyeCoordinate.left + (jQuery("#dynamicImageContainer").width() / 2));
                                var y1 = e.pageY;
                                var y2 = (eyeCoordinate.top + (jQuery("#dynamicImageContainer").height() / 2)) - 80;
                                var movedTo0X = x1 - x2;
                                var movedTo0Y = y1 - y2;
                                var quadrant = 0;
                                if (movedTo0X > 0 && movedTo0Y > 0) {
                                    quadrant = 1;
                                } else if (movedTo0X < 0 && movedTo0Y > 0) {
                                    quadrant = 2;
                                } else if (movedTo0X < 0 && movedTo0Y < 0) {
                                    quadrant = 3;
                                } else if (movedTo0X > 0 && movedTo0Y < 0) {
                                    quadrant = 4;
                                }
                                var angle = Math.atan(movedTo0X / movedTo0Y) / (Math.PI / 180);
                                if (quadrant == 1) {
                                    angle = 90 - angle;
                                } else if (quadrant == 2) {
                                    angle = 90 + angle * -1;
                                } else if (quadrant == 3) {
                                    angle = 180 + (90 - angle);
                                } else if (quadrant == 4) {
                                    angle = 270 + angle * -1;
                                }
                                if (angle >= 270 && angle <= 290) {
                                    image = imageUrls[4];
                                } else if (angle >= 290 && angle <= 310) {
                                    image = imageUrls[5];
                                } else if (angle >= 310 && angle <= 330) {
                                    image = imageUrls[6];
                                } else if ((angle >= 330 && angle <= 360) || (angle >= 0 && angle <= 10)) {
                                    image = imageUrls[7];
                                } else if (angle >= 10 && angle <= 60) {
                                    image = imageUrls[8];
                                } else if (angle >= 60 && angle <= 90) {
                                    image = imageUrls[9];
                                } else if (angle >= 90 && angle <= 120) {
                                    image = imageUrls[10];
                                } else if (angle >= 120 && angle <= 150) {
                                    image = imageUrls[11];
                                } else if (angle >= 150 && angle <= 180) {
                                    image = imageUrls[12];
                                } else if (angle >= 180 && angle <= 210) {
                                    image = imageUrls[1];
                                } else if (angle >= 210 && angle <= 240) {
                                    image = imageUrls[2];
                                } else if (angle >= 240 && angle <= 270) {
                                    image = imageUrls[3];
                                }
                                var distanceFromCenter = Math.sqrt(Math.pow(x1 - x2, 2) + Math.pow(y1 - y2, 2));
                                if (distanceFromCenter <= 150) {
                                	image = imageUrls[0];
                                }
                                if (quadrant != 0) {
                                    jQuery("#dynamicImage").attr("src", image);
                                }
                            });
                        });
                    