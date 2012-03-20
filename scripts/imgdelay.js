
/* imgdelay  load*/
function ImagesDelay(container) {
    //离屏幕下方50像素内的图片加载
    var minBottom = 50;
    var srcData = new Array();
    var waitingUrl = "images/loading.gif";
    var lastBottomX = 0;

    //will server do
    //Replace src
    var imgs = $(container).find("img");
    var id = 0;
    imgs.each(function () {
        id++;
        var rect = this.getBoundingClientRect();
        $(this).attr("ld", "l" + id);
        srcData[srcData.length] = { "ld": "l" + id, "src": $(this).attr("needload"), "rect": rect };
        $(this).attr("src", waitingUrl);
    });
    $(window).scroll(function () {
        LoadImages();
    });
    // do first loading
    LoadImages();
	
	function LoadImages() {
        var bottomX = $(window).height() + $(window).scrollTop();
        if (lastBottomX <= bottomX) {
            lastBottomX = bottomX;
            var needData = GetNeedLoadImgs(bottomX);
            for (var i = 0; i < needData.length; i++) {
                var imgs = $(container).find("img[ld=" + needData[i].ld + "]");
                if (imgs.length > 0) {
                    LoadImage(imgs[0], needData[i].src);
                }

            }
        }
    }
    function GetNeedLoadImgs(bottomX) {
        var x = bottomX + minBottom;
        var result = new Array();
        var needLoad = new Array();
        for (var i = 0; i < srcData.length; i++) {
            var rect = srcData[i].rect;
            if (x >= rect.top) {
                result[result.length] = srcData[i];
            } else {
                needLoad[needLoad.length] = srcData[i];
            }
        }
        srcData = needLoad;
        return result;
    }
	function LoadImage(img, src) {
        var appname = navigator.appName.toLowerCase();
        if (appname.indexOf("netscape") == -1) {
            //ie
            img.onreadystatechange = function () {
                if (img.readyState == "complete") {
                    CalcRact();
                }
            };
        } else {
            //firefox
            img.onload = function () {
                if (img.complete == true) {
                    CalcRact();
                }
            }
        }
        img.src = src;
        if (img.width > 0 && img.complete) {
            CalcRact();
        }
    }
    function CalcRact() {
        for (var i = 0; i < srcData.length; i++) {
            var imgs = $(container).find("img[ld=" + srcData[i].ld + "]");
            if (imgs.length > 0) {
                srcData[i].rect = imgs[0].getBoundingClientRect();
            }
        }
    }  
}