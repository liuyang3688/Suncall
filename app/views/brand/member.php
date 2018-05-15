<link rel="stylesheet" href="/assets/css/brand.css">
<div><img src="/assets/img/brand/banner.jpg" width="100%" height="auto"></div>
<div class="main clearfix">
	<div class="block subnav">
		<ul class="clearfix">
			<li><a href="/brand/town">膳蔻小镇</a></li>
			<li class="cur"><a href="/brand/member">膳蔻会员</a></li>
			<li><a href="/brand/chain">膳蔻供应链</a></li>
			<li><a href="/brand/contact">联系我们</a></li>
			<li><a href="/brand/joinus">加入我们</a></li>
		</ul>
	</div>
	<style>
	.block .vips
	{
		width: 100%;
		overflow: hidden;
	}
	.block .vips .vip
	{
		float: left;
		width: 23%;
		padding:5%;
	}
	.block .vip h3
	{
		font-size: 20px;
    	color: #545454;
    	line-height: 24px;
    	margin-bottom: 5px;
    	font-weight: normal;
    	text-align: center;
	}
	.block .vip p
	{
		font-size: 13px;
    	line-height: 22px;
    	color: #aeaeae;
	}
	.block .vip .vip_icon
	{
		display: block;
    	margin: 0 auto 20px;
    	background: url("/assets/img/brand/vip_icon.png") no-repeat;
    	overflow: hidden;
    	width: 60px;
    	height: 60px;
	}
	.block .vip .vip_icon_1
	{
		background-position: -195px -112px;
	}
	.block .vip .vip_icon_2
	{
		background-position: -260px -115px;
	}
	.block .vip .vip_icon_3
	{
		background-position: -159px -45px;
	}
	.block .info
	{
		/*background: #f1f1f1;*/
		padding: 30px;
	}
	.block .info h2
	{
		height: 60px;
	    line-height: 60px;
	    font-size: 30px;
	    font-weight: 100;
	    border-bottom: #c1bdc4 1px solid;
	}
	.block form
	{
		padding: 30px;
	}
	.block table th
	{
		text-align: right;
	    width: 350px;
	    vertical-align: top;
	    line-height: 28px;
	    white-space: nowrap;
	    font-size: 14px;
    	padding: 15px 0;
    	font-weight: normal;
	}
	.block table th i
	{
		padding-right: 4px;
	    color: red;
	    font-family: "SimSun";
	    font-size: 12px;
	}
    .block table td
    {
    	padding-left: 10px;
    	font-size: 12px;
    }
    .block table input
    {
    	margin: 0px 0 0 0;
    	width: 260px;
    	border: 1px solid #ccc;
	    border-radius: 2px;
	    height: 28px;
	    padding: 0 5px 0 5px;
	    vertical-align: middle;
	    -webkit-box-shadow: 1px 1px 1px 0px #eaeaea inset;
	    -moz-box-shadow: 1px 1px 1px 0px #eaeaea inset;
	    box-shadow: 1px 1px 1px 0px #eaeaea inset;
	    background-color: #fff;
    }
    .block table input.btn
    {
    	margin-top:20px;
    	width: 119px;
	    height: 37px;
	    border: 0;
	    cursor: pointer;
	    color: #fff;
	    font-size: 14px;
	    font-weight: bold;
	    background: url(/assets/img/brand/ico_bg.png) left top no-repeat;
    }
	</style>
	<div class="block content">
		<h1>会员特权</h1>
		<div class="vips">
			<div class="vip">
				<i class="vip_icon vip_icon_1"></i>
				<h3>超低会员折扣</h3>
				<p>一旦注册称为会员，会享受会员所有折扣</p>
			</div>
			<div  class="vip">
				<i class="vip_icon vip_icon_2"></i>
				<h3>更多免费活动</h3>
				<p>我们会定期举办免费抢购活动，红包分享活动，敬请期待</p>
			</div>
			<div class="vip">
				<i class="vip_icon vip_icon_3"></i>
				<h3>专属会员标识</h3>
				<p>我们会为膳蔻会员办理专属的会员金卡，在我们线下采购仅需出示会员金卡。</p>
			</div>
		</div>
		<div><img src="/assets/img/brand/join.jpg" width="100%" height="auto"></div>
		<div class="info">
			<h2>会员申请</h2>
				<div>
					<table>
                        <tbody>
                            <tr>
                                <th><i>*</i>姓名：</th>
                                <td class="info_tab_vm">
                                    <input class="F_input" name="name" type="text">
                                </td>
                                <td class="cr" id="tip-name"></td>
                            </tr>
                            <tr>
                                <th><i>*</i>手机号：</th>
                                <td class="info_tab_vm">
                                    <input data-val="true" name="mobile" type="text" placeholder="手机号码由11位数字组成" data-val-regex-pattern="^\d{11}$">
                                </td>
                                <td class="cr" id="tip-mobile"></td>
                            </tr>

                            <tr>
                                <th><i>*</i>邮箱：</th>
                                <td class="info_tab_vm">
                                    <input data-val="true" name="email" type="text"  placeholder="请输入正确的电子邮件地址" data-val-regex-pattern="^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$">
                                </td>
                                <td class="cr" id="tip-email"></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td class="info_tab_vm">
                                    <input type="submit" id="btn-submit" class="btn" value="申请会员"></td>
                                <td class="cr"></td>
                            </tr>
                        </tbody>
                    </table>
				</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
	//读取会员信息
	$('#btn-submit').click(function(){ 
		//获取姓名
		var name = $("input[name='name']").val();
		if(name == "")
		{
			$('#tip-name').text('名字不能为空');
			return false;
		}
		$('#tip-name').text('');
		//获取手机号
		var regPhone =/^1[3|4|5|8][0-9]\d{4,8}$/;
		var mobile = $("input[name='mobile']").val();
		if(mobile == "")
		{
			$('#tip-mobile').text('电话号码不能为空');
			return false;
		}
		if(!regPhone.test(mobile))
		{
			$('#tip-mobile').text("格式错误[正确格式如:18678225237]");
			return false;
		}
		$('#tip-mobile').text('');
		//获取电子邮件
		var regMail = /^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/;
		var email = $("input[name='email']").val();
		if(email == "")
		{
			$('#tip-email').text('电子邮箱不能为空');
			return false;
		}
		if(!regMail.test(email))
		{
			$('#tip-email').text("格式错误[正确格式如:1960009001@qq.com]");
			return false;
		}
		$('#tip-email').text('');
		//ajax提交发邮件
		$.ajax({
            type:"POST",
            url:"/admin/apply",
            data:{name:name,phone:mobile,email:email},
            dataType: "json",
            success:function(data){
                if(data.code)
            		g_alert('success',data.msg,'/brand/member'); 
                else
                	g_alert('error',data.msg);     
            }         
        });
	});
});
</script>