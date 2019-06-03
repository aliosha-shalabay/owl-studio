function sendForm(formBtn) {

    var form = $(formBtn).closest('form');
    var url = form.attr('action');
    var method = form.attr('method');
    var data = form.serialize();
    var response = false;

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: url,
        async: false,
        type: method,
        enctype: 'multipart/form-data',
        data: new FormData($(form).get(0)),
        processData: false,
        contentType: false,
        beforeSend: function(){
            $('.js-loader').show();
            $(formBtn).attr('disabled', true);
        },
        success: function (res) {
            $('.js-loader').hide();
            $(formBtn).attr('disabled', false);

            response = res;

            if (response.success) {
                $(form).trigger('reset');
            }
        },
        errors: function (res) {
            response = res;
        }
    });

    return response;
}

$(document).ready(function () {

    'use strict';

    // ========================================================================= //
    //  //SMOOTH SCROLL
    // ========================================================================= //

    $(".go_to").on("click", function(e) {

        e.preventDefault();

        var currentBlock = $(this).attr("href"),
            currentBlockOffset = $(currentBlock).offset().top;

        $("html, body").animate({
            scrollTop: currentBlockOffset - 20
        }, 500);

    });

    // ========================================================================= //
    //  //NAVBAR SHOW - HIDE
    // ========================================================================= //


    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 200) {
            $("#main-nav").slideDown(700);
        } else {
            $("#main-nav").slideUp(700);
        }
    });

    // ========================================================================= //
    //  // RESPONSIVE MENU
    // ========================================================================= //

    $('.responsive').on('click', function (e) {
        $('.nav-menu').slideToggle();
    });

    // ========================================================================= //
    //  Owl Carousel Services
    // ========================================================================= //


    $('.services-carousel').owlCarousel({
        autoplay: true,
        loop: true,
        margin: 20,
        dots: true,
        nav: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            900: {
                items: 4
            }
        }
    });

    // ========================================================================= //
    //  counterUp
    // ========================================================================= //
    var flag = true;

    $(window).scroll(function() {
        if ($(this).scrollTop() + $(this).height() > $('#count').offset().top && flag) {

            flag = false;

                jQuery('.progress-bar').each(function(){
                    jQuery(this).animate({
                        width:jQuery(this).children().text()
                    },2000);
                });

            $('.counter').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');

                $({ countNum: $this.text()}).animate({
                        countNum: countTo
                    },

                    {

                        duration: 2000,
                        easing:'linear',
                        step: function() {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function() {
                            $this.text(this.countNum);
                        }

                    });



            });
        }
    });



    // ========================================================================= //
    //  hover btn
    // ========================================================================= //

    $('.btn-hover').on('mouseenter', function (e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({
            top: relY,
            left: relX
        })
    }).on('mouseout', function (e) {
        var parentOffset = $(this).offset(),
            relX = e.pageX - parentOffset.left,
            relY = e.pageY - parentOffset.top;
        $(this).find('span').css({
            top: relY,
            left: relX
        })
    });

});


/*========Window Load Function========*/
$(window).on("load", function () {


    // ========================================================================= //
    //  pre-loader
    // ========================================================================= //

    $(".pre-loader").fadeOut(500);


    // ========================================================================= //
    //  Porfolio isotope and filter
    // ========================================================================= //

    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-grid-item'
    });

    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('filter-active');
        $(this).addClass('filter-active');

        portfolioIsotope.isotope({
            filter: $(this).data('filter')
        });
    });

});

$(document).on('click', '.js-btn-send-request', function (e) {
    e.preventDefault();

    var response = sendForm($(this));

    if (response.success){
        $('.js-errors').text('');

        $('.alert-success-request').text(response.message).fadeIn(1500);

        ga('send', 'event', "Order", '', 'Ok');

        setTimeout(function () {
            $('.alert-success-request').fadeOut(1000)
        }, 10000);
    }else {
        $.each(JSON.parse(response.errors), function(key, value){
            var ulError = $('.js-errors[data-input-name="'+ key +'"]');

            $.each(value, function (i, v) {
                $(ulError).append('<li>' + v + '</li>');
            })
        });
    }



})
