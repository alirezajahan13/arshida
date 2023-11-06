var $ = jQuery;

$(window).on('scroll' , function(){
    if($(document).scrollTop() >= 130){
        $('.stickyHeaderParent').addClass('showStickyHeader');
    }
    else{
        $('.stickyHeaderParent').removeClass('showStickyHeader');
    }
});

$(document).ready(function(){
    $('.mainHeaderBack .showInMobileMenu #openMenuMob').click(function(){
        // $('.mainOverlay').addClass('showOverlay');
        $('.mobMenuContainer').addClass('showMobileMenu');
    });
    $('.mainHeaderBack #closeMobMenuIcon').click(function(){
        // $('.mainOverlay').removeClass('showOverlay');
        $('.mobMenuContainer').removeClass('showMobileMenu');
    });
});