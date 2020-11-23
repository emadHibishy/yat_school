$(function(){
    // toggle signup tabs and forms
    $('.sign ul li').click(function(){
        $('.sign ul li').removeClass('active');
        $(this).addClass('active');
        let tabId = $(this).attr('id');
        $('.sign form').hide();
        $('#'+tabId+'-form').fadeIn(1000);
    });

    // toggle register tabs and forms
    $('.register ul li').click(function(){
        $('.register ul li').removeClass('active');
        $(this).addClass('active');
        let tabId = $(this).attr('id');
        $('.register form').hide();
        $('#'+tabId+'-form').fadeIn(1000);
    });
});