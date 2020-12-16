jQuery(document).ready(function($) {
    $('.open-menu-mobile').click(function (e) {
        e.stopPropagation();
        $('.menu-mobile-blog').toggleClass('openn');
      });
      



});