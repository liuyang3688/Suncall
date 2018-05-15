<style>
	.header{
	  height: 58px;
      background-color: #fff;
      border-bottom: 1px solid #dfdfe3;
      padding-top: 10px;
      font-family: 'Microsoft Yahei'
	}
	.logo{
	  float: left;
      margin-left: 2%;
	}
	.nav{
	  float: left;
      font-weight: bold;
	}
	.login{
	  float: right;
      text-align: right;
      width: 442px;
      color: #8a8a8a;
      font-size: 14px;
      line-height: 42px;
	}
	.nav ul{
	  padding-left: 50px;
	}
	.nav ul li{
	  float: left;
      display: inline;
      line-height: 50px;
      height: 50px;
      text-align: center;
	}
	.nav ul li:hover
	{
	  background: #3fc19c;
	}
	.nav ul li:hover a
	{
		color: #fff;
	}
	.nav ul li.cur a
	{
		color: #f25821;
	}
	.nav ul li a {
      color: #2d2b2b;
      font-size: 16px;
      display: inline-block;
      white-space: nowrap;
      width: 70px;
      padding-left: 16px;
      padding-right: 16px;
	}
	.login{
	  float: right;
      text-align: right;
      width: 442px;
      color: #8a8a8a;
      font-size: 14px;
      line-height: 42px;
	}
	.login span a{
	  display: inline-block;
      width: 120px;
      height: 42px;
      background-color: #3fc19c;
      color: #fff;
      text-align: center;
      border-radius: 5px;
      padding: 0 20px;
      border-bottom: 2px solid #35aa89;
    }
	</style>
  <div class="top">
    <div class="header clearfix">
      <div class="logo">
        <a href="/">
          <img src="/assets/img/common/logo.png" height="54" alt="膳蔻官网" title="膳蔻  - 一种生活态度">
        </a>
      </div>
      <div class="nav">
        <ul class="clearfix">
          <li class="<?php echo isset($cur_index)?$cur_index:''?>"><a href="/" target="_blank">首  页</a></li>
		  <li class="<?php echo isset($cur_brand)?$cur_brand:''?>"><a href="/brand" target="_blank">膳蔻品牌</a></li>
		  <li class="<?php echo isset($cur_product)?$cur_product:''?>"><a href="/product" target="_blank">膳蔻家族</a></li>
		  <li class="<?php echo isset($cur_recipe)?$cur_recipe:''?>"><a href="/recipe" target="_blank">膳蔻食谱</a></li>
		  <li class="<?php echo isset($cur_activity)?$cur_activity:''?>"><a href="/activity" target="_blank">膳蔻活动</a></li>
		  <li><a href="http://suncall.jd.com/" target="_blank">在线购买</a></li>
		</ul>
	  </div>
	  <div class="login">
	    <span><a href="/admin" target="_blank" class="inp_six" style="position: absolute;right:30px;">企业管理入口</a></span>
	  </div>
    </div>
  </div>