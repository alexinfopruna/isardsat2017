jQuery(function ($) {
  //  $(".team-boxes").attr("id","team-boxesz")
   //  jQuery("#pageloader").hide();
     jQuery(".vntd-team-carousel").css('height','auto');
     jQuery(".team-boxes").css('height','auto');
     jQuery(".team-boxes").css('height','auto');
    var hmin=$(".team-boxes").height() + 150;
jQuery(".vntd-team-carousel").height("695");
   
    jQuery(".team-boxes").on('initialize.owl.carousel', function( event ){
});
    
    // Scroll back to top	
    function WPEXBackTopScroll() {

        $('a[href=#top]').on('click', function () {
            $('html, body').animate({scrollTop: 0}, 'normal');
            return false;
        });

    }

    // Scroll to comments	
    function WPEXCommentScroll() {

        $('.comment-scroll a').click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 'normal');
        });

    }

    // Responsive navbar
    function WPEXResponsiveNav() {
        var nav = $('#site-navigation'), button, menu;
        $('.nav-toggle').on('click', function () {
            $('.nav-menu').toggleClass('toggled-on');
            $('.nav-toggle').find('.toggle-icon').toggleClass('icon-arrow-down icon-arrow-up');
        });
    }

    //Toggle sidebar
    $('a#toggle-btn').click(function () {
        $('div#toggle-wrap').slideToggle();
        $(this).find('i').toggleClass('icon-reorder icon-remove');
    })

    // Masonry Widths
    function WPEXMasonry() {
        var $windowWidth = $(window).width();
        var $gridWidth = $('.grid').width();
        var $colWidth = $windowWidth / 240;
        var $gutter = 20;
        var $cols = 490;
        
        if ($.browser.msie && parseInt($.browser.version, 10) === 8) {

            $('.grid').masonry({
                itemSelector: '.loop-entry',
                gutterWidth: 30,
                columnWidth: 240,
                isAnimated: false,
              //  isFitWidth: true
            });

            // Decent browsers		
        } else {



           if ($windowWidth > 959 && $windowWidth <= 1024) {
                var $colWidth = ($windowWidth - 550) / 2;
                $('.grid').masonry({
                    itemSelector: '.loop-entry',
                    gutterWidth: 20,
                    columnWidth: $colWidth,
                    isAnimated: true,
                });
                $('.loop-entry').width($colWidth);

            } else if ($windowWidth > 700 && $windowWidth <= 959) {
                $colWidth = ($windowWidth - 120) / 3;
                $('.grid').masonry({
                    itemSelector: '.loop-entry',
                    gutterWidth: 20,
                    columnWidth: $colWidth,
                    isAnimated: true,
                   // isFitWidth: true
                });
                $('.loop-entry').width($colWidth);


            } else if ($windowWidth > 400 && $windowWidth < 700) {
                $colWidth = ($windowWidth - 100) / 2;
                $('.grid').masonry({
                    itemSelector: '.loop-entry',
                    gutterWidth: 20,
                    columnWidth: $colWidth,
                    isAnimated: true,
                   // isFitWidth: true
                });
                $('.loop-entry').width($colWidth);

            } else if ($windowWidth > 1024 && $windowWidth < 1300) {
            $colWidth = ($windowWidth - 590) / 3;
            $('.grid').masonry({
                    itemSelector: '.loop-entry',
                    gutterWidth : $gutter,
                   columnWidth: $colWidth,
                    isAnimated: true,
                    //isFitWidth: true
                });
                $('.loop-entry').width($colWidth);
        
            } else if ($windowWidth > 1301 && $windowWidth < 1550) {
            $colWidth = ($windowWidth - 620) / 4;
            
            $('.grid').masonry({
                    itemSelector: '.loop-entry',
                    gutterWidth : $gutter,
                    
                   columnWidth: $colWidth,
                    isAnimated: true,
                   // isFitWidth: true
                });
                $('.loop-entry').width($colWidth);
        }else if ($windowWidth > 1501 && $windowWidth < 1750) {
            $colWidth = ($windowWidth - 650) / 5;
            
            $('.grid').masonry({
                    itemSelector: '.loop-entry',
                    gutterWidth : $gutter,
                   columnWidth: $colWidth,
                    isAnimated: true,
                    //isFitWidth: true
                });
                $('.loop-entry').width($colWidth);
        }
            else {
                var $colWidth = ($windowWidth - $cols) / 7;
                $colWidth = 240;
                $('.grid').masonry({
                    itemSelector: '.loop-entry',
                    gutterWidth : $gutter,
                   columnWidth: $colWidth,
                    isAnimated: true,
                   // isFitWidth: true
                });
                $('.loop-entry').width($colWidth);
            }
        }
    }

    $(document).ready(function () {
        WPEXBackTopScroll();
        WPEXCommentScroll();
        WPEXResponsiveNav();
        WPEXMasonry();
        
        $(".member-all-button, #team .filter-group-link ").click(function(){
            var h;
            h=695;
            //alert(h +" + "+ hmin);
            $(".vntd-team-carousel").toggleClass("team-all");
            $("#team .filter-group-link").toggleClass("team-all");
            $(".member-all-button").toggleClass("team-all");
            
            if ($(".vntd-team-carousel").hasClass("team-all")){
                $(".vntd-team-carousel").css("height", hmin);
            }else {
                $(".vntd-team-carousel").css("height",h);
            }
        });
    });


    $(window).load(function () {
        WPEXMasonry();
    });


    $(window).resize(function () {
        WPEXMasonry();
    });

    if (document.addEventListener) {
        window.addEventListener("orientationchange", function () {
            WPEXMasonry();
        });

        window.addEventListener("resize", function () {
            WPEXMasonry();
        });
    }
    
            
               alert("jjj");
      $("map").imageMapResize();
});
