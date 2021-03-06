$(document).ready(function(){
    $("#logotipo").on("mouseover",function(){
        $("#banner h1").addClass("efeito");

    }).on("mouseout",function(){
        $("#banner h1").removeClass("efeito");
    })

    $("#input-search").on("focus",function(){
        $("li.search").addClass("ativo");
    }).on("blur",function(){
        $("li.search").removeClass("ativo");
    })
    $(".thumbnails").owlCarousel({
        loop:true,
        nav:true,
        margin: 10,
        navText:["Anterior","Próximo"],
        responsive:{
            0:{
                item:1
            },
            480:{
                item:3
            },
            768:{
                item:4
            },
            1200:{
                item:6
            }
        }
    })
    var owl = $(".thumbnails").data('owlCarousel')
    $('#btn-news-prev').on("click",function(){
        owl.prev();
    });
    $('#btn-news-next').on("click",function(){
        owl.next();
    });
    $("#page-up").on("click",function(event){
        $("html,body").animate({
            scrollTop:$("#logotipo").offset().top
        }, 500)
        event.preventDefault();
    })
    $("#btn-bars").on("click",function(){
        $("header").toggleClass("open-menu");
    })
    $("#menu-mobile-mask, .btn-close").on("click",function(){
        $("header").removeClass("open-menu");
    })
    $("#btn-search").on("click",function(){
        $("header").toggleClass("open-search");
        $("#input-search-mobile").focus();
    })
});
