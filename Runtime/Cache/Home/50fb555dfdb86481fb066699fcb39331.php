<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>我要参展</title>
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link href="<?php echo (CSS); ?>/hotels.css" rel="stylesheet" type="text/css">
<script src="<?php echo (JS); ?>/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo (JS); ?>/main.js" ></script>

</head>

<body id="wrap">
<style>
.deploy_ctype_tip{z-index:1001;width:100%;text-align:center;position:fixed;top:50%;margin-top:-23px;left:0;}.deploy_ctype_tip p{display:inline-block;padding:13px 24px;border:solid #d6d482 1px;background:#f5f4c5;font-size:16px;color:#8f772f;line-height:18px;border-radius:3px;}


.content {
    background-color: rgba(255, 255, 255, 0.9);
    border: 1px solid #C6C6C6;
    border-radius: 5px;
    box-shadow: 0 1px 1px #F6F6F6;
    display: block;
    font-size: 14px;
    line-height: 24px;
    text-align: left;
    padding:0 10px;
}
.content h2{font-weight: bold;text-align: center;height: 30px;line-height: 30px;font-size:16px;}
.content .text img{max-width: 99%;}
</style>
<div class="banner">
<div id="wrapper">
<div id="scroller" style="width:100%;">
<ul id="thelist">
               
<li style="width:100%;"><!--p>我要参展</p-->

<img src="<?php echo (IMG); ?>/thumb_55f684eb817c7.jpg" tppabs="http://weixin.ciec.com.cn/uploads/j/jskzru1441083868/c/d/c/9/thumb_55f684eb817c7.jpg" alt="我要参展" style="width:100%"/>
</li>
 

</ul>
</div>
</div>

<div class="clr"></div>
</div>


<div class="cardexplain">

<!--intro-->
<ul class="round">
<li>
	<a href="index.php-g=Wap&m=Custom&a=index&token=jskzru1441083868&id=23&wecha_id=null.htm" tppabs="http://weixin.ciec.com.cn/index.php?g=Wap&m=Custom&a=index&token=jskzru1441083868&id=23&wecha_id=null"><span style="color:#666">返回</span></a>
</li>
</ul>
<div class="content">
	
<h2>详细介绍</h2>
<div class="text">
</div>

</div>

</div>

<script type="text/javascript">
window.shareData = {  
            "moduleName":"Custom",
            "moduleID":"23",
            "imgUrl": "", 
            "sendFriendLink": "index.php-g=Wap&m=Custom&a=detail&token=jskzru1441083868&id=23.htm"/*tpa=http://weixin.ciec.com.cn/index.php?g=Wap&m=Custom&a=detail&token=jskzru1441083868&id=23*/,
            "tTitle": "我要参展",
            "tContent": ""
};
</script>
	<script type="text/javascript" src="jweixin-1.0.0.js" tppabs="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>	
	<style type="text/css">.share-callback {color:#fff;display:none;background:#666;width:200px;line-height:50px;height:50px;font-size:16PX;font-weight:bold;text-align:center;position:absolute;top:40%;left:20%;-moz-border-radius: 25px;-webkit-border-radius: 25px;border-radius:25px;}</style>
	<span class="share-callback">分享成功</span>
	<script type="text/javascript">
		wx.config({
		  debug: false,
		  appId: 	'wxb9fd3cb16cc7c5f2',
		  timestamp: 1455798143,
		  nonceStr: '517480',
		  signature: 'a0edac291f8e6982a331045168de557a6496b735',
		  jsApiList: [
	    	'checkJsApi',
		    'onMenuShareTimeline',
		    'onMenuShareAppMessage',
		    'onMenuShareQQ',
		    'onMenuShareWeibo',
			'openLocation',
			'getLocation',
			'addCard',
			'chooseCard',
			'openCard',
			'hideMenuItems',
			'previewImage'
		  ]
		});
	</script>
	<script type="text/javascript">
	wx.ready(function () {
	  // 1 判断当前版本是否支持指定 JS 接口，支持批量判断
	  /*document.querySelector('#checkJsApi').onclick = function () {
	    wx.checkJsApi({
	      jsApiList: [
	        'getNetworkType',
	        'previewImage'
	      ],
	      success: function (res) {
	        //alert(JSON.stringify(res));
	      }
	    });
	  };*/
	  // 2. 分享接口
	  // 2.1 监听“分享给朋友”，按钮点击、自定义分享内容及分享结果接口
	    wx.onMenuShareAppMessage({
			title: window.shareData.tTitle,
			desc: window.shareData.tContent,
			link: window.shareData.sendFriendLink,
			imgUrl: window.shareData.imgUrl,
		    type: '', // 分享类型,music、video或link，不填默认为link
		    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
		    success: function () { 
				shareHandle('frined');
		    },
		    cancel: function () { 
		        //alert('分享朋友失败');
		    }
		});


	  // 2.2 监听“分享到朋友圈”按钮点击、自定义分享内容及分享结果接口
		wx.onMenuShareTimeline({
			title: window.shareData.fTitle?window.shareData.fTitle:window.shareData.tTitle,
			link: window.shareData.sendFriendLink,
			imgUrl: window.shareData.imgUrl,
		    success: function () { 
				shareHandle('frineds');
		        //alert('分享朋友圈成功');
		    },
		    cancel: function () { 
		        //alert('分享朋友圈失败');
		    }
		});	

	  // 2.4 监听“分享到微博”按钮点击、自定义分享内容及分享结果接口
		wx.onMenuShareWeibo({
			title: window.shareData.tTitle,
			desc: window.shareData.tContent,
			link: window.shareData.sendFriendLink,
			imgUrl: window.shareData.imgUrl,
		    success: function () { 
				shareHandle('weibo');
		       	//alert('分享微博成功');
		    },
		    cancel: function () { 
		        //alert('分享微博失败');
		    }
		});
		if(window.shareData.timeline_hide == '1'){
			wx.hideMenuItems({
			  menuList: [
				'menuItem:share:timeline', //隐藏分享到朋友圈
			  ],
			});
		}
		wx.error(function (res) {
			/*if(res.errMsg == 'config:invalid signature'){
				wx.hideOptionMenu();
			}else if(res.errMsg == 'config:invalid url domain'){
				wx.hideOptionMenu();
			}else{
				wx.hideOptionMenu();
				//alert(res.errMsg);
			}*/
			if(res.errMsg){
				wx.hideOptionMenu();
			}
		});
	});
		
	function shareHandle(to) {
		var submitData = {
			module: window.shareData.moduleName,
			moduleid: window.shareData.moduleID,
			token:'jskzru1441083868',
			wecha_id:'0',
			url: window.shareData.sendFriendLink,
			to:to
		};

		$.post('index.php-g=Wap&m=Share&a=shareData&token=jskzru1441083868&wecha_id=0.htm'/*tpa=http://weixin.ciec.com.cn/index.php?g=Wap&m=Share&a=shareData&token=jskzru1441083868&wecha_id=0*/,submitData,function (data) {},'json');
		if(window.shareData.isShareNum == 1){
			var ShareNum = {
				token:'jskzru1441083868',
				ShareNumData:window.shareData.ShareNumData
			}
			$.post('index.php-g=Wap&m=Share&a=ShareNum&token=jskzru1441083868&wecha_id=0.htm'/*tpa=http://weixin.ciec.com.cn/index.php?g=Wap&m=Share&a=ShareNum&token=jskzru1441083868&wecha_id=0*/,ShareNum,function (data) {if(window.shareData.isShareNumReload == 1){location.reload();}},'json');
		}
		if ('function' == typeof shareCallback) {
			shareCallback(to);					
		} else {
			$('.share-callback').css('left', ($(document).width() - 200) / 2).fadeIn(1000);
			$('.share-callback').fadeOut(3000);
		}
	}
</script></body>
</html>