(function($) {
  "use strict";

    var timelineBlocks = $('.cd-timeline-block'),
        offset = 0.8;

    //hide timeline blocks which are outside the viewport
    hideBlocks(timelineBlocks, offset);

    //on scolling, show/animate timeline blocks when enter the viewport
    $(window).on('scroll', function(){
        if ($(window).scrollTop() < 46 && $(window).width() > 768) {
            $(".navbar-fixed-top").css("top", -$(window).scrollTop());
        } else {
            $(".navbar-fixed-top").css("top", "-46px");
        }
        if ($(window).width() < 768) {
            $(".navbar-fixed-top").css("top", "0");
        }
        (!window.requestAnimationFrame)
            ? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
            : window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
    });

    function hideBlocks(blocks, offset) {
        blocks.each(function(){
            ( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
        });
    }

    function showBlocks(blocks, offset) {
        blocks.each(function(){
            ( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
        });
    }

    //Quantity input increment/decrement action
    $(".quantity-input .btn").on("click", function () {
        var $this = $(this);
        var parent = $this.parents(".quantity-input");
        var input = $(parent).find("input[type='text']");
        var currentVal = parseInt($(input).val());

        if ($this.hasClass("increment"))
            $(input).val(++currentVal);

        if ($this.hasClass("decrement"))
            $(input).val(currentVal == 0 ? 0 : --currentVal);

    });

    $(".panel-title a").on("click", function() {
        $(".panel-title a").removeClass("active");
        $(this).addClass("active");
    });

    if( $("#gallery").length > 0) {
        $("#gallery").unitegallery({
            tiles_type:"nested",
            tiles_space_between_cols: 20,
            tiles_nested_optimal_tile_width: 400
        });
    };

    if( $("#gallerySecond").length > 0) {
        $("#gallerySecond").unitegallery({
            tiles_type:"nested",
            tiles_space_between_cols: 20,
            tiles_nested_optimal_tile_width: 400
        });
    };


    //Hamburger transform
    var $burger = $('.burger-container'),
        $header = $('.header-side');

    $burger.on("click", function() {
        $header.toggleClass('menu-opened');
    });

})(jQuery);