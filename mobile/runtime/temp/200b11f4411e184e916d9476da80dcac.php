<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"D:\phpStudy\WWW\btc\mobile/application/index\view\goods\goods.html";i:1539592147;s:59:"D:\phpStudy\WWW\btc\mobile/application/index\view\head.html";i:1528947722;}*/ ?>
<html style="font-size: 120px;">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
<!-- 是否启用全屏模式 -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- 全屏时状态颜色设置 -->
<meta name="apple-mobile-web-status-bar-style" content="white">
<!-- 禁用电话号码自动识别 -->
<meta name="format-detection" content="telephone=no">
<!--禁止读取本地缓存模板-->
<meta http-equiv="Pragma" contect="no-cache">
<!-- iPhone 启动图标 -->
<link rel="apple-touch-icon" href="img/logo.png">
<!-- Android 启动图标 -->
<link rel="shortcut icon" href="img/logo.png">
<!-- 添加 favicon icon -->
<link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
 <title><?php echo !empty($conf['web_name'])?$conf['web_name']:'众赢'; ?></title> 
<script type="text/javascript">
window.onload=function(){
//设置适配rem
var change_rem = ((window.screen.width > 450) ? 450 : window.screen.width)/375*100;
document.getElementsByTagName("html")[0].style.fontSize=change_rem+"px";
window.onresize = function(){
change_rem = ((window.screen.width > 450) ? 450 : window.screen.width)/375*100;
document.getElementsByTagName("html")[0].style.fontSize=change_rem+"px";
}
}
</script>

<link href="__HOME__/css/ionic.css" rel="stylesheet">
<link href="__HOME__/css/style.css" rel="stylesheet">
<!-- <script src="__HOME__/js/jquery-3.2.1.min.js"></script> -->
<script src="__HOME__/js/jquery-1.9.1.min.js"></script>
<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
<style>
.ionic_toast {
  z-index: 9999;
}

.toast_section {
  color: #FFF;
  cursor: default;
  font-size: 1em;
  display: none;
  border-radius: 5px;
  opacity: 1;
  padding: 10px 30px 10px 10px;
  margin: 10px;
  position: fixed;
  left: 0;
  right: 0;
  text-align: center;
  z-index: 9999;
  background-color: rgba(0, 0, 0, 0.75);
}

.ionic_toast_top {
  top: 10px;
}

.ionic_toast_middle {
  top: 40%;
}

.ionic_toast_bottom {
  bottom: 10px;
}

.ionic_toast_close {
  border-radius: 2px;
  color: #CCCCCC;
  cursor: pointer;
  display: none;
  position: absolute;
  right: 4px;
  top: 4px;
  width: 20px;
  height: 20px;
}

.toast_close_icon {
  position: relative;
  top: 1px;
}

.ionic_toast_sticky .ionic_toast_close {
  display: block;
}

.ionic_toast_close:active {

}

/**
 * 作者：671
 * 时间：2018年6月14日11:18:18
 * 功能：图标更换
 */
.sg-icon {
  width: 0.3rem;
  height: 0.3rem;
}
.sg-icon.sg-icon-my>img {
  width: 85%;
  height: 85%;
  position: relative;
  left: 0.5rem;
}
.sg-icon.sg-icon-deal {
  height: 0.2rem;
  width: 0.2rem;
}
.sg-icon.sg-icon-deal.sg-icon-look>img {
  left: 0.65rem;
}
.sg-icon.sg-icon-deal>img {
  width: 100%;
  height: 100%;
  position: relative;
  left: 0.46rem;
}

</style>


<script src="__HOME__/js/lk/order.js"></script>

<!-- <script type="text/javascript" src="__HOME__/js/lk/echarts-all-3.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/ecStat.min.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/dataTool.min.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/china.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/world.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/api"></script>
<script type="text/javascript" src="__HOME__/js/lk/getscript"></script>
<script type="text/javascript" src="__HOME__/js/lk/bmap.min.js"></script> -->
<!-- 弹框插件 -->
<script src="/static/layer/layer.js"></script>
<!-- 公共函数 -->
<script src="/static/public/js/function.js"></script>
<script src="/static/public/js/base64.js"></script>
<script type="text/javascript">
  var Base64 = new Base64();

  
</script>
</head>

<script type="text/javascript">
window.onload=function(){
//设置适配rem
var change_rem = ((window.screen.width > 450) ? 450 : window.screen.width)/375*100;
document.getElementsByTagName("html")[0].style.fontSize=change_rem+"px";
window.onresize = function(){
change_rem = ((window.screen.width > 450) ? 450 : window.screen.width)/375*100;
document.getElementsByTagName("html")[0].style.fontSize=change_rem+"px";
}
}
</script>
<script type="text/javascript" src="__HOME__/js/lodash.min.js"></script>


<script>

var order_type = 0;
var order_pid = <?php echo $pro['pid']; ?>;
var order_price = <?php echo $pay_choose_arr[0]; ?>;
var order_sen = <?php echo $protime[0]*60; ?>;
var order_shouyi = <?php echo $proscale[0]; ?>;
var newprice = <?php echo $pro['Price']; ?>;  //实时价格
var rawData_data = [];
var my_money = <?php echo !empty($userinfo['usermoney'])?$userinfo['usermoney']:'0'; ?>;
var order_min_price = <?php echo getconf('order_min_price'); ?>;
var order_max_price = <?php echo getconf('order_max_price'); ?>;


</script>


<body ng-app="starter" ng-controller="AppCtrl" class="grade-a platform-browser platform-ios platform-ios9 platform-ios9_1 platform-ready">

<ion-nav-bar class="bar-stable headerbar nav-bar-container" nav-bar-transition="ios" nav-bar-direction="exit" nav-swipe="">
<div class="nav-bar-block" nav-bar="active"><ion-header-bar class="bar-stable headerbar bar bar-header" align-title="center"><div class="buttons buttons-left" style="transition-duration: 0ms;"><span class="left-buttons">
        <a href="javascript:history.go(-1);" class="back-button" style="transition-duration: 0ms;    margin-top: 0.1rem;">
            <i class="icon ion-ios-arrow-left"></i>
        </a>
    </span></div><div class="title title-center header-item goodstitle" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px); left: 48px; right: 48px;"> </div></ion-header-bar></div></ion-nav-bar>
<ion-nav-view class="view-container"  nav-view-transition="ios" nav-view-direction="exit" nav-swipe="">
<ion-view   class="trade-view pane"  hide-nav-bar="false" state="trade" nav-view="active" style="opacity: 1; transform: translate3d(0%, 0px, 0px);">
    
    <ion-content  class="trade-content content-background scroll-content ionic-scroll  has-header" scroll="true"><div class="scroll" style="transform: translate3d(0px, 0px, 0px) scale(1);">
		<header>
			<section  class="ng-binding rise data-price" style=""><?php echo $pro['Price']; ?></section>
			<section>
				<p class="kaipan"></p>
				<p  class="ng-binding rise data-open" style=""><?php echo $pro['Open']; ?></p>
			</section>
			<section>
				<p class="zuidi"></p>
				<p  class="ng-binding rise data-low" style=""><?php echo $pro['Low']; ?></p>
			</section>
			<section>
				<p class="zuigao"></p>
				<p  class="ng-binding rise data-high" style=""><?php echo $pro['High']; ?></p>
			</section>
		</header>
		<nav>
             <article>
                <span class="trade-chart-type stock active Kxian" onclick="change_chart_type('stock')"></span>
                <span class="trade-chart-type line zoushi" onclick="change_chart_type('line')"></span>
            </article> 
            <section class="trade-chart-period 1M active" onclick="change_chart_period('1M')">1M</section>
            <section class="trade-chart-period 5M" onclick="change_chart_period('5M')">5M</section>
            <section class="trade-chart-period 15M" onclick="change_chart_period('15M')">15M</section>
            <section class="trade-chart-period 30M" onclick="change_chart_period('30M')">30M</section>
            <section class="trade-chart-period 1H" onclick="change_chart_period('1H')">1H</section>
            <section class="trade-chart-period 1D" onclick="change_chart_period('1D')">1D</section>
        </nav>
		<footer>
             <div id="container">
               <div id="ecKx"></div>
               <div class="txt1"><span class="a"></span><span class="b"></span><span class="c"></span><span class="d"></span><span class="e"></span></div>
               <div class="txt2"><span class="a DIFF"><i></i></span><span class="b DEA"><i></i></span><span class="c MACD"><i></i></span></div>

             </div>
                
        </footer>

    </div><div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out" style="transform: translate3d(0px, 0px, 0px) scaleY(1); height: 0px;"></div></div></ion-content>
	<div class="trade_bar">
    <?php if($isopen == 1): ?>
		<section onclick="toggle_history_order_panel()" class="">
			<!-- <i class="icon--14 iconfont"></i> -->
            <div class="sg-icon sg-icon-deal sg-icon-look">
                <img src="/static/index/img/g_money.png">
            </div>
            <p class="chicang"><span ng-show="order_list" class="ng-binding ng-hide" style="">(0)</span></p>
		</section>
		<section onclick="toggle_order_confirm_panel('lookup')" class="">
			<!-- <i class="iconfont icon--18"></i> -->
            <div class="sg-icon sg-icon-deal">
                <img src="/static/index/img/g_up.png">
            </div>
            <p class="maizhang"></p>
		</section>
		<section onclick="toggle_order_confirm_panel('lookdown')" class="">
			<!-- <i class="iconfont icon--17"></i> -->
            <div class="sg-icon sg-icon-deal">
                <img src="/static/index/img/g_down.png">
            </div>
            <p class="maidie"></p>
		</section>
    <?php else: ?>
        <section  class="" style="flex-basis:100%">
            <i class="icon--14 iconfont"></i>
            <p class="xiushi"><span ng-show="order_list" class="ng-binding ng-hide" style="">(0)</span></p>
        </section>
        
    <?php endif; ?>
	</div>

    <!-- ngInclude: 'templates/order-confirm-panel.html' --><div ng-include="'templates/order-confirm-panel.html'" class="">
    <div class="pro_mengban "  >
    <div class="order-confirm-panel" >
        <div class="panel-header">
            <div>
                订单确认
                <div class="close" onclick="toggle_order_close_panel()">
                    <i class="icon ion-ios-close-empty close_tag"></i>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="period">
                <p class="end_time">到期时间</p>
                <ion-scroll direction="x" class="scroll-view ionic-scroll scroll-x"><div class="scroll" style="transform: translate3d(0px, 0px, 0px) scale(1);">
                    <div class="period-widget-view">
                        <!-- ngRepeat: c in trade.cycle -->
                        <?php if(is_array($protime) || $protime instanceof \think\Collection || $protime instanceof \think\Paginator): $k = 0; $__LIST__ = $protime;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                        <div class="period-widget <?php if($k==1): ?> active <?php endif; ?>"  data-sen="<?php echo $vo*60; ?>" data-shouyi="<?php echo $proscale[$k-1]; ?>">
                            <div class="period-widget-header">
                                结算时间
                            </div>
                            <div class="period-widget-content" >
                                <span  class="final_time ng-binding"><?php echo $vo*60; ?></span>
                                <span  class="final_unit">秒</span>
                            </div>
                            <div class="period-widget-footer period_footer ng-binding">
                                收益  <?php echo $proscale[$k-1]; ?>%
                            </div>
                        </div>
						<?php endforeach; endif; else: echo "" ;endif; ?>
                        <!-- end ngRepeat: c in trade.cycle -->
                    </div>
                </div><div class="scroll-bar scroll-bar-h"><div class="scroll-bar-indicator scroll-bar-fade-out" style="transform: translate3d(0px, 0px, 0px) scaleX(1); width: 289px;"></div></div></ion-scroll>
            </div>
            <div class="amount">
                <p class="invest_account tousijine">
                    
                    <span  class="<?php if($userinfo['usermoney'] > $pay_choose_arr[0]): ?> ng-hide <?php endif; ?> no-money">投资金额余额不足，请充值！</span>
                    <span  class="ng-hide no-max">单笔投资金额不超过<?php echo getconf('order_max_price'); ?></span>
                    <span   class="ng-hide no-min">单笔投资金额不少于<?php echo getconf('order_min_price'); ?></span>
                </p>
                <ion-scroll direction="x" class="scroll-view ionic-scroll scroll-x"><div class="scroll" style="transform: translate3d(0px, 0px, 0px) scale(1);">
                    <div class="amount-view">
                        <?php if(is_array($pay_choose_arr) || $pay_choose_arr instanceof \think\Collection || $pay_choose_arr instanceof \think\Paginator): $k = 0; $__LIST__ = $pay_choose_arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                        <div class="amount-box ng-binding <?php if($k==1): ?> active <?php endif; ?>" data-price="<?php echo $vo; ?>">
                            <?php echo $vo; ?>
                        </div>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                    </div>
                </div><div class="scroll-bar scroll-bar-h"><div class="scroll-bar-indicator scroll-bar-fade-out" style="transform: translate3d(0px, 0px, 0px) scaleX(1); width: 192px;"></div></div></ion-scroll>
                <label class="other-amount">
                    <input type="number" placeholder="其他金额" ng-init="onfocus=false" ng-focus="onfocus==true" ng-model="order_params.other_amount" ng-keydown="min_money()" class="ng-pristine ng-untouched ng-valid ng-empty">
                </label>
            </div>
            <div class="info-view">
                <div class="ng-binding my-money">余额:   <span class="pay_mymoney"><?php echo $userinfo['usermoney']; ?></span></div>
                <div class="ng-binding">手续费：<span><?php echo $conf['web_poundage']; ?></span>%</div>

            </div>
            <div class="order-detail-view">
                <div class="order-detail">
                    <div class="row fields">
                        <div class="col">名称</div>
                        <div class="col">方向</div>
                        <div class="col">现价</div>
                        <div class="col">金额</div>
                    </div>
                    <div class="row">
                        <div class="col qoute_name ng-binding goodstitle"> </div>
                        <div class="col ng-binding order_type" >买跌</div>
                        <div class="col ng-binding rise col-nowprice" ><?php echo $pro['Price']; ?></div>
                        <div class="col ng-binding" id="money"> <?php echo $pay_choose_arr[0]; ?></div>
                    </div>
                    <div class="row btn_confirm">
                        <div class="col">
                            <button class="button" onclick="addorder()" >
                            	确认下单
                            </button>
                        </div>
                    </div>
                    <p class="expect_profit">
                        <span class="ng-binding">预期收益 :   <span id="yuqi">180.00</span></span>
                        &nbsp;&nbsp;
                        <span class="ng-binding">保底金额 :   0.00</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
    <!-- ngInclude: 'templates/order-state-panel.html' -->
    <div class="order_mengban" id="div2" style="width:100%;height:100%;"><div>
    <div >
        <div class="order-state-panel"  >
            <div class="panel-header">
                <div class="ng-binding goodstitle">
                     
                    <div class="close" onclick="close_order()" ">
                        <i class="icon ion-ios-close-empty"></i>
                    </div>
                </div>
            </div>
            <div class="panel-body">
                <div class="paysuccess  ng-hide" ng-show="order_result.status == 'SUCCESS'">
                    <div class="circle_wrapper" ng-show="order_params.cycle.time.indexOf('-') == -1">
                        <div class="right_circle">
                            <img class="img_circle_right" style="-webkit-animation: run 60s linear;" src="__HOME__/img/right_circle1.png">
                        </div>
                        <div class="left_circle">
                            <img class="img_circle_lift" style="-webkit-animation: runaway 60s linear;" src="__HOME__/img/left_circle1.png">
                        </div>
                    </div>
                    <div class="row remaining count_remaining" ng-show="order_params.cycle.time.indexOf('-') == -1">
                        <div class="col">
                            <div class="ng-binding pay_order_sen"></div>
                            <div>现价</div>
                            <div class="ng-binding newprice"></div>
                        </div>
                    </div>
                    <div class="pupil_success ng-hide" ng-show="order_params.cycle.time.indexOf('-') >= 0">
                        <p>交易成功，等待结算</p>
                        <p class="ng-binding">
                            <span>剩余时间：</span>
                            天Invalid Date
                        </p>
                    </div>
                    <div class="row info_list">
                        <div class="col col-15 first_info">
                            <p>方向</p>
                            <p  class="ng-binding pay_order_type"></p>
                        </div>
                        <div class="col col-30">
                            <p>金额</p>
                            <p class="ng-binding"><span class="pay_order_price"></span></p>
                        </div>
                        <div class="col col-30">
                            <p>执行价</p>
                            <p class="ng-binding pay_order_buypricee"></p>
                        </div>
                        <div class="col col-25 last_info">
                            <p>预测结果</p>
                            <p  class="ng-binding yuce">   </p>
                        </div>
                    </div>
                </div>

                <div class="wait" ng-show="order_result.status == 'POST'">
                    <div class="row">
                        <div class="col ng-binding">
                            <i class="ion-paper-airplane"></i>
                            请稍后……
                        </div>
                    </div>
                </div>
                <div class="fail ng-hide" ng-show="order_result.status == 'FAIL'">
                    <div class="row">
                        <div class="col ng-binding">
                            <i class="ion-close-circled"></i>
                            正在提交订单
                        </div>
                    </div>
                </div>

                <div class="fail ng-hide order_fail" ng-show="order_result.status == 'FAIL'" style="">
                    <div class="row">
                        <div class="col ng-binding">
                            <i class="ion-close-circled"></i>
                            <span class="fail-info" style="    font-size: 18px;color: #fff;"></span>
                        </div>
                    </div>
                </div>

                
                <div class="ordersuccess ng-hide" style="">
                    <div class="row remaining finish_remaining">
                        <div class="col">
                            <div class="result_profit ng-binding "  style="">180</div>
                            <div class="expired_statements">到期结算完成</div>
                        </div>
                    </div>
                    <div class="row info_list">
                        <div class="col col-15 first_info">
                            <p>方向</p>
                            <p  class="ng-binding pay_order_type"></p>
                        </div>
                        <div class="col col-30">
                            <p>金额</p>
                            <p class="ng-binding"><span class="pay_order_price"></span></p>
                        </div>
                        <div class="col col-30">
                            <p>执行价</p>
                            <p class="ng-binding pay_order_buypricee"></p>
                        </div>
                        
                        <div class="col col-25 last_info">
                            <p>成交价</p>
                            <p class="ng-binding rise endprice" style=""></p>
                        </div>
                    </div>
                </div>


                <div class="row button_row">
                    <div class="col">
                        <button class="button" onclick="continue_order()">继续下单</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
    <!-- ngInclude: 'templates/history-order-panel.html' --><div  class=""><div class="history-panel" ng-include="1">
    <div class="panel-header chicangmingxi" >
        
        <div class="close" onclick="toggle_history_order_panel()">
            <i class="icon ion-ios-close-empty"></i>
        </div>
    </div>
    <div class="trade_history_list">
    	<ion-scroll style="height: 100%" class="scroll-view ionic-scroll scroll-y"><div class="scroll" style="transform: translate3d(0px, 0px, 0px) scale(1);">
    		
        	<ul>
               

            </ul>
    		<!-- ngIf: has_more_order -->
        </div><div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out" style="transform: translate3d(0px, 0px, 0px) scaleY(1); height: 0px;"></div></div></ion-scroll>
    </div>
</div>
</div>
</ion-view></ion-nav-view>


<div class="backdrop"></div><div class="ionic_toast"><div class="toast_section" ng-class="ionicToast.toastClass" ng-style="ionicToast.toastStyle" ng-click="hideToast()" style="display: none; opacity: 0;"><span class="ionic_toast_close"><i class="ion-android-close toast_close_icon"></i></span><span ng-bind-html="ionicToast.toastMessage" class="ng-binding"></span></div></div><div class="click-block click-block-hide"></div><div class="modal-backdrop hide"><div class="modal-backdrop-bg"></div><div class="modal-wrapper" ng-transclude=""><ion-modal-view class="order-modal modal slide-in-up ng-leave ng-leave-active">
    <ion-header-bar class="order-modal-header bar bar-header">
        <h1 class="title" style="left: 54px; right: 54px;">资金流水</h1>
        <div class="close" ng-click="capital_history_modal_hide()">
            <i class="icon ion-ios-arrow-left"></i>
        </div>
    </ion-header-bar>
    <ion-content class="person_money_list scroll-content ionic-scroll  has-header"><div class="scroll" style="transform: translate3d(0px, 0px, 0px) scale(1);">
		<ion-scroll style="height:100%" class="scroll-view ionic-scroll scroll-y"><div class="scroll" style="transform: translate3d(0px, 0px, 0px) scale(1);">
			
			<ul>
                <!-- ngRepeat: c in moneyList -->
                
			</ul>
			<!-- ngIf: has_more_money_order.if_has_more_money_order -->
		</div><div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out" style="height: 0px; transform: translate3d(0px, 0px, 0px) scaleY(1); transform-origin: center bottom 0px;"></div></div></ion-scroll>
    </div><div class="scroll-bar scroll-bar-v"><div class="scroll-bar-indicator scroll-bar-fade-out" style="transform: translate3d(0px, 0px, 0px) scaleY(1); height: 0px;"></div></div></ion-content>
    <div class="button-bar">
        <a class="button button-dark" ng-click="capital_history_modal_hide()">关闭</a>
    </div>
    <script src="__HOME__/js/lk/chardata.js"></script>
    <script src="__HOME__/js/echarts.js"></script>
    <script src="__HOME__/js/m.js"></script>
    <script>


    
    //setInterval('getdata(<?php echo $pro['pid']; ?>)', 1000);
    //window.setInterval('getMaindata()',5000);
    //setInterval("window.location.reload();",1000*60*5);
    
    var titurl = '<?php echo url("goodsinfo"); ?>'
    $.post(titurl, 'pid=<?php echo $pro['pid']; ?>', function(_res){
          
        var res = jQuery.parseJSON(Base64.decode(_res)); 

        if(res.ptitle){
            $('.goodstitle').html(res.ptitle);
        }else{
           // history.go(-1);
        }
    })

    var charturl = '<?php echo url("getchart"); ?>';
    $.get(charturl,function(_res){
        
          
        var res = jQuery.parseJSON(Base64.decode(_res)); 
        

        $.each(res,function(k,v){
            $('.'+k).html(v);
        })
    })
    
    </script>

    <script>
    var flag = false;
    var cur = {
        x:0,
        y:0
    }
    var nx,ny,dx,dy,x,y ;
    function down(){
        flag = true;
        var touch ;
        if(event.touches){
            touch = event.touches[0];
        }else {
            touch = event;
        }
        cur.x = touch.clientX;
        cur.y = touch.clientY;
        dx = div2.offsetLeft;
        dy = div2.offsetTop;
    }
    function move(){

        if(flag){
            var touch ;
            if(event.touches){
                touch = event.touches[0];
            }else {
                touch = event;
            }
            nx = touch.clientX - cur.x;
            ny = touch.clientY - cur.y;
            x = dx+nx;
            y = dy+ny;
            div2.style.left = x+"px";
            div2.style.top = y +"px";
            //阻止页面的滑动默认事件
            document.addEventListener("touchmove",function(){
                event.preventDefault();
            },false);
        }
    }
    //鼠标释放时候的函数
    function end(){
        flag = false;
    }
    var div2 = document.getElementById("div2");
    div2.addEventListener("mousedown",function(){
        down();
    },false);
    div2.addEventListener("touchstart",function(){
        down();
    },false)
    div2.addEventListener("mousemove",function(){
        move();
    },false);
    div2.addEventListener("touchmove",function(){
        move();
    },false)
    document.body.addEventListener("mouseup",function(){
        end();
    },false);
    div2.addEventListener("touchend",function(){
        end();
    },false);
</script>
</ion-modal-view></div></div></body></html>