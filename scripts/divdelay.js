
/* lidelay  load*/
function DivDelay(container) {
    //离屏幕下方50像素内的div加载
    var minBottom = 10;
    var srcData = new Array();
    var lastBottomX = 0;

    //will server do
    //Replace src
    var divs = $(container).find("li");
    var id = 0;
	var rects=[];
    divs.each(function () {
        id++;
        var rect = this.getBoundingClientRect();
        $(this).attr("ld", "l" + id);
        srcData[srcData.length] = { "ld": "l" + id,  "rect": rect };
    });
	divs.each(function () {
        $(this).hide();
    });
    $(window).scroll(function () {
        LoadDiv();
    });
    // do first loading
    LoadDiv();
	
	function LoadDiv() {
        var bottomX = $(window).height() + $(window).scrollTop();
        if (lastBottomX <= bottomX) {
            lastBottomX = bottomX;
            var needData = GetNeedLoadDiv(bottomX);
			//console.log(needData.length);
            for (var i = 0; i < needData.length; i++) {
                var needli = $(container).find("li[ld=" + needData[i].ld + "]");
                if (needli.length > 0) {
					needli.eq(0).show();
                }
				CalcRact();
            }
        }
    }
    function GetNeedLoadDiv(bottomX) {
        var x = bottomX + minBottom;
        var result = new Array();
        var needLoad = new Array();
		
        for (var i = 0; i < srcData.length; i++) {
            var rect = srcData[i].rect;
			//console.log("x:",x,"rect:",rect.top);
            if (x >= rect.top) {
                result[result.length] = srcData[i];
            } else {
                needLoad[needLoad.length] = srcData[i];
            }
        }
        srcData = needLoad;
        return result;
    }
    function CalcRact() {
        for (var i = 0; i < srcData.length; i++) {
            var lis = $(container).find("li[ld=" + srcData[i].ld + "]");
            if (lis.length > 0) {
                srcData[i].rect = lis[0].getBoundingClientRect();
            }
        }
    }  
}