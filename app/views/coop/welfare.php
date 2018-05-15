<link rel="stylesheet" href="/assets/css/coop.css">
<div><img src="/assets/img/brand/banner.jpg" width="100%" height="auto"></div>
<div class="main clearfix">
	<div class="block">
		<h1>商业合作&nbsp;&gt;&nbsp;企业福利</h1>
		<div class="cont">
			<div class="row clearfix">
				<div class="left">
					<span>合作模式</span>
				</div>
				<div class="mid">
					<select name="coop-type">
						<option value="groupon">企业福利</option>
					</select>
				</div>
				<div class="right">
					<span id="" class="cr"></span>
				</div>
			</div>
			<div class="row clearfix">
				<div class="left">
					<span>您的称呼</span>
				</div>
				<div class="mid">
					<input type="text" name="name" placeholder="请问您尊姓大名">
				</div>
				<div class="right">
					<span class="cr" id="tip-name"></span>
				</div>
			</div>
			<div class="row clearfix">
				<div class="left">
					<span>电话号码</span>
				</div>
				<div class="mid">
					<input type="text" name="phone" placeholder="11位数字">
				</div>
				<div class="right">
					<span class="cr" id="tip-phone"></span>
				</div>
			</div>
			<div class="row clearfix">
				<div class="left">
					<span>电子邮箱</span>
				</div>
				<div class="mid">
					<input type="text" name="email" placeholder="请输入正确格式">
				</div>
				<div class="right">
					<span class="cr" id="tip-email"></span>
				</div>
			</div>
			<div class="row clearfix">
				<div class="left">
					<span>备注信息</span>
				</div>
				<div class="mid">
					<textarea type="text" name="memo" placeholder="让我们了解您的需求"></textarea>
				</div>
				<div class="right">
					<span class="cr" id="tip-memo"></span>
				</div>
			</div>
			<div class="row clearfix">
				<div class="left">&nbsp;</div>
				<div class="right">
					<input type="submit" id="btn-submit" name="btn" value="提交">
				</div>
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
		var phone = $("input[name='phone']").val();
		if(phone == "")
		{
			$('#tip-phone').text('电话号码不能为空');
			return false;
		}
		if(!regPhone.test(phone))
		{
			$('#tip-phone').text("格式错误");
			return false;
		}
		$('#tip-phone').text('');
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
			$('#tip-email').text("格式错误");
			return false;
		}
		$('#tip-email').text('');
		//获取MEMO
		var memo = $("textarea[name='memo']").val();
		if(memo == "")
		{
			$('#tip-memo').text('备注信息不能为空');
			return false;
		}
		$('#tip-memo').text('');
		//ajax提交发邮件
		$.ajax({
            type:"POST",
            url:"/admin/welfare",
            data:{name:name,phone:phone,email:email,memo:memo},
            dataType: "json",
            success:function(data){
                if(data.code)
            		g_alert('success',data.msg,'/coop/welfare'); 
                else
                	g_alert('error',data.msg);     
            }         
        });
	});
});
</script>