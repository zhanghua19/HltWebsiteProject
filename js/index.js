var $obj=null;
    var timer=null;
    var normal_show_fun=function(){
        clearInterval(timer);
        $('.side-box li').hover(function(){
                $('.side-box .side-top li').find(".none-box").css({"opacity":"0","right":"62px"})
                $('#J_sidebar .side-oper li').removeClass("curr");
                $("#J_sidebar .side-oper li.side-cart").removeClass("selected");
                $obj=$(this);
                clearTimeout(timer);
                timer=setTimeout(function(){
                    $obj.addClass("curr");
                    if($obj.hasClass("side-cart")){
                        if($obj.find(".carttime").html()=="" || $obj.find("em.cartnum").html()=="0"){
                            $('.carttime').hide();
                            return;
                        }
                    }
                    if(($obj.hasClass("side-backtop") && $obj.find("a.links").css("display")=="none")||($obj.hasClass("side-cart") && $obj.find("#side-empty").css("display")=="block")){
                        return;
                    }else{
					  if($obj.hasClass("side-ad")){
                    $obj.find(".tab-tips").css({"opacity":"1","display":"none","right":"78px","top":"-50px"});//充值框是right:250px
                        $obj.find(".tab-tips").animate({
                            right: 36,opacity: 'show'//充值框是right:36
                        }, 300);
                }else{
                        $obj.find(".tab-tips").css("opacity","1");
                        $obj.find(".tab-tips").animate({
                            right: 36,opacity: 'show'
                        }, 300);
                    }
					}
                },100);
                if($obj.hasClass("side-user")){
                    $obj.find(".close").on('click',function(){
                        $obj.find(".tab-tips").css({"opacity":"0","display":"none","right":"62px"});
                    })
                }
				
            },
            function(){
                clearTimeout(timer);
                timer=setTimeout(function(){
                    $obj.removeClass("curr");
                    $obj.find(".tab-tips").css({"opacity":"0","display":"none","right":"62px"});
                    if($obj.hasClass("side-cart")){
                        $obj.removeClass("selected");
                    }
                },100);
            }
        )