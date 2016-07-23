$(function () {
    autoSlider();
    function sliderScroll(aspect) {
        var aspect = arguments[0] ? arguments[0] : 1,
            index = $(".ui-has-pager").find('.ui-pager-item .active').data("slide-index"),
            count = $("#J_homeSlider").find('.slide').length;
        $("#J_homeSlider").find('.slide').eq(index).hide();
        $(".ui-has-pager").find('.ui-pager-item').eq(index).find('.ui-pager-link').removeClass('active');
        if (aspect == 1) {
            index++;
            if (index >= count) {
                index = 0;
            }
        } else if (aspect == 2) {
            index--;
            if (index < 0) {
                index = count - 1;
            }
        }
        $("#J_homeSlider").find('.slide').eq(index).show();
        $(".ui-has-pager").find('.ui-pager-item').eq(index).find('.ui-pager-link').addClass('active');
    }

    function autoSlider() {
        var timer = setInterval(sliderScroll, 3000);
        $(".ui-wrapper").hover(function () {
            clearInterval(timer);
        }, function () {
            timer = setInterval(sliderScroll, 3000);
        });
        $(".ui-controls-direction a").click(function () {
            var action = $(this).attr('class').split(' ').pop();
            if (action == 'prev') {
                sliderScroll(2);
            }
            else if (action == 'next') {
                sliderScroll(1);
            }
            return false;
        });
    }
    var index=1;
    $("#J_homeStar .control").click(function (){
        var count=$("#J_homeStar .goods-list").find('li').length,
            pageSize= 5,
            itemWidth=248,
            page=Math.ceil(count/pageSize),
            action=$(this).data('action');
        $("#J_homeStar .control").removeClass('control-disabled');
        if(action=='prev')
        {
            index--;
            if(index<=1)
            {
                index=1;
                $('#J_homeStar .control-prev').addClass('control-disabled');
            }
        }
        else if(action=='next')
        {
            index++;
            if(index>=page)
            {
                index=page;
                $('#J_homeStar .control-next').addClass('control-disabled');
            }
        }
        $('#J_homeStar').find('.goods-list').css({
            'margin-left':-(index-1)*itemWidth*pageSize+'px',
            'width':page*itemWidth*pageSize+'px'
        });
        return false;
    });

});