<html>
<head>
<title>首页 - 膳蔻官网</title>
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta name="renderer" content="webkit">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="always" name="referrer">
<link rel="stylesheet" href="assets/css/base.css">
<link rel="stylesheet" href="assets/css/site.css">
</head>
<style>
#banner {
    width: 100%;
    height: auto;
    overflow: hidden;
    position: relative;
    cursor:pointer;
}
#banner ul
{
  position: relative;
  width: 200%;
}
#banner ul li.box
{
    float: left;
    width: 50%;
}
#banner ol
{
    position: absolute;
    bottom: .5em;
    width: 100%;
    text-align: center;
    z-index: 300;
    padding: 0;
}
#banner ol li
{
  display: inline-block;
  margin: 0.25em;
}
#banner ol li a
{
    display: block;
    width: 11px;
    height: 11px;
    text-indent: 100%;
    overflow: hidden;
    white-space: nowrap;
    border: 1px solid #eee;
    border-radius: 7px;
    opacity: .3;
    -webkit-box-shadow: inset 0 0 2px #333;
    box-shadow: inset 0 0 2px 2px #333;
    margin: 0 3px;
}
#banner ol li a.cur
{
  background: #000;
}
</style>
<script src="http://cdn.bootcss.com/jquery/1.8.3/jquery.min.js"></script>
<body>
<div class="main">
  <?php include 'module/top.php';?>
  <div id="banner">
	<ul class="clearfix">
		<li class="box"><img src="/assets/img/common/bg-1.jpg" alt="轮播大图A" width="100%" height="545"/></li>
		<li class="box"><img src="/assets/img/common/bg-2.jpg" alt="轮播大图B" width="100%" height="545"/></li>
	</ul>
    <ol>
		<li><a link="#" class="cur"></a></li>
		<li><a link="#"></a></li>
    </ol>
  </div>
  <style>
  .block {
    position: relative;
    width: 80%;
    margin: 0 auto;
  }
  .title{
    margin:100px 0 60px;
    text-align: center;
  }
  .title-name
  {
  	font-size: 48px;
  	font-family: Georgia,Times,sans-serif;
  	padding-bottom:10px; border-bottom:2px solid #000
  }
  .title-name-en
  {
  	margin-top:20px;
  	font-style:italic;
  }
  .product{
    width: 100%;
  }
  .product li{
    width: 30%;
    float: left;
    margin-right: 4%;
  }
  .product li img {
    width: 100%;
  }
  .product li p {
    text-align: center;
    font-size: 22px;
    color: #1b1b1b;
    margin-top: 30px;
  }
  .product li h3 {
    text-align: center;
    font-size: 14px;
    line-height: 50px;
    color: #1b1b1b;
    font-weight: normal;
    margin-bottom: 10px;
  }
  .product li i {
    font-size: 14px;
    color: #1b1b1b;
    font-style: italic;
    line-height: 30px;
  }
  .product li h3 span{
    text-align: center;
    background: #3cbc87;
    color:#fff;
    padding: 7px;
    width: 100px;
  }
  </style>
  <div class="block">
    <div class="title">
	  <div><span class="title-name">新品上架</span></div>
	  <div class="title-name-en"><span>New Arrival</span></div>
    </div>
    <div class="product">
      <ul class="clearfix">
        <li>
            <a href="http://item.jd.com/1607072037.html" target="_blank"><img src="assets/img/product/prod-1.jpg"/></a>
            <p>长白山无根秋木耳</p>
            <h3><i style="color:red">包邮  京东配送</i></h3>
            <!--<h3><i>￥：29.90</i></h3>-->
            <h3><a href="/coop/groupon" target="_blank"><span>企业团购</span></a></h3>
          
        </li>
        <li>
            <a href="http://item.jd.com/1805715915.html" target="_blank"><img src="assets/img/product/prod-2.jpg"/></a>
            <p>长白山特级滑子菇</p>
            <h3><i style="color:red">包邮  京东配送</i></h3>
            <!--<h3><i>￥：35.90</i></h3>-->
            <h3><a href="/coop/groupon" target="_blank"><span>企业团购</span></a></h3>
        </li>
        <li style="margin-right:0;">
             <a href="http://item.jd.com/1805437925.html" target="_blank"><img src="assets/img/product/prod-3.jpg"/></a>
            <p>长白山特级榛蘑</p>
            <h3><i style="color:red">包邮  京东配送</i></h3>
            <!--<h3><i>￥：39.90</i></h3>-->
            <h3><a href="/coop/groupon" target="_blank"><span>企业团购</span></a></h3>
        </li>
      </ul>
    </div>
  </div>
  <!--品牌股市
  <style>
  .brand
  {
    padding: 0 5%;
  }
  .left
  {
    float:left;
    width: 40%;
  }
  .right
  {
    float:left;
    width: 40%;
    margin-left: 12%;
  }
  .right h2
  {
  	padding-top:20px;
    padding-bottom: 10px;
    font-size: 20px;
    font-weight: normal;
    border-bottom: 1px solid #ddd;
  }
  .right p
  {
    font-size: 18px;
    line-height: 40px;
    margin-top: 30px;
  }
  </style>
  <div class="block">
    <div class="title">
    <div><span class="title-name">品牌故事</span></div>
    <div class="title-name-en"><span>Brand Story</span></div>
    </div>
    <div class="brand clearfix"><img src="/assets/img/brand/brand.png" width="100%" height="auto">
      <!--
      <div class="left"><img src="/assets/img/common/brand.jpg" alt="" width="100%" height="auto"></div>
      <div class="right">
        <h2>膳蔻品牌 - 专注长白山产带季供食材</h2>
        <p>2013年我们将加拿大的美登蓝莓引进中国，在黄金纬度的东北长白山余脉培育，我们以预售的形式进行销售，空运直达，9成熟采摘，保证每一粒蓝莓都是新鲜离枝。</p>
        <p>膳蔻（suncall)品牌以“改写中国食材版图”为使命，坚持原产地直供，原产地取材，每一份食材均来自“膳蔻供应链（自由农场）”或签约农户或合作社，从食材源头到您手中，我们守护食材的那份纯粹。找回食材最初的味道。</p>
      </div>
    </div>
  </div>-->
  <!--
  <div class="block">
    <div class="title">
	  <div><span class="title-name">产品分类</span></div>
	  <div class="title-name-en"><span>Product Category</span></div>
    </div>
    <div class="category">
    	<a href="/product" target="_blank"><img src="assets/img/product/category.jpg" alt="产品分类" width="100%"/></a>
    </div>
  </div>-->
  <style>
  .chain{
  	width:100%;
  }
  </style>
  <div class="block">
  	<div class="title">
	  <div><span class="title-name">膳蔻供应链</span></div>
	  <div class="title-name-en"><span>Suncall Chain</span></div>
    </div>
  	<div class="chain">
  	  <a href="/brand/chain"><img src="/assets/img/brand/chain.jpg" width="100%" height="auto"/></a>
  	</div>
  </div>
  <!--
  <style>
  .package{
  	width:100%;
  }
  .package .left
  {
  	float:left;
  	width:49%;
  }
  .package .right
  {
  	float:right;
  	width:49%;
  }
  </style>
  <div class="block">
  	<div class="title">
	  <div><span class="title-name">膳蔻礼盒</span></div>
	  <div class="title-name-en"><span>Suncall GiftBox</span></div>
    </div>
  	<div class="package clearfix">
  	  <div class="left"><img src="/assets/img/brand/box-1.png" width="100%" height="auto"/></div>
  	  <div class="right"><img src="/assets/img/brand/box-2.png" width="100%" height="auto"/></div>
  	</div>
  </div>
  <style>
  .recipe
  {
  	width:100%
  }
  </style>
  <div class="block">
    <div class="title">
	  <div><span class="title-name">膳寇食谱</span></div>
	  <div class="title-name-en"><span>Suncall Recipe</span></div>
    </div>
    <div class="recipe">
    	<a href="/recipe" target="_blank"><img src="/assets/img/recipe/total.jpg" width="100%" height="auto"/></a>
    </div>
  </div>-->
</div>
<script>
$(document).ready(function(){
	$("#scrollDown").click(function(){
      $("html, body").animate({scrollTop:$("#scrollDown-img").height()},1000)
  });
  // 轮播图片自动切换
  var i=1;
  setInterval(function(){
    //
    $('#banner ul').animate({left:i%2*(-100)+'%'},'slow','swing');
    $('#banner ol a:eq('+(1-i%2)+')').removeClass('cur');
    $('#banner ol a:eq('+(i%2)+')').addClass('cur');
    i++;
  },5000);
  // 轮播框点击 页面上移
  $('#banner').click(function(){
    $('html body').animate({scrollTop:$(this).height()},'slow');
  });
});
</script>
