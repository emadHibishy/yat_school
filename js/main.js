$(()=>{

    //adding active-tab class to tab once user click ("teachers")
    $('.teachers .headings li').click(function(){
        $('.teachers .headings li').removeClass('active-tab');
        let tabId = $(this).attr("id");
        $(this).addClass('active-tab');
        $('.info').hide();
        $("#"+tabId+"-teachers").fadeIn(1000);
    });

    //adding active-tab class to tab once user click ("students")
    $('.students .headings li').click(function(){
        $('.students .headings li').removeClass('active-tab');
        let tab = $(this).attr("id");
        $(this).addClass('active-tab');
        $('.info').hide();
        $("#"+tab+"-students").fadeIn(1000);
    });


    // carousel time
    $('.carousel').carousel({
        interval:1000
    });

});