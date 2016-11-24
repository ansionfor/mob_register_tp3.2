<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>我要参展</title>
    <meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <link href="<?php echo (CSS); ?>/hotels.css"  rel="stylesheet" type="text/css">
    <script src="<?php echo (JS); ?>/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo (JS); ?>/WdatePicker.js"></script>
    <!--移动端版本兼容 -->
    <script type="text/javascript">
        var resPath  = 'http://s.404.cn/';
        var jsVer = 24;
        var phoneWidth = parseInt(window.screen.width);
        var phoneScale = phoneWidth/480;

        var ua = navigator.userAgent;
        if (/Android (\d+\.\d+)/.test(ua)){
            var version = parseFloat(RegExp.$1);
            // andriod 2.3
            if(version>2.3){
                document.write('<meta name="viewport" content="width=480, minimum-scale = '+phoneScale+', maximum-scale = '+phoneScale+', target-densitydpi=device-dpi">');
                // andriod 2.3以上
            }else{
                document.write('<meta name="viewport" content="width=480, target-densitydpi=device-dpi">');
            }
            // 其他系统
        } else {
            document.write('<meta name="viewport" content="width=480, user-scalable=no, target-densitydpi=device-dpi">');
        }
    </script>
    <script type="text/javascript">
        var xmlhttp;
        function loadXMLDoc(url)
        {
        xmlhttp=null;
        if (window.XMLHttpRequest)
          {// code for all new browsers
          xmlhttp=new XMLHttpRequest();
          }
        else if (window.ActiveXObject)
          {// code for IE5 and IE6
          xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
          }
        if (xmlhttp!=null)
          {
          xmlhttp.onreadystatechange=state_Change;
          xmlhttp.open("GET",url,true);
          xmlhttp.send(null);
          }
        else
          {
          alert("Your browser does not support XMLHTTP.");
          }
        }

        function state_Change()
        {
        if (xmlhttp.readyState==4)
          {// 4 = "loaded"
          if (xmlhttp.status==200)
            {// 200 = OK
            // ...our code here...
            }
          else
            {
            alert("Problem retrieving XML data");
            }
          }
        }
</script>
    <!--移动端版本兼容 end -->
</head>

<body id="wrap">
<style>
    .round li.address {
        background: url("<?php echo (IMG); ?>/addr.png")/*tpa=http://weixin.ciec.com.cn/tpl/Wap/default/common/card/images/addr.png*/ no-repeat scroll 11px center / 22px 22px rgba(0, 0, 0, 0);
        line-height: 22px;
        padding-left: 40px;
    }
    .round li.pay {
        background: url("<?php echo (IMG); ?>/recharge.png")/*tpa=http://weixin.ciec.com.cn/tpl/Wap/default/common/card/images/recharge.png*/ no-repeat scroll 11px center / 22px 22px rgba(0, 0, 0, 0);
        line-height: 22px;
        padding-left: 40px;
    }
    .deploy_ctype_tip{z-index:1001;width:100%;text-align:center;position:fixed;top:50%;margin-top:-23px;left:0;}.deploy_ctype_tip p{display:inline-block;padding:13px 24px;border:solid #d6d482 1px;background:#f5f4c5;font-size:16px;color:#8f772f;line-height:18px;border-radius:3px;}
    textarea{
        border: 1px solid #E8E8E8;
    }
    .round li a span{
        font-size:20px;
    }
    .nob td{
        font-size:20px;
    }
    .nob .px{
        font-size:20px;
    }
    .nob .td select option{
        font-size:20px;
    }
    table tr{margin-bottom:10px;}
    table th{width:30%;}
    table td{width:70%;font-size:20px;line-height: 40px;}
    table td textarea{width:300px;font-size: 20px;}
    table td select{width:150px;height:30px;font-size: 20px;}
    .nob th{height:50px;font-size:20px;}
    input[type="radio"]{width:18px;height:18px;margin-left:10px;}
    input[type="radio"]:nth-child(1){width:18px;height:18px;margin-left:0px;
    }
    input[type="checkbox"]{width:18px;height:18px;margin-left:10px;}
    input[type="checkbox"]:nth-child(1){width:18px;height:18px;margin-left:0px;}
</style>
<div class="banner">
    <div id="wrapper">
        <div id="scroller" style="float:none">
            <ul id="thelist">

                <li style="float:none"><!--p>我要参展</p-->

                    <a href="index.php-g=Wap&m=Custom&a=detail&token=jskzru1441083868&id=23.htm" tppabs="http://weixin.ciec.com.cn/index.php?g=Wap&m=Custom&a=detail&token=jskzru1441083868&id=23">
                        <img src="<?php echo (IMG); ?>/banner.jpg" tppabs="http://weixin.ciec.com.cn/uploads/j/jskzru1441083868/c/d/c/9/thumb_55f684eb817c7.jpg" alt="我要参展" style="width:100%"/></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="clr"></div>
</div>
<div class="cardexplain">

    <ul class="round">

        <li class="tel">
            <a href="tel:<?php echo ($info["ourtel"]); ?>">
                <span><?php echo ($info["ourtel"]); ?></span>
            </a>
        </li>
        <li class="address">
            <a href="http://map.baidu.com/mobile/webapp/search/search/qt=s&wd=%E5%A4%A7%E4%B8%AD%E5%8D%8E%E5%9B%BD%E9%99%85%E4%BA%A4%E6%98%93%E5%B9%BF%E5%9C%BA&c=257&searchFlag=bigBox&version=5&exptype=dep&src_from=webapp_all_bigbox&wd2=%E6%B7%B1%E5%9C%B3%E5%B8%82%E7%A6%8F%E7%94%B0%E5%8C%BA&sug_forward=7388dffde98f92ebd3ff230d&src=1/vt=map&ecom=0" target="_self">
                <span><?php echo ($info["ouradd"]); ?></span>
            </a>
        </li>
        <li class="detail">
            <a href="http://www.chinaforexexpo.com">
                <span>访问官网</span>
            </a>
        </li>

    </ul>
    <form method="post" action="/register/index.php/Home/Index/canzhan" id="form" onSubmit="return tgSubmit()">
        <ul class="round">
            <li class="title mb"><span class="none" style="font-size: 20px;">请填写以下信息</span></li>
            <li class="nob">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="kuang">
                    <tr><th>姓名</th><td><input type="text" class="px" id="smlk6r_23" name="name" value=""></td></tr>
                    <tr><th>公司</th><td><textarea name="company" id="8kklpy_23" rows="4" cols="25"  ></textarea></td></tr>
                    <tr><th>意向</th><td><input type="radio" name="area" id="h64jeb_23" value="标准展位（3米*3米)" checked=true />标准展位（3米*3米)
                        <input type="radio" name="h64jeb_23" id="h64jeb_23" value="光地（36平米起租）"  />光地（36平米起租）</td></tr>
                    <tr><th>手机</th><td><input type="text" class="px" id="m766j3_23" name="tel" value=""></td></tr>
                    <tr><th>邮箱</th><td><input type="text" class="px" id="3pirix_23" name="email" value=""></td></tr>
                    <tr><th>备注</th><td><textarea name="remark" id="k9qt6r_23" rows="4" cols="25"  ></textarea></td></tr></table></li>
        </ul>
        <div class="footReturn" style="text-align:center">
            <input type="submit" style="margin:0 auto 20px auto;width:90%;font-size: 20px;"  class="submit" value="提交信息" /></div>
       </form>
    <script>
        function showTip(tipTxt) {
            var div = document.createElement('div');
            div.innerHTML = '<div class="deploy_ctype_tip"><p>' + tipTxt + '</p></div>';
            var tipNode = div.firstChild;
            $("#wrap").after(tipNode);
            setTimeout(function () {
                $(tipNode).remove();
            }, 1500);
        }
        function tgSubmit(){
            var values = $("#smlk6r_23").val();
            if($.trim(values) == ""){
                showTip("姓名不能为空")
                return false;
            }
            var regu = /^[\u4e00-\u9fa5\a-zA-Z0-9]+$/;
            var re = new RegExp(regu);
            if (!re.test($.trim(values)) && values != "") {
                showTip("姓名必须填写")
                return false;
            }
            if($.trim($("#8kklpy_23").val()) == ""){
                showTip("公司不能为空")
                return false;
            } 		 			/*
             if($("#h64jeb_23:checked").val() == undif){
             showTip("意向不能为空")
             return false;
             }			*/
            var values = $("#m766j3_23").val();
            if($.trim(values) == ""){
                showTip("手机不能为空")
                return false;
            }
            var regu = /^13[0-9]{9}$|^15[0-9]{9}$|^18[0-9]{9}$/;
            var re = new RegExp(regu);
            if (!re.test($.trim(values)) && values != "") {
                showTip("手机必须填写")
                return false;
            } 			var values = $("#3pirix_23").val();

            var regu = /\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/;
            var re = new RegExp(regu);
            if (!re.test($.trim(values)) && values != "") {
                showTip("邮箱必须填写")
                return false;
            }
        }
    </script>
</div>

<script type="text/javascript">
    window.shareData = {
        "moduleName":"Custom",
        "moduleID":"23",
        "imgUrl": "thumb_55f684eb817c7.jpg"/*tpa=http://weixin.ciec.com.cn/uploads/j/jskzru1441083868/c/d/c/9/thumb_55f684eb817c7.jpg*/,
        "sendFriendLink": "index.php-g=Wap&m=Custom&a=index&token=jskzru1441083868&id=23.htm"/*tpa=http://weixin.ciec.com.cn/index.php?g=Wap&m=Custom&a=index&token=jskzru1441083868&id=23*/,
        "tTitle": "我要参展",
        "tContent": ""
    };
</script>
</body>
<script type="text/javascript" src="jweixin-1.0.0.js" tppabs="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<style type="text/css">.share-callback {color:#fff;display:none;background:#666;width:200px;line-height:50px;height:50px;font-size:16PX;font-weight:bold;text-align:center;position:absolute;top:40%;left:20%;-moz-border-radius: 25px;-webkit-border-radius: 25px;border-radius:25px;}</style>
<span class="share-callback">分享成功</span>
<script type="text/javascript">
    wx.config({
        debug: false,
        appId: 	'wxb9fd3cb16cc7c5f2',
        timestamp: 1455798141,
        nonceStr: '479138',
        signature: '39f24723739b62b994b069e5a4f5a90961acc779',
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
</script></html>