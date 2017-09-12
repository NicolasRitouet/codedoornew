$(function() {
    var isOpen = false;
    $('.burger-menu').click(function(event) {
    if(!isOpen){
        $('.topnav').addClass('responsive');
    }else {
        $('.topnav').removeClass('responsive');
    }
    isOpen = !isOpen;
    });
});
