var $ = jQuery;

$(document).ready(function(){
    let currentUrl = window.location.href;
    $('.categoryItem').each(function() {
        let categoryUrl = $(this).attr('href');
        if (currentUrl === categoryUrl) {
            $(this).addClass('activeCategory');
            return false;
        }
    });
});