$(window).load(function() {
    $("#flexiselDemo1").flexisel();

    $('.form-logos1 li').click(function(){
        var formtemp = $(this).find('a img').attr('src');
        $('.form-img1').attr('src', formtemp);
        $('.form-left').attr('src', formtemp);
    });

    $('.form-logos2 li').click(function(){
        var formtemp = $(this).find('a img').attr('src');
        $('.form-img2').attr('src', formtemp);
        $('.form-right').attr('src', formtemp);
    });

});