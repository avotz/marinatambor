const $ = require('jquery');
require('./vendor/jquery.magnific-popup.min.js');
require('./vendor/smooth-scrollbar.js');
import ScrollMagic from 'scrollmagic'; 
import { TimelineMax, TweenMax, Linear } from 'gsap';
import 'imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/animation.gsap';
const hoverintent = require('hoverintent');

;(function($){

  var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};

var $btnMenu = $('#btn-menu'),
  $menu = document.querySelectorAll('.menu .menu-item-has-children'),
  $body = $('body');



  $btnMenu.on('click', function (e) {
    
      $body.toggleClass('nav-is-open');

  });

  $menu.forEach(element => {
    hoverintent(element,
        function () {
            $(element).find('>.sub-menu').slideDown(200);
        }, function () {
            $(element).find('>.sub-menu').slideUp(200);
        }).options({
            timeout: 200,
            interval: 50
        });
});

  var Scrollbar = window.Scrollbar;

  //Scrollbar.init(document.querySelector('.scroll-wrapper'));
   
  /*$('.slider-home').slick({
      infinite: true,
      speed: 500,
      fade: true,
      autoplay: true,
      arrows:false,
      dots:true,
      cssEase: 'linear'
  });*/

  if(isHome()){
var controller = new ScrollMagic.Controller();


var showIntroDescriptionAnim = new TimelineMax();
var hideIntroDescriptionAnim = new TimelineMax();
var ChangeBGColorIntroAnim = new TimelineMax();
  
   showIntroDescriptionAnim.to('.banner-title h3', .2, {opacity: 1, color: '#254E7B', ease:Linear.easeNone});
   showIntroDescriptionAnim.to('.banner-title p', .3, {opacity: 1, color: '#444', ease:Linear.easeNone});

   hideIntroDescriptionAnim.to('.banner-title', .3, {opacity: 0, ease:Linear.easeNone});
   //hideIntroDescriptionAnim.to('.intro', .1, {backgroundColor: '#444', ease:Linear.easeNone});
   //ChangeBGColorIntroAnim.to(".intro",1, {backgroundColor: '#444',  ease:Linear.easeNone});
   //ChangeBGColorIntroAnim.staggerTo(".services-item",1, {top: '0', ease:Linear.easeNone}, 0.25 );

   var scene = new ScrollMagic.Scene({triggerElement: ".intro", triggerHook: 'onCenter'})
    .addTo(controller)
    .setTween(showIntroDescriptionAnim);


  var scene2 = new ScrollMagic.Scene({triggerElement: ".services", /*duration:450*/ triggerHook: 'onEnter', offset: 360})
    .addTo(controller)
    .setTween(hideIntroDescriptionAnim);

  var scene3 = new ScrollMagic.Scene({triggerElement: ".services",/*duration:400,*/ triggerHook: 'onEnter', offset: 203})
    .addTo(controller)
    .setTween(TweenMax.to(".page-bg",.5, {opacity: 0,  ease:Linear.easeNone}));

  var scene4 = new ScrollMagic.Scene({triggerElement: ".services", triggerHook: 'onCenter'})
    .addTo(controller)
    //.setTween(ChangeBGColorIntroAnim);
    .setTween(TweenMax.staggerTo(".services-item",.5, {top: '0',opacity: 1, ease:Linear.easeNone}, 0.25 ));

    var scene5 = new ScrollMagic.Scene({triggerElement: ".case", triggerHook: 'onEnter',offset: 203})
    .addTo(controller)
    //.setTween(ChangeBGColorIntroAnim);
    .setTween(TweenMax.to(".page-bg",.5, {opacity: 1,  ease:Linear.easeNone}));

    var scene6 = new ScrollMagic.Scene({triggerElement: ".case", duration:400 , triggerHook: 'onEnter', offset: 203})
    .addTo(controller)
    //.setTween(ChangeBGColorIntroAnim);
    .setTween(TweenMax.to(".parallax",1, {y: '-20%',  ease:Linear.easeNone}));

    var scene7 = new ScrollMagic.Scene({triggerElement: ".case", /*duration:100 ,*/ triggerHook: 'onEnter', offset: 303})
    .addTo(controller)
    .setTween(TweenMax.staggerTo(".case-info-item",.5, {left: '0', opacity: 1, ease:Linear.easeNone}, 0.25 ));

  }
  function isHome(){
      return $('body').hasClass('home');
    }
    
    $(window).scroll(function () {

          //if(isHome()){
            
              if ($(this).scrollTop() > 0) {
                  $('body').addClass("header--fixed");
              } else {
                  $('body').removeClass("header--fixed");
              }
        //}

        /* if ($(this).scrollTop() > $('.banner').height()-200) {
                  $('.banner-title').addClass("inSection");
              } else {
                  $('.banner-title').removeClass("inSection");
              }*/

      });



$(window).on('load', function (e) {
    resize();

    if(!isHome()){
      $('body').addClass("header-white");
    }else{
      $('body').removeClass("header-white");
    }
 
})

//////// mapa ///////////////////////
let iteractiveMap = $('.interactive-map .map');

let mapLinks = document.querySelectorAll('.map-links .map-button');
mapLinks.forEach(element => {
  hoverintent(element,
      function () {
        console.log('hover link map ' + $(element).attr('id'))
        iteractiveMap.addClass($(element).attr('id'))
      }, function () {
        console.log('hover link map ' + $(element).attr('id'))
        iteractiveMap.removeClass($(element).attr('id'))
      }).options({
          timeout: 200,
          interval: 50
      });
});

$(".circle-main").mouseup(function(e) {
  $("<div class='circle-pulse'></div>")
    .appendTo(".circle-main")
    .delay(1100)
    .queue(function() {
      $(this).remove();
    });
});

$('.cd-popup-trigger').on('click', function(event){
  event.preventDefault();
  
  $('.'+ $(this).attr('data-id')).addClass('is-visible');
});

//close popup
$('.cd-popup').on('click', function(event){

  if( $(event.target).is('.cd-popup-close') || $(event.target).is('.cd-popup') ) {
    event.preventDefault();
    $(this).removeClass('is-visible');
  }
});
//close popup when clicking the esc keyboard button
$(document).keyup(function(event){
    if(event.which=='27'){
      $('.cd-popup').removeClass('is-visible');
    }
  });

/////////////////////////////////////////////////

$(window).resize(resize);

let banner = $('.banner');

let video = $('.video');
function resize () {
   
  banner.height(video.height());
  
}


    
})($);


function getWindowHeight() {
  var windowHeight=0;
  if (typeof(window.innerHeight)=='number') {
    windowHeight=window.innerHeight;
  } else {
    if (document.documentElement && document.documentElement.clientHeight) {
      windowHeight = document.documentElement.clientHeight;
    } else {
      if (document.body && document.body.clientHeight) {
        windowHeight=document.body.clientHeight;
      }
    }
  }
  return windowHeight;
}

function getWindowWidth() {
  var windowWidth=0;
  if (typeof(window.innerWidth)=='number') {
    windowWidth=window.innerWidth;
  } else {
    if (document.documentElement && document.documentElement.clientWidth) {
      windowWidth = document.documentElement.clientWidth;
    } else {
      if (document.body && document.body.clientWidth) {
        windowWidth=document.body.clientWidth;
      }
    }
  }
  return windowWidth;
}


