(function($){
    "use strict";
    $(document).ready(function() {

/* Responsive Menu */
$('#dl-menu').dlmenu({
    animationClasses: {
        classin: 'dl-animate-in-5',
        classout: 'dl-animate-out-5'
    }
});
/* Responsive Menu */

/* Flex Slider (Testimonial Customers) */
$('.testi-slider.flexslider').flexslider({
    animation: "fade",
    slideshow: true,
    slideshowSpeed: 5000,
});
$('.next-slider').click(function () {
    $('.flexslider.pf-carousel').flexslider("next");
});
$('.prev-slider').click(function () {
    $('.flexslider.pf-carousel').flexslider("prev");
});
/* Flex Slider (Testimonial Customers) */

/* Search */
    $('#search-btn').click(function () {
        if ($("#search-input").is(":hidden")) {
            $("#search-btn").addClass("search-active");
            $("#search-input").fadeIn(100);
            $("#s-input").focus();
        } else {
            $("#search-btn").removeClass("search-active");
            $("#search-input").fadeOut(100);
        }
        return false;
    });
/* Search */


/* Twitter */


$('.tweet').twittie({
    username: 'DankovThemes',
    template: '{{tweet}}',
    count: 10,
    hideReplies: true
});



/* Twitter */

/* Tabs */
$('.shortcode_tabs').each(function (index) {
    var i = 1;
    $('.shortcode_tab_item_title').each(function (
        index) {
        $(this).addClass('it' + i);
        $(this).attr('whatopen', 'body' + i);
        $(this).addClass('head' + i);
        $(this).parents('.shortcode_tabs').find(
            '.all_heads_cont').append(this);
        i++;
    });
    var i = 1;
    $('.shortcode_tab_item_body').each(function (
        index) {
        $(this).addClass('body' + i);
        $(this).addClass('it' + i);
        $(this).parents('.shortcode_tabs').find(
            '.all_body_cont').append(this);
        i++;
    });
});
$('.shortcode_tabs .all_body_cont div:first-child')
    .addClass('active');
$(
    '.shortcode_tabs .all_heads_cont div:first-child').addClass(
    'active');

$('.shortcode_tab_item_title').click(function () {
    $(this).parents('.shortcode_tabs').find(
        '.shortcode_tab_item_body').removeClass('active');
    $(this).parents('.shortcode_tabs').find(
        '.shortcode_tab_item_title').removeClass('active');
    var whatopen = $(this).attr('data-open');
    $(this).parents('.shortcode_tabs').find('.' +
        whatopen).addClass('active');
    $(this).addClass('active');
});
/* Tabs */

/* Tooltip  */
$(function ($) {
    $('.tooltip_s').tooltip()
});
/* Tooltip  */

/* Animation */
$(window).on('scroll',function() {
    $(".animated-area").each(function () {
        if ($(window).height() + $(window).scrollTop() -
            $(this).offset().top > 0) {
            $(this).trigger("animate-it");
        }
    });
});
$(".animated-area").on("animate-it", function () {
    var cf = $(this);
    cf.find(".animated").each(function () {
        $(this).css("-webkit-animation-duration",
            "0.9s");
        $(this).css("-moz-animation-duration", "0.9s");
        $(this).css("-ms-animation-duration", "0.9s");
        $(this).css("animation-duration", "0.9s");
        $(this).css("-webkit-animation-delay", $(this).attr(
            "data-animation-delay"));
        $(this).css("-moz-animation-delay", $(this).attr(
            "data-animation-delay"));
        $(this).css("-ms-animation-delay", $(this).attr(
            "data-animation-delay"));
        $(this).css("animation-delay", $(this).attr(
            "data-animation-delay"));
        $(this).addClass($(this).attr("data-animation"));
    });
});
/* Animation */

/* Testimonials */
$(window).on('load',function() {
    $("#tr1").testimonialrotator({
        settings_slideshowTime:3
    });
});
/* Testimonials */




function twitter_slider() {


     var twitterBlock = $('.twitter-footer').find('.prlx-3');
    if (twitterBlock.length > 0) {
      var ul = twitterBlock.find(".tweet_list");
      ul.cycle({
        fx: 'fade',
        timeout: 5000,
        sync: 0,
        speed: 1000
      });
      twitterBlock.find('#prev').click(function() {
        ul.cycle('prev');
      });
      twitterBlock.find('#next').click(function() {
        ul.cycle('next');
      });
    }


}

setTimeout(twitter_slider, 1500);


    });
})(jQuery);