<?php if (!defined('THINK_PATH')) exit();?><link rel="stylesheet" type="text/css" href="http://localhost:8081/Public/plug-in/layui-v2.3.0/layui/css/layui.css" />
<script type="text/javascript" src="http://localhost:8081/Public/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="http://localhost:8081/Public/plug-in/layui-v2.3.0/layui/layui.js"></script>
<style>
	.x-body {padding: 20px;}
	.layui-form-mid {padding: 0 !important;}
	.start {background-color:#1aa414;}
	.stop {background-color:#ff2e2e;}
	.layui-table-view .layui-form-checkbox, .layui-table-view .layui-form-radio, .layui-table-view .layui-form-switch {height: 18px;}
	.layui-form-switch i {height:12px;}
	.layui-form-switch em {top:-1; margin-left:20px;}
	.right {float:right;}
	.layui-form-select {float:right;}
	.refresh {margin-right:5px;}
	.total {width:100%;}
	.total>div {text-align:center; margin:5px 0 15px 0; border:1px solid #d5d5d5; padding:12px 0; border-right:0;}
	.total>div:nth-last-child(1) {border-right:1px solid #d5d5d5;}
	.total>div>div:nth-child(1) {margin-bottom: 5px; font-size: 24px; color: #4aa9db;}
</style>

<body>
    <div class="x-body layui-form">
        <blockquote class="layui-elem-quote">下注记录</blockquote>

        <div class="navbar layui-row total">
  			<div class="layui-col-md4">
    			<div>2012312.55</div>
    			<div>客户余额</div>
  			</div>
  			<div class="layui-col-md4">
    			<div>202515.00</div>
    			<div>平台盈利</div>
  			</div>
  			<div class="layui-col-md4">
    			<div>20</div>
    			<div>下注人数</div>
  			</div>
		</div>

        <nav class="navbar navbar-default">
        	<div class="layui-input-inline">
        		<input type="text" name="user_name" placeholder="请输入用户名称" autocomplete="off" class="layui-input">
        	</div>
    		<button class="layui-btn layui-btn-normal" onclick="search()">搜索</button>

    		<div class="layui-input-inline">
        		<input type="text" name="order_id" placeholder="请输入订单号" autocomplete="off" class="layui-input">
        	</div>
    		<button class="layui-btn layui-btn-normal" onclick="searchorder()">搜索</button>

    		<div class="right">
    			<select name="last_direction" class="layui-input-inline">
  					<option value="">开奖状态</option>
  					<option value="1|0">已开奖</option>
				  	<option value="-1">未开奖</option>
				</select> 
    			<button class="layui-btn layui-btn-normal refresh" onclick="refresh()">刷新</button>
    		</div>
        </nav>

        <table id="opentable" lay-filter="opentable"></table>
    </div>
</body>

<script>
	layui.use(['form', 'table'], function() {
		var form = layui.form;
		var table = layui.table;

		// 表格数据
		table.render({
			elem: '#opentable',
			url: '<?php echo U("set");?>',
			page: true,
			size: 'sm',
			totalRow: true,
			limit: 30,
			limits: [30,60,90,120],
			cols: [[
				{field: 'number', title: '订单号', width: 160, align: 'center'},
				{field: 'number', title: '用户', width: 120, align: 'center'},
				{field: 'number', title: '下注金额', width: 80, align: 'center'},
				{field: 'number', title: '期数', width: 80, align: 'center'},
				{field: 'number', title: '购买方向', width: 80, align: 'center'},
				{field: 'number', title: '最终方向', width: 80, align: 'center'},
				{field: 'number', title: '中奖金额', width: 80, align: 'center'},
				{field: 'number', title: '执行值', width: 80, align: 'center'},
				{field: 'number', title: '最终值', width: 80, align: 'center'},
				{field: 'set', title: '购买时间', width: 120, align: 'center', templet: '#switch-set'},
				{field: 'time', title: '开奖时间', width: 120, align: 'center'},
			]]
		});
	})
</script>

<script type="text/html" id="switch-set">
	<input lay-filter="switch-set" type="checkbox" lay-skin="switch" lay-text="涨|跌" value="{{d.number}}" {{d.set == 0 ? 'checked' : ''}}>
</script>