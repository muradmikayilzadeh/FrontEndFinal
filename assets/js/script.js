$(document).ready(function($) {
   $('#header h1,h5,button').fadeIn(1000);
   $(window).scroll(function(event) {
      var distance=$(window).scrollTop();
      // --------------------LOGO--------------------
      if (distance>118) {
         $('#logo img').slideDown(400);
         ;
      };
      // --------------------FOR EVERY STARTUP--------------------
      if (distance>678) {
         $('#forEveryStartup .img').css({transform:"translateX(0)"});
         $('#forEveryStartup .text').css({transform:"translateX(0)"});
      }
      // --------------------TECHNOLOGY--------------------
      if (distance>1030) {
         $('#technology img').css({transform:"translateX(0)"});
         $('#technology .text').css({transform:"translateX(0)"});
      }
      // --------------------HELMET--------------------
        if (distance>1463) {
         $('#helmet img').css({transform:"translateX(0)"});
         $('#helmet .text').css({transform:"translateX(0)"});
      }
      // --------------------COMP--------------------
        if (distance>1998) {
         $('#comp img').css({transform:"perspective(1300px) rotateX(0deg)"});
      }
      // --------------------FEATURE(FIRST)--------------------
        if (distance>2609) {
         $('#feature .first').css({transform:"translateX(0)"});
      }
      // --------------------FEATURE(SECOND)--------------------
        if (distance>2709) {
         $('#feature .second').css({transform:"translateX(0)"});
      }
      // --------------------UPDATES--------------------
        if (distance>3029) {
         $('#updates .text').css({transform:"translateX(0)"});
         $('#updates .inputs').css({transform:"translateX(0)"});
      }
      // --------------------PRICE--------------------
        if (distance>3173) {
         $('#price .container').css({transform:"translateY(0)"});
      }
      // --------------------AWARD--------------------
        if (distance>4026) {
         $('#award .container').css({transform:"translateY(0)"});
      }
      // --------------------FEEDBACK--------------------
        if (distance>4461) {
         $('#feedback .container').css({transform:"translateY(0)"});
      }
      // --------------------CLIENTS--------------------
        if (distance>4714) {
         $('#clients .container').css({transform:"translateY(0)"});
      }
   });


// MENU
   $("#menu li").on("click",function() {
      $("li").removeClass("MyActive");
      $(this).addClass("MyActive");
   })

   $(window).scroll(function(event) {
      var Myscroll = $(window).scrollTop();
      if (Myscroll>600) {
         $("nav").removeClass("FirstNav");
         $("nav").addClass("SecondNav");
      }else {
         $("nav").removeClass("SecondNav");
         $("nav").addClass("FirstNav");
      }

       if (Myscroll>580 && Myscroll<2331) {
         $("#menu ul li").removeClass('MyActive');
         $("#menu .about").addClass('MyActive');
      }
      if (Myscroll>2331 && Myscroll<3424) {
         $("#menu ul li").removeClass('MyActive');
         $("#menu .features").addClass('MyActive');
      }
      if (Myscroll>3424 && Myscroll<3712) {
         $("#menu ul li").removeClass('MyActive');
         $("#menu .prices").addClass('MyActive');
      }
      if (Myscroll>3712 && Myscroll<4847) {
         $("#menu ul li").removeClass('MyActive');
         $("#menu .feedback").addClass('MyActive');
      }
      if (Myscroll>4847 && Myscroll<5893) {
         $("#menu ul li").removeClass('MyActive');
         $("#menu .team").addClass('MyActive');
      }
      if (Myscroll>5893) {
         $("#menu ul li").removeClass('MyActive');
         $("#menu .contact").addClass('MyActive');
      }

   });
   // =================NAVBAR HOVER DROPDOWN====================================
   $('ul .nav li.dropdown').hover(function() {
      $(this).find('.FirstUl').stop(true, true).slideDown(300);
   }, function() {
      $(this).find('.FirstUl').stop(true, true).slideUp(300);
   });
   // ==================FIRST UL================================================
   $('.HOME').hover(function() {
      $(this).find('.SecondUL').stop(true, true).slideDown(300);
   }, function() {
      $(this).find('.SecondUL').stop(true, true).slideUp(300);
   });
   // ===============SECOND UL==================================================
   $('.BLOG').hover(function() {
      $(this).find('.ThirdUl').stop(true, true).slideDown(300);
   }, function() {
      $(this).find('.ThirdUl').stop(true, true).slideUp(300);
   });
   // ==================THIRD UL================================================
   $('.ECOMMERCE').hover(function() {
      $(this).find('.FourthUl').stop(true, true).slideDown(300);
   }, function() {
      $(this).find('.FourthUl').stop(true, true).slideUp(300);
   });


});







