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
    $('.menuSection .mainMenu > ul > .menu-item-has-children > a').append('<svg height="10" width="10" fill="#a1a1a1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 330 330" xml:space="preserve"><path d="M325.607 79.393c-5.857-5.857-15.355-5.858-21.213.001l-139.39 139.393L25.607 79.393c-5.857-5.857-15.355-5.858-21.213.001-5.858 5.858-5.858 15.355 0 21.213l150.004 150a14.999 14.999 0 0 0 21.212-.001l149.996-150c5.859-5.857 5.859-15.355.001-21.213z"/></svg>');
    $('.mobMenuContainer .mobileMenu > ul > .menu-item-has-children > a').append('<svg height="22" width="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 43 50" xml:space="preserve" transform="rotate(180)"><path fill="#a1a1a1" d="M15.563 40.836a.997.997 0 0 0 1.414 0l15-15a.999.999 0 0 0 0-1.414l-15-15a.999.999 0 1 0-1.414 1.414l14.293 14.293-14.293 14.293a.999.999 0 0 0 0 1.414z"/></svg>');
    $('.mainHeaderBack .showInMobileMenu #openMenuMob').click(function(){
        $('.mainSiteOverlay').addClass('showSiteOverlay');
        $('.mobMenuContainer').addClass('showMobileMenu');
    });
    $('.mobMenuContainer #closeMobMenuIcon').click(function(){
        $('.mainSiteOverlay').removeClass('showSiteOverlay');
        $('.mobMenuContainer').removeClass('showMobileMenu');
    });
    $('.mainSiteOverlay').click(function(){
        $('.mainSiteOverlay').removeClass('showSiteOverlay');
        $('.mobMenuContainer').removeClass('showMobileMenu');
    });
    $('.mobileMenu>ul>.menu-item-has-children>a').click(function(){
        $('.mobileMenu>ul>.menu-item-has-children>ul').slideUp(300);
        $('.mobMenuContainer > .mobileMenu > ul > .menu-item-has-children > .sub-menu').slideUp(300);
        if($(this).siblings("ul").css('display') == 'block'){
            $(this).siblings('ul').slideUp(400);
        }
        else{
            $(this).siblings('ul').slideToggle(400);
        }        
    });
});