(function(){
  var _w = 16 , _h = 16;
  var param = {
	url:location.href,
	type:'3',
	count:'', /**是否显示分享数，1显示(可选)*/
	appkey:'', /**您申请的应用appkey,显示分享来源(可选)*/
	title:document.title, /**分享的文字内容(可选，默认为所在页面的title)*/
	pic:'', /**分享图片的路径(可选)*/
	ralateUid:'', /**关联用户的UID，分享微博会@该用户(可选)*/
	language:'zh_cn', /**设置语言，zh_cn|zh_tw(可选)*/
	rnd:new Date().valueOf()
  }
  var temp = [];
  for( var p in param ){
	temp.push(p + '=' + encodeURIComponent( param[p] || '' ) )
  }
  document.write('<iframe allowTransparency="true" frameborder="0" scrolling="no"  class="sinaweibo" src="http://hits.sinajs.cn/A1/weiboshare.html?' + temp.join('&') + '" width="'+ _w+'" height="'+_h+'"></iframe>')
})();
function postToWb(){
	var _t = encodeURI(document.title);
	var _url = encodeURIComponent(document.location);
	var _appkey = encodeURI("571330b45a5044939d9acd6abc0d0a7b");
	var _pic = encodeURI('');//（例如：var _pic='图片url1|图片url2|图片url3....）
	var _site = 'www.upantool.com';
	var _u = 'http://v.t.qq.com/share/share.php?url='+_url+'&appkey='+_appkey+'&site='+_site+'&pic='+_pic+'&title='+_t;
	window.open( _u,'', 'width=700, height=680, top=0, left=0, toolbar=no, menubar=no, scrollbars=no, location=yes, resizable=no, status=no' );
}