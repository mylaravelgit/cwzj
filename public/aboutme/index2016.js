// 图片缓存
$(function() {
    $(".loadimg").lazyload({
        effect : "fadeIn",
        threshold : 100
    });
});
// 大图轮播
$(function(){
    var timer;
    $(".slider_list ul li").mouseenter(function(){
        var index=$(".slider_list ul li").index(this);
        $(this).css("padding-left","0px");
        $(this).find("b").attr("class","selectedB");
        clearTimeout(timer);
        $(".classify div").eq(index).css({visibility:"visible"}).siblings().css("visibility","hidden");
        $(this).addClass('lunboone').siblings().removeClass();
    });
    $(".slider_list ul li").mouseleave(function(){
        var index=$(".slider_list ul li").index(this);
        $(this).css("padding-left","0px");
        $(this).attr("class","");
        $(this).find("b").attr("class","");
        timer=setTimeout(function(){
            $(".classify div").eq(index).css("visibility","hidden");
        },300);
    });
    $(".classify div").each(function(){
        $(".classify div").hover(function(){
            var index=$(".classify div").index(this);
            clearTimeout(timer);
            $(this).css("visibility","visible");
            $(".slider_list ul li").eq(index).css("padding-left","10px").find("b").attr("class","selectedB");
        },function(){
            var index=$(".classify div").index(this);
            $(".classify div").css("visibility","hidden");
            $(".slider_list ul li").eq(index).css("padding-left","0").find("b").attr("class","");
        })
    });
});
$(function(){
    var ali=$('.slider_list li');
    var aPage=$('.slider_back div');
    var aslide_img=$('.slider_center li');
    var width=$('.slider_center').width();
    var iNow=0;
    var timer;
    var timerout;
    function slide(index){
        var Left=-index*width;
        iNow=index;
        $(".slider_center ul").stop(true,false).animate({"left":Left},300);
    }
    function autoRun(){
        slide(iNow);
    };
});

//banner
$(function() {
    jQuery(".fullSlide").slide({ titCell:".hd ul", mainCell:".bd ul", effect:"fold",  autoPlay:true, autoPage:true, trigger:"mouseover" });
})
