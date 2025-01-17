
var opencart_responsive_current_width = window.innerWidth;
var opencart_responsive_min_width = 992;
var opencart_responsive_mobile = opencart_responsive_current_width < opencart_responsive_min_width;
// var header_link_default = $('#_desktop_link_menu').html(); 

$(document).ready(() => {

    $('#siteloader').fadeOut();
    $('#spin-wrapper').fadeOut();

    var headerHeight = $('#header').height();
    var navHeight = $('#header .header-top').height();
    $(window).scroll(function(){
        if ($(window).scrollTop() > headerHeight) {
            $('.header-top').addClass('fixed-header');
        }
        else {
            $('.header-top').removeClass('fixed-header');
        }
    });

     $('.dropdown').on('show.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(600);
    });
    $('.dropdown').on('hide.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(600);
    });

    /* SlideTop*/
    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            $('#slidetop').fadeIn(500);
        } else {
            $('#slidetop').fadeOut(500);
        }
    });

    $('#slidetop').click(function(e) {
        e.preventDefault();     
        $('html, body').animate({scrollTop: 0}, 800);
    });   

    var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent);
    if(!isMobile) {
        if($(".parallax").length) {
            $(".parallax").sitManParallex({  invert: false });
        };
    } else {
        $(".parallax").sitManParallex({  invert: true });
    }

    if($('.ishiparallaxbannerblock').data('deal') == '1') {
        var time = $('.ishiparallaxbannerblock').data('counter');
        var container = $('.ishiparallaxbannerblock').find('#parallaxcountdown');
        
         $(container).countdown(time, function(event) {
             $(this).find(".countdown-days .data").html(event.strftime('%D'));
             $(this).find(".countdown-hours .data").html(event.strftime('%H'));
             $(this).find(".countdown-minutes .data").html(event.strftime('%M'));
             $(this).find(".countdown-seconds .data").html(event.strftime('%S'));
         });
     }

    if($('.block-newsletter').data('deal') == '1') {
        var time = $('.block-newsletter').data('counter');
        var container = $('.block-newsletter .counter-inner').find('#newslettercountdown');
         $(container).countdown(time, function(event) {
             $(this).find(".countdown-days .data").html(event.strftime('%D'));
             $(this).find(".countdown-hours .data").html(event.strftime('%H'));
             $(this).find(".countdown-minutes .data").html(event.strftime('%M'));
             $(this).find(".countdown-seconds .data").html(event.strftime('%S'));
         });
     }

    $('#menu-icon').on('click', function () {
        $("#mobile_top_menu_wrapper").animate({
            width: "toggle"
        });
        $('#menu_wrapper').toggleClass('active');
    });

    $('#top_menu_closer svg').on('click', function () {
        $("#mobile_top_menu_wrapper").animate({
            width: "toggle"
        });
        $('#menu_wrapper').toggleClass('active');
    });

    $('#menu_wrapper').on('click', function () {
        $("#mobile_top_menu_wrapper").animate({
            width: "toggle"
        });
        $('#menu_wrapper').toggleClass('active');
    });

    $('body').on('click', function () {
        $('.ajaxishi-search').hide(); 
    });

    if (opencart_responsive_mobile) {
        toggleMobileStyles();
    }
    
    adjustTopMenu();

    jQuery(".product-list-js .product-layout, #product-info .product-right,.ishispecialblock .product-layout .product-thumb,.feature_container .product-container,#product-list .product-container,#product-list .product-container,.latestproduct .product-layout,.ishiproductsblock .item,.related-product .product-thumb,.ishibannerwithproductblock .product-container,.ishispecial .product-thumb,#product-list .product-container,.ishifeaturedblock .product-container").each(function() {
      
        var ishicategorytime = $(this).data('countdowntime');
        var ishicategorycontainer = $(this).find('.countdown-container');
         $(ishicategorycontainer).countdown(ishicategorytime, function (event) {
            $(this).find(".countdown-days .data").html(event.strftime('%D'));
            $(this).find(".countdown-hours .data").html(event.strftime('%H'));
            $(this).find(".countdown-minutes .data").html(event.strftime('%M'));
            $(this).find(".countdown-seconds .data").html(event.strftime('%S'));
         
        });
    });

    $('#newlatest').owlCarousel({
        loop:false,
        nav:true,    
        dots:false,   
        margin:15,
        rewind: true,
        rtl: $('html').attr('dir') == 'rtl'? true : false,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:2
            },
            544:{
                items:2
            },
            768:{ 
                items:3
            },
            992:{
                items:1
            },
            1200:{
                items:2
            }
        }
    });

    $('#bestseller').owlCarousel({
        loop:false,
        nav:true,    
        dots:false,  
        margin:15,
        rewind: true,
        rtl: $('html').attr('dir') == 'rtl'? true : false,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:2
            },
            544:{
                items:2
            },
            768:{ 
                items:3
            },
            992:{
                items:1
            },
            1200:{
                items:2
            }
        }
    }); 
 
$(window).on('resize', function() {
    var _cw = opencart_responsive_current_width;
    var _mw = opencart_responsive_min_width;
    var _w = window.innerWidth;
    var _toggle = (_cw >= _mw && _w < _mw) || (_cw < _mw && _w >= _mw);
    opencart_responsive_current_width= _w;
    opencart_responsive_mobile = opencart_responsive_current_width < opencart_responsive_min_width;
    if (_toggle) {
        toggleMobileStyles();
    }
});     

function adjustTopMenu() {
    if (window.matchMedia('(min-width: 1200px)').matches) {
        $( "#_desktop_top_menu #top-menu .top_level_category" ).each(function( index ) {
          var subdiv = $(this).find('.sub-menu .category_dropdownmenu').length;
          var submenu = $(this).find('.sub-menu');
          if (subdiv == 1){
                submenu.css('width','230px');   
            }
            else{
                submenu.css('width',subdiv*200+30+'px');
            }
        });
    }
    else if (window.matchMedia('(min-width: 991px)').matches) {
        $( "#_desktop_top_menu #top-menu .top_level_category" ).each(function( index ) {
          var subdiv = $(this).find('.sub-menu .category_dropdownmenu').length;
          var submenu = $(this).find('.sub-menu');
          if (subdiv == 1){
                submenu.css('width','230px');
            } else if(subdiv < 4) {
                submenu.css('width',subdiv*200+30+'px');
            }
            else{
                submenu.css('width','830px');
            }
        });
    }
    else if (window.matchMedia('(max-width: 991px)').matches) {
        $( "#_mobile_top_menu #top-menu .top_level_category" ).each(function( index ) {
          var subdiv = $(this).find('.sub-menu .category_dropdownmenu').length;
          var submenu = $(this).find('.sub-menu');
          if (subdiv == 1){
                submenu.css('width','auto');   
            }
            else{
                submenu.css('width','auto');
            }
        });
    }

}

function myFunction(x) {
        if (x.matches) {
            var list = $('.headerlink-dropdown').find('.small').html();
            $('.viewmore-container').remove();
            $('.link_container').append(list);
            $('.link_container').removeClass('large');
            $('.link_container').addClass('small');
            $('#header_ishiheaderlinks').append('<span class="link-icon"><svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="link_icon" viewBox="0 0 699 699"><title>link_icon</title><path d="M12.03,120.303h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03c-6.641,0-12.03,5.39-12.03,12.03C0,114.913,5.39,120.303,12.03,120.303z"></path><path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03S379.58,180.455,372.939,180.455z"></path><path d="M372.939,264.667H132.333c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h240.606c6.641,0,12.03-5.39,12.03-12.03C384.97,270.056,379.58,264.667,372.939,264.667z"></path></symbol></svg><svg class="icon" viewBox="0 0 30 30"><use xlink:href="#link_icon" x="22%" y="25%"></use></svg></span>')
                .append('<h4 class="small-title">' + $('#menu_text').text() + '</h4>');

        } else {
            $('#header_ishiheaderlinks .link-icon').remove();
            $('#header_ishiheaderlinks .small-title').remove();
            $('.link_container').removeClass('small');
            $('.link_container').addClass('large');
            var bigList = $('<ul class="bullet large link_container"></ul>');
            var smallList = $('<ul class="small"></ul>');
            if ($('#_desktop_link_menu ul.link_container li').length <= 5)
                return;
            $.each($('#_desktop_link_menu ul.link_container li'), function (i, val) {
                if (i < 5) {
                    bigList.append(val);
                } else {
                    smallList.append(val);
                }
            });
            bigList.append('<li class="viewmore-container"><a class="viewmore" href="javascript:void(0)">' + $('#view_text').text() + '</a><div class="headerlink-dropdown"></div></li>');
            bigList.find('.headerlink-dropdown').append(smallList);
            $('.link_container').replaceWith(bigList);
        }
    }
    $('#_desktop_link_menu').show();
    var x = window.matchMedia("(max-width : 991px)");
    myFunction(x); // Call listener function at run time
    x.addListener(myFunction); // Attach listener function on state changes


    $('#_desktop_link_menu').show();
    var x = window.matchMedia("(max-width : 991px)");
    myFunction(x); // Call listener function at run time
    x.addListener(myFunction); // Attach listener function on state changes

    if(getTheCookie("ishioffersblock") != "true") {
        $("#ishioffersblock").show();
    } else {
         $("#ishioffersblock").hide();
    }
    $("#ishioffersblock button").click(function(){
      $("#ishioffersblock").hide();
      setTheCookie("ishioffersblock", "true", 14);
    });


    if(getTheCookie("cookieconsent") != "true") {
        $("#cookieconsent").show();
    } else {
         $("#cookieconsent").hide();
    }
    $("#cookieconsent button").click(function(){
      $("#cookieconsent").hide();
      setTheCookie("cookieconsent", "true", 14);
    });


    if(getTheCookie("opencartpopup") != "true") {
        $("#opencartpopup").show();
    } else {
         $("#opencartpopup").hide();
    }
    // $("#opencartpopup #checkbox").click(function(){
    //   // $("#opencartpopup").hide();
    //   setTheCookie("opencartpopup", "true", 14);
    // });

});


function setTheCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getTheCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}
function eraseTheCookie(name) {
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

function myFunction(x) {
        if (window.matchMedia('(max-width: 1199px)').matches) {
        if(!$("#header_ishiheaderlinks .small-title").length) {
            var list = $('.headerlink-dropdown').find('.small').html();
            $('.viewmore-container').remove();
            $('.link_container').append(list);
            $('.link_container').removeClass('large');
            $('.link_container').addClass('small');
            $('#header_ishiheaderlinks').append('<span class="link-icon"><svg xmlns="http://www.w3.org/2000/svg" style="display: none;"><symbol id="link_icon" viewBox="0 0 699 699"><title>link_icon</title><path d="M12.03,120.303h360.909c6.641,0,12.03-5.39,12.03-12.03c0-6.641-5.39-12.03-12.03-12.03H12.03c-6.641,0-12.03,5.39-12.03,12.03C0,114.913,5.39,120.303,12.03,120.303z"></path><path d="M372.939,180.455H12.03c-6.641,0-12.03,5.39-12.03,12.03s5.39,12.03,12.03,12.03h360.909c6.641,0,12.03-5.39,12.03-12.03S379.58,180.455,372.939,180.455z"></path><path d="M372.939,264.667H132.333c-6.641,0-12.03,5.39-12.03,12.03c0,6.641,5.39,12.03,12.03,12.03h240.606c6.641,0,12.03-5.39,12.03-12.03C384.97,270.056,379.58,264.667,372.939,264.667z"></path></symbol></svg><svg class="icon" viewBox="0 0 30 30"><use xlink:href="#link_icon" x="22%" y="25%"></use></svg></span>')
                .append('<h4 class="small-title">' + $('#menu_text').text() + '</h4>');
        }

        } else {
            $('#header_ishiheaderlinks .link-icon').remove();
            $('#header_ishiheaderlinks .small-title').remove();
            $('.link_container').removeClass('small');
            $('.link_container').addClass('large');
            var bigList = $('<ul class="bullet large link_container"></ul>');
            var smallList = $('<ul class="small"></ul>');
            if ($('#_desktop_link_menu ul.link_container li').length <= 5)
                return;
            $.each($('#_desktop_link_menu ul.link_container li'), function (i, val) {
                if (i < 5) {
                    bigList.append(val);
                } else {
                    smallList.append(val);
                }
            });
            bigList.append('<li class="viewmore-container"><a class="viewmore" href="javascript:void(0)">' + $('#view_text').text() + '</a><div class="headerlink-dropdown"></div></li>');
            bigList.find('.headerlink-dropdown').append(smallList);
            $('.link_container').replaceWith(bigList);
        }

    }

function swapChildren(obj1, obj2)
{
    var temp = obj2.children().detach();
    obj2.empty().append(obj1.children().detach());
    obj1.append(temp);
}

function toggleMobileStyles()
{
    if (opencart_responsive_mobile) {
        $("*[id^='_desktop_']").each(function(idx, el) {
            var target = $('#' + el.id.replace('_desktop_', '_mobile_'));
            if (target.length) {
                swapChildren($(el), target);
            }
        });
    } else {
        $("*[id^='_mobile_']").each(function(idx, el) {
            var target = $('#' + el.id.replace('_mobile_', '_desktop_'));
            if (target.length) {
                swapChildren($(el), target);
            }
        });
    }
}