(function ($) {
    "use strict";
    $.fn.loadingButton = function(action) {
        var loadingText = this.data('loading-text') || '<i class="fa fa-circle-o-notch fa-spin"></i> loading...';
        if (action === 'loading' && loadingText) {
            this.data('original-text', this.html()).html(loadingText).prop('disabled', true);
        }
        if (action === 'reset' && this.data('original-text')) {
            this.html(this.data('original-text')).prop('disabled', false);
        }
    };

    // Preloader (if the #preloader div exists)
    $(window).on('load', function () {
        if ($('#preloader').length) {
            $('#preloader').delay(2000).fadeOut('slow');
        }
    });
    window.onload = function() {
        setTimeout(function() {
            $("#newsletterModal").modal('show');
        }, 10000);
    }
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 1500, 'easeInOutExpo');
        return false;
    });


    // Initiate the wowjs animation library
    if(typeof WOW !== 'undefined'){
        new WOW().init();
    }


    // Navigation active state on scroll
    var nav_sections = $('section');
    var main_nav = $('.main-nav, .mobile-nav');
    var main_nav_height = $('#header').outerHeight();

    $(window).on('scroll', function () {
        var cur_pos = $(this).scrollTop();

        nav_sections.each(function () {
            var top = $(this).offset().top - main_nav_height,
                bottom = top + $(this).outerHeight();

            if (cur_pos >= top && cur_pos <= bottom) {
                main_nav.find('li').removeClass('active');
                main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
            }
        });
    });




    //Running pirate on click

    /* $('img.playgif').click(function () {
        var srcName = $(this).attr("src");
        if (srcName == "asset/frontend/img/pirate.gif") {
            $(this).attr("src", 'asset/frontend/img/running.gif');
            $('#mediPlay')[0].play();

        } else {
            $(this).attr("src", 'asset/frontend/img/pirate.gif');
            $('#mediPlay')[0].pause();
        }
    }); */

    //Open Coin box
    $('.boxgif').click(function () {
        var srcName = $(this).attr("src");
        if (srcName == "asset/frontend/img/box/box-blink.gif") {
            $(this).attr("src", 'asset/frontend/img/box/boxx.gif');
            $(this).attr("alt", 'skattekiste full av skinnende gullmynter');
            $('#audioBox')[0].play();

        } else {
            $(this).attr("src", 'asset/frontend/img/box/box-blink.gif');
            $('.playgif').attr('src', 'asset/frontend/img/pirate.gif');
            $('#audioBox')[0].pause();
        }
    });

    //button pirate animation
    $('#start-btn').on('mouseenter', function () {
        $('.playgif').attr('src', 'asset/frontend/img/pirate-moving-flagg.gif');
    });

    $('#start-btn').on('mouseleave', function () {
        $('.playgif').attr('src', 'asset/frontend/img/pirate.gif');
    });

    //menu hover pirate animation
    $('.drop-down').on('mouseenter', function () {
        $('.playgif').attr('src', 'asset/frontend/img/moving-head.gif');
    });

    $('.drop-down').on('mouseleave', function () {
        $('.playgif').attr('src', 'asset/frontend/img/pirate.gif');
    });

    //Les Mer jquery
    $('#myBtn').click(function () {
        $('#more').slideToggle();
        if ($('#myBtn').text() == "Les Mer") {
            $(this).text("Les Mindre")
        } else {
            $(this).text("Les Mer")
        }
    });

    $("#noDeposit").click(function () {
        var elem = $("#noDeposit").text();
        if (elem == "Les Mer") {
            //Stuff to do when btn is in the Les Mer state
            $("#noDeposit").text("Les Mindre");
            $("#more-deposit-bonuse").slideDown();
        } else {
            //Stuff to do when btn is in the Les Mindre state
            $("#noDeposit").text("Les Mer");
            $("#more-deposit-bonuse").slideUp();
        }
    });

    $("#deposit-read-more").click(function () {
        var elem = $("#deposit-read-more").text();
        if (elem == "Les Mer") {
            //Stuff to do when btn is in the Les Mer state
            $("#deposit-read-more").text("Les Mindre");
            $("#deposit-bonuse").slideDown();
        } else {
            //Stuff to do when btn is in the Les Mindre state
            $("#deposit-read-more").text("Les Mer");
            $("#deposit-bonuse").slideUp();
        }
    });

    $("#wagering-read-more").click(function () {
        var elem = $("#wagering-read-more").text();
        if (elem == "Les Mer") {
            //Stuff to do when btn is in the Les Mer state
            $("#wagering-read-more").text("Les Mindre");
            $("#wagering-more-section").slideDown();
        } else {
            //Stuff to do when btn is in the Les Mindre state
            $("#wagering-read-more").text("Les Mer");
            $("#wagering-more-section").slideUp();
        }
    });
    
    $("#sport-casino-read-more").click(function () {
        var elem = $("#sport-casino-read-more").text();
        if (elem == "Les Mer") {
            //Stuff to do when btn is in the Les Mer state
            $("#sport-casino-read-more").text("Les Mindre");
            $("#sport-casino-more-section").slideDown();
        } else {
            //Stuff to do when btn is in the Les Mindre state
            $("#sport-casino-read-more").text("Les Mer");
            $("#sport-casino-more-section").slideUp();
        }
    });

    $("#new-casino-read-more").click(function () {
        var elem = $("#new-casino-read-more").text();
        if (elem == "Les Mer") {
            //Stuff to do when btn is in the Les Mer state
            $("#new-casino-read-more").text("Les Mindre");
            $("#new-casino-more-section").slideDown();
        } else {
            //Stuff to do when btn is in the Les Mindre state
            $("#new-casino-read-more").text("Les Mer");
            $("#new-casino-more-section").slideUp();
        }
    });

    $("#find-casino-read-more").click(function () {
        var elem = $("#find-casino-read-more").text();
        if (elem == "Les Mer") {
            //Stuff to do when btn is in the Les Mer state
            $("#find-casino-read-more").text("Les Mindre");
            $("#find-casino-more-section").slideDown();
        } else {
            //Stuff to do when btn is in the Les Mindre state
            $("#find-casino-read-more").text("Les Mer");
            $("#find-casino-more-section").slideUp();
        }
    });


    $("#mobile-casino-read-more").click(function () {
        var elem = $("#mobile-casino-read-more").text();
        if (elem == "Les Mer") {
            //Stuff to do when btn is in the Les Mer state
            $("#mobile-casino-read-more").text("Les Mindre");
            $("#mobile-casino-more-section").slideDown();
        } else {
            //Stuff to do when btn is in the Les Mindre state
            $("#mobile-casino-read-more").text("Les Mer");
            $("#mobile-casino-more-section").slideUp();
        }
    });

    $("#slot-machine-read-more").click(function () {
        var elem = $("#slot-machine-read-more").text();
        if (elem == "Les Mer") {
            //Stuff to do when btn is in the Les Mer state
            $("#slot-machine-read-more").text("Les Mindre");
            $("#slot-machine-more-section").slideDown();
        } else {
            //Stuff to do when btn is in the Les Mindre state
            $("#slot-machine-read-more").text("Les Mer");
            $("#slot-machine-more-section").slideUp();
        }
    });

    $("#news-read-more").click(function () {
        var elem = $("#news-read-more").text();
        if (elem == "Les Mer") {
            //Stuff to do when btn is in the Les Mer state
            $("#news-read-more").text("Les Mindre");
            $("#news-more-section").slideDown();
        } else {
            //Stuff to do when btn is in the Les Mindre state
            $("#news-read-more").text("Les Mer");
            $("#news-more-section").slideUp();
        }
    });

    $('.casino-widget').hover(function () {
        $(this).find('.casino-top').hide();
        $(this).find('.casino-bottom').show();
    }, function () {
        $(this).find('.casino-top').show();
        $(this).find('.casino-bottom').hide();
    });

    $(window).scroll(function () {
        //more then or equals to
        if ($(window).scrollTop() >= 1000) {
            $(".section-title").css("display", "block");

            //less then 100px from top
        } else if ($(window).scrollTop() >= 1000) {
            $(".section-title").css("display", "none");
        }
    });

    $('.casino-review-tab').find('.table').addClass('table-responsive');
    $('.detail-review-tab').find('.table').addClass('table-responsive');
    $('#cookie-section-page').find('.table').addClass('table-striped table-responsive cookie-table');

    // Character moves with mouse
    var mouseX = 0,
        mouseY = 0;
    $(document).mousemove(function (e) {
        mouseX = e.pageX;
        mouseY = e.pageY;
    });

    // cache the selector
    var follower = $("#follower img");
    var xp = 0,
        yp = 0;
    var loop = setInterval(function () {
        // change 12 to alter damping higher is slower
        xp += (mouseX - xp) / 12;
        yp += (mouseY - yp) / 12;
        follower.css({
            left: xp,
            top: yp
        });

    }, 30);

    // $('select').niceSelect();

    $('form#games_filter_form input').on("change, click", function () {
        document.forms.games_filter_form.submit();
    });

    $('form#games_filter_mobile_form input').on("change, click", function () {
        document.forms.games_filter_mobile_form.submit();
    });

    $('form#games_filter_ipad_form input').on("change, click", function () {
        document.forms.games_filter_ipad_form.submit();
    });

    $('form#news_form').on("change", function () {
        document.forms.news_form.submit();
    });



    $(window).on("resize", function(){
        if (window.innerWidth > 767 && window.innerWidth < 1099) {
          $('.game-content').addClass('col-md-4').removeClass('col-md-3');
          $('.filter-screen').addClass('col-md-3 offset-md-1').removeClass('col-md-2');
          $('.game-popular-casino').addClass('col-md-10 offset-md-1').removeClass('col-md-3');
          $('.faq_content').addClass('col-md-10').removeClass('col-md-7');
          $('.faq_popular_casino').addClass('col-md-10 offset-md-1').removeClass('col-md-3');
          $('.slottomat-table-tab').addClass('col-md-6 offset-md-4').removeClass('col-md-4 offset-md-6');


        } else {
            $('.game-content').addClass('col-md-3').removeClass('col-md-4');
            $('.filter-screen').addClass('col-md-2').removeClass('col-md-3 offset-md-1');
            $('.game-popular-casino').addClass('col-md-3').removeClass('col-md-10 offset-md-1');
            $('.faq_content').addClass('col-md-7').removeClass('col-md-10');
            $('.faq_popular_casino').addClass('col-md-3').removeClass('col-md-10 offest-md-1');
            $('.slottomat-table-tab').addClass('col-md-4 offset-md-6').removeClass('col-md-6 offset-md-4');
        }
    });

    $(window).on("load", function(){
        if (window.innerWidth > 767 && window.innerWidth < 1099) {
          $('.game-content').addClass('col-md-4').removeClass('col-md-3');
          $('.filter-screen').addClass('col-md-3 offset-md-1').removeClass('col-md-2');
          $('.game-popular-casino').addClass('col-md-10 offset-md-1').removeClass('col-md-3');
          $('.faq_content').addClass('col-md-10').removeClass('col-md-7');
          $('.faq_popular_casino').addClass('col-md-10 offset-md-1').removeClass('col-md-3');
            $('.slottomat-table-tab').addClass('col-md-6 offset-md-4').removeClass('col-md-4 offset-md-6');
        } else {
            $('.game-content').addClass('col-md-3').removeClass('col-md-4');
            $('.filter-screen').addClass('col-md-2').removeClass('col-md-3 offset-md-1');
            $('.game-popular-casino').addClass('col-md-3').removeClass('col-md-10 offset-md-1');
            $('.faq_content').addClass('col-md-7').removeClass('col-md-10');
            $('.faq_popular_casino').addClass('col-md-3').removeClass('col-md-10 offest-md-1');
            $('.slottomat-table-tab').addClass('col-md-4 offset-md-6').removeClass('col-md-6 offset-md-4');
        }
    });

    setTimeout(function() {
        $('#success-msg').fadeOut('fast');
    }, 3000);


    $('#filterLow span').text("Lav");
    $('#filterMedium span').text("Middels");
    $('#filterHigh span').text("Høy");

    $(document).ready(function() {
        let multisite_selector = $("#multisite_selector");
        multisite_selector.msDropdown();
        multisite_selector.on("change", function () {
            window.location.href = $(this).val();
        })
    })
})(jQuery);
