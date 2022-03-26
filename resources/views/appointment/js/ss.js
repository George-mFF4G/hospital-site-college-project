        //for scrolling 
    var  nav = document.getElementById('nav');
     
     window.onscroll = function(){

       if (window.pageYOffset >100) {

           nav.style.background ="#353755";
           nav.style.boxShadow = "  0 0 50px #0052ff";
       }
       else{
           nav.style.background = "transparent";
           nav.style.boxShadow = "none";
       }
     };
//   ***************************************************************
$(function(){
        'use strict';
        $('.parts li a').click(function(e){
            e.preventDefault();
            
            $('html,body').animate({
            scrollTop : $( '#' + $(this).data('link' )).offset().top
             },1000);
            
            window.console.log('#' + $(this).data('link'));
            });
     });