(function ($) {
    "use strict";
    

    $(document).ready(function(){

        $.ajax({
            type:"POST",
            url:"/city",
            success:function(hasil_kota)
            {
                $("select[name=nama_kota]").html(hasil_kota);
            }
        });

        $("select[name=nama_kota]").on("change",function(){

            var id_kota_terpilih = $("option:selected",this).attr("id_kota");

            var prov = $("option:selected",this).attr("provinsi");
            var tipe = $("option:selected",this).attr("tipe");
            var kota = $("option:selected",this).attr("kota");
            var kode_pos = $("option:selected",this).attr("kode_pos");
            
            $.ajax({
                type:"POST",
                url:"/subdistrict",
                data:"id_kota="+id_kota_terpilih,
                success:function(hasil_kecamatan)
                {
                    $("select[name=nama_kecamatan]").html(hasil_kecamatan);

                    $("input[name=provinsi]").val(prov);
                    $("input[name=tipe]").val(tipe);
                    $("input[name=kota]").val(kota);
                    $("input[name=kode_pos]").val(kode_pos);

                }
            });
        });

        $("select[name=nama_kecamatan]").on("change",function(){

            var kecamatan = $("option:selected",this).attr("kecamatan");

            $("input[name=kecamatan]").val(kecamatan);

        });


        $("select[name=nama_ekspedisi]").on("change",function(){

            var ekspedisi_terpilih = $("select[name=nama_ekspedisi]").val();

            var kecamatan_terpilih = $("option:selected", "select[name=nama_kecamatan]").attr("id_kecamatan");

            var total_berat = $("input[name=berat]").val();

            $.ajax({
                type:"POST",
                url:"/ongkir",
                data:"ekspedisi="+ekspedisi_terpilih+"&kecamatan="+kecamatan_terpilih+"&berat="+total_berat,
                success:function(hasil_paket)
                {
                    $("select[name=nama_paket]").html(hasil_paket);

                    $("input[name=ekspedisi]").val(ekspedisi_terpilih);
                }

            });
        });

        $("select[name=nama_paket]").on("change",function(){

            var paket = $("option:selected",this).attr("paket");
            var ongkir = $("option:selected",this).attr("ongkir");
            var estimasi = $("option:selected",this).attr("estimasi");
            let total_belanja = $("input[name=total_belanja]").val();

            $("input[name=paket]").val(paket);
            $("input[name=ongkir]").val(ongkir);
            $("input[name=estimasi]").val(estimasi);

            let total = parseInt(total_belanja) + parseInt(ongkir);
            $("input[name=total]").val(total);

        });

        function fetch_data(sort_type='', column_name=''){
            $.ajax({
                url:BASE_URL+"/my-orders_ajax?sortby="+column_name+"&sorttype="+sort_type,
                success:function(data){
                    $('.x_content tbody').html(data);
                }
            })
        }

        $(document).on('click', '.exam_sorting', function(){
            var column_name = $(this).data('column_name');
            var order_type = $(this).data('sorting_type');
            var reverse_order = '';
            if(order_type == 'asc')
            {
                $(this).data('sorting_type', 'desc');
                reverse_order = 'desc';
            }
            else
            {
                $(this).data('sorting_type', 'asc');
                reverse_order = 'asc';
            }
            $('#hidden_column_name').val(column_name);
            $('#hidden_sort_type').val(reverse_order);
            fetch_data(reverse_order, column_name);
        });


    });
// JS Index
//----------------------------------------
// 1. preloader active
// 2.sticky menu
// 3. Animate the scroll to top
// 4. mobile-menu(mean-menu)
// 5. mobile-menu-sidebar
// 6. background image
// 7 quantity input arrow
// 8. header-shopping-cart
// 9. header-setting
// 10. header-language
// 11. header-currency
// 12. header-search
// 13. slider - active
// 14. showlogin toggle function
// 15. showcoupon toggle function
// 16. Create an account toggle function
// 17. Create an account toggle function
// 18. product-active
// 19. product-active2
// 20. product-active4
// 21. product-items-active
// 22. news-post-active
// 23. home5-news-post-active
// 24. brand-active
// 25. shop-product-slider-active
// 26. home2-product-active
// 27. home3-best-product-left-active
// 28. home2-best-product-left-active
// 29. product-carousal-active
// 30. blog-post-active
// 31. wow animation  active
// 32. nice selection
// 33. Countdown
// 34. news-like-post-active
// 35. accordion(sidebar)
// 36. Range Slider Js (shop sidebar)
// 37. product-zoom 
// 38. home3-best-product-left-active
//-------------------------------------------------

//Bawaan Costume.js
    loadcart();
    loadwishlist();

    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

    function loadcart()
    {
        $.ajax({
            method: "GET",
            url: "/load-cart-data",
            success: function(response)
            {
                $('.cart-count').html('');
                $('.cart-count').html(response.count);
            }
        });
    }

    function loadwishlist()
    {
        $.ajax({
            method: "GET",
            url: "/load-wishlist-count",
            success: function(response)
            {
                $('.wishlist-count').html('');
                $('.wishlist-count').html(response.count);
            }
        });
    }

    $('.addToCartBtn').click(function(e){
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();
        var product_qty = $(this).closest('.product_data').find('.qty-input').val();
    
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
            method: "POST",
            url: "/add-to-cart",
            data: {
                'product_id': product_id,
                'product_qty': product_qty,
            },
            success: function (response){
                swal(response.status);
                loadcart(); 
            }
        });
    });

    $('.addToWishlist').click(function(e){
        e.preventDefault();

        var product_id = $(this).closest('.product_data').find('.prod_id').val();

        $.ajax({
            method: "POST",
            url: "/add-to-wishlist",
            data: {
                'product_id': product_id,
            },
            success: function (response){
                swal(response.status);
                loadwishlist(); 
            }
        });
    });


    // $('.increment-btn').click(function(e){
    $(document).on('click', '.increment-btn', function(e){
        e.preventDefault();

        var inc_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(inc_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value < 10)
        {
            value++;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });

    // $('.decrement-btn').click(function(e){
    $(document).on('click', '.decrement-btn', function(e){
        e.preventDefault();

        var dec_value = $(this).closest('.product_data').find('.qty-input').val();
        var value = parseInt(dec_value, 10);
        value = isNaN(value) ? 0 : value;
        if(value > 1)
        {
            value--;
            $(this).closest('.product_data').find('.qty-input').val(value);
        }
    });

    // $('.delete-cart-item').click(function(e){
    $(document).on('click', '.delete-cart-item', function(e){
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
            method: "POST",
            url: "delete-cart-item",
            data:{
                'prod_id' :prod_id,
            },
            success: function(response){
                // window.location.reload();
                loadcart();
                $('.cartitems').load(location.href + " .cartitems");
                swal("", response.status, "success");
            }
        });
    });

    // $('.remove-wishlist-item').click(function(e){
    $(document).on('click', '.remove-wishlist-item', function(e){
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        $.ajax({
            method: "POST",
            url: "delete-wishlist-item",
            data:{
                'prod_id' :prod_id,
            },
            success: function(response){
                // window.location.reload();
                loadwishlist();
                $('.wishlistitems').load(location.href + " .wishlistitems");
                swal("", response.status, "success");
            }
        });
    });

    // $('.changeQuantity').click(function(e){
    $(document).on('click', '.changeQuantity', function(e){
        e.preventDefault();

        var prod_id = $(this).closest('.product_data').find('.prod_id').val();
        var qty = $(this).closest('.product_data').find('.qty-input').val();
        
        $.ajax({
            method: "POST",
            url: "update-cart",
            data: {'prod_id' : prod_id,
                    'prod_qty' : qty
                },
            success: function(response){
                $('.cartitems').load(location.href + " .cartitems");
                // window.location.reload();
            }
        });
    });
    ////////////////////////////////////////////////////////////
    
   
//Penutup Bawaan Costume.js

// 1. preloader active
// --------------------------------------------------------------------------
$(window).on("load", function () {
    $("#loading").fadeOut(0);
});



// 2.sticky menu
//---------------------------------------------------------------------------
var wind = $(window);
var sticky = $("#header-sticky");
wind.on('scroll', function () {
    var scroll = $(wind).scrollTop();
    if (scroll < 50) {
        sticky.removeClass("sticky-menu");
    } else {
        $("#header-sticky").addClass("sticky-menu");
    }
});



// 3. Animate the scroll to top
// --------------------------------------------------------------------------
// Show or hide the sticky footer button
$(window).on('scroll', function() {
    if($(this).scrollTop() > 600){
        $('#scroll').fadeIn(1000);
    } else{
        $('#scroll').fadeOut(1000);
    }
});

$('#scroll').on('click', function(event) {
    event.preventDefault();
    
    $('html, body').animate({
        scrollTop: 0,
    }, 1500);
});



// 4. mobile-menu(mean-menu)
//---------------------------------------------------------------------------
$("#mobile-menu").meanmenu({
    meanMenuContainer: ".mobile-menu",
    meanScreenWidth: "991",
});



// 5. mobile-menu-sidebar
//---------------------------------------------------------------------------
$(".mobile-menubar").on("click", function(){
    $(".side-mobile-menu").addClass('open-menubar');
    $(".body-overlay").addClass("opened");
});
$(".close-menu").click(function(){
    $(".side-mobile-menu").removeClass('open-menubar');
    $(".body-overlay").removeClass("opened");
});

$(".body-overlay").on("click", function () {
    $(".side-mobile-menu").removeClass('open-menubar');
    $(".body-overlay").removeClass("opened");
});



// 6. background image
//---------------------------------------------------------------------------
$("[data-background]").each(function (){
    $(this).css("background-image","url(" + $(this).attr("data-background") + ")");
});



// 7 quantity input arrow
//---------------------------------------------------------------------------      
$('.quantity-input').inputarrow({
    renderPrev: function(input) {
        return $('<span class="custom-next"><i class="fal fa-minus-circle"></i></span>').insertAfter(input);
    },
    renderNext: function(input) {
        return $('<span class="custom-prev"><i class="fal fa-plus-circle"></i></span>').insertBefore(input);
    },
    disabledClassName: 'enable'
});



// 8. header-shopping-cart
//---------------------------------------------------------------------------
$(".header-shopping-cart").on('click',function(){
    $(".header-shopping-cart-details").toggle();
});



// 9. header-setting
//---------------------------------------------------------------------------
$(".header-setting").on('click',function(){
    $(".header-setting-content").toggle();
});



// 10. header-language
//---------------------------------------------------------------------------
$(".language").on('click',function(){
    $(".show-language").toggle();
});



// 11. header-currency
//---------------------------------------------------------------------------
$(".currency").on('click',function(){
    $(".show-currency").toggle();
});



// 12. header-search
//---------------------------------------------------------------------------
$(".header-search").on("click",function(){
    $(".header-search-details").addClass('open-search-info');
});
$(".close-icon").click(function(){
    $(".header-search-details").removeClass('open-search-info');

});



// 13. slider - active
//---------------------------------------------------------------------------
function mainSlider() {
    var BasicSlider = $('.slider-active');

    BasicSlider.on('init', function (e, slick) {
        var $firstAnimatingElements = $('.single-slider:first-child').find('[data-animation]');
        doAnimations($firstAnimatingElements);
    });

    BasicSlider.on('beforeChange', function (e, slick, currentSlide, nextSlide) {
        var $animatingElements = $('.single-slider[data-slick-index="' + nextSlide + '"]').find('[data-animation]');
        doAnimations($animatingElements);
    });

    BasicSlider.slick({
        dots: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: false,
        responsive: [
            { breakpoint: 767, settings: {} }
        ]
    });

    function doAnimations(elements) {
        var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        elements.each(function () {
            var $this = $(this);
            var $animationDelay = $this.data('delay');
            var $animationType = 'animated ' + $this.data('animation');
            $this.css({
                'animation-delay': $animationDelay,
                '-webkit-animation-delay': $animationDelay
            });
            $this.addClass($animationType).one(animationEndEvents, function () {
                $this.removeClass($animationType);
            });
        });
    }
}
mainSlider();



// 14. showlogin toggle function
// ---------------------------------------------------------------------------
$('#login').on('click', function () {
	$('#checkout-login').slideToggle(900);
});



// 15. showcoupon toggle function
// ---------------------------------------------------------------------------
$('#couponshow').on('click', function () {
	$('#checkout-coupon').slideToggle(900);
});



// 16. Create an account toggle function
// ---------------------------------------------------------------------------
$('#cbox-account').on('click', function () {
	$('#cbox-account-info').slideToggle(900);
});



// 17. Create an account toggle function
// ---------------------------------------------------------------------------
$('#ship-box').on('click', function () {
	$('#ship-box-info').slideToggle(1000);
});



// 18. product-active
//---------------------------------------------------------------------------
$('.product-active').slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 475,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});


// 19. product-active2
//---------------------------------------------------------------------------
$('.product-active2').slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay:true,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 475,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});



// 20. product-active4
//---------------------------------------------------------------------------
$('.product-active4').slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 5,
    autoplay:true,
    slidesToScroll: 1,
    prevArrow:'<b><i class="fas fa-angle-left l-a"></i></b>',
    nextArrow:'<b><i class="fas fa-angle-right r-a"></b>',
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 500,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});



// 21. product-items-active
//---------------------------------------------------------------------------
$('.product-items-active').slick({
    dots: false,
    arrows: false,
    infinite: true,
    autoplay:true,
    slidesToShow: 5,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint:991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 575,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 475,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});



// 22. news-post-active
//---------------------------------------------------------------------------
$('.news-post-active').slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});



// 23. home5-news-post-active
//---------------------------------------------------------------------------
$('.home5-news-post-active').slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 1400,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});


// 24. brand-active
//---------------------------------------------------------------------------
$('.brand-active').slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 5,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 700,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 567,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 420,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});



// 25. shop-product-slider-active
//---------------------------------------------------------------------------
$('.shop-product-slider-active').slick({
    dots: false,
    arrows: false,
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 1199,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 475,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});



// 26. home2-product-active
//---------------------------------------------------------------------------
$('.home2-product-active').slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 3,
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
            }
        },
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 3,
            }
        },
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 475,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});



// 27. home3-best-product-left-active
//---------------------------------------------------------------------------
$('.home3-best-product-left-active').slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 767,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});



// 28. home2-best-product-left-active
//---------------------------------------------------------------------------
$('.home2-best-product-left-active').slick({
    dots: false,
    arrows: false,
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 475,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});



// 29. product-carousal-active
//---------------------------------------------------------------------------
$('.product-carousal-active').slick({
    dots: false,
    arrows: true,
    prevArrow:'<b><i class="icon-chevron-left l-a"></i></b>',
    nextArrow:'<b><i class="icon-chevron-right r-a"></b>',
    infinite: true,
    slidesToShow: 3,
    slidesToScroll:1,
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 475,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});


// 30. blog-post-active
//---------------------------------------------------------------------------
$('.blog-post-active').slick({
    dots: false,
    arrows: true,
    prevArrow:'<b><i class="icon-chevron-left l-a"></i></b>',
    nextArrow:'<b><i class="icon-chevron-right r-a"></b>',
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    responsive: [
        {
            breakpoint: 475,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});


// 31. wow animation  active
// ---------------------------------------------------------------------------
new WOW().init();


// 33. Countdown
//---------------------------------------------------------------------------
$('[data-countdown]').each(function() {
    var $this = $(this), finalDate = $(this).data('countdown');
    $this.countdown(finalDate, function(event) {
        $this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Min</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec</p></span>'));
    });
});


// 34. news-like-post-active
//---------------------------------------------------------------------------
$('.news-like-post-active').slick({
    dots: false,
    arrows: true,
    prevArrow:'<b><i class="icon-chevron-left l-a"></i></b>',
    nextArrow:'<b><i class="icon-chevron-right r-a"></b>',
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 2,
    responsive: [
        {
            breakpoint: 991,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
            }
        },
        {
            breakpoint: 400,
            settings: {
                slidesToShow: 1,
            }
        }
    ]
});



// 35. accordion(sidebar) 
//---------------------------------------------------------------------------
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}




// 36. Range Slider Js (shop sidebar)
//---------------------------------------------------------------------------
if ($("#slider-range").length) {
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 500,
        values: [0, 400.00],
        slide: function (event, ui) {
            $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " - $" + $("#slider-range").slider("values", 1));

}


// 37. product-zoom 
//---------------------------------------------------------------------------
    $(".product-zoom").elevateZoom({
        zoomType: "inner",
        cursor: "crosshair"
    });


// 38. home3-best-product-left-active
//---------------------------------------------------------------------------
$('.testimonial-active').slick({
    dots: true,
    arrows: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
});



})(jQuery);	  
