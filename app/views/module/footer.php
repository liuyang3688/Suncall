<style>
.footer {
	background-size: cover;
	padding-top: 20px;
	margin-top: 100px;
	border-top: 1px solid #ccc;
	/*background-color: #333;*/
	/*background: url(assets/img/common/f-bg.png) no-repeat center top #f7f7f9;*/
}
.footer .block{
	position: relative;
	width: 80%;
	margin: 0 auto;
}
.footer .f_top{
	border-bottom: 1px solid #ddd;
	padding-bottom: 58px;
}
.footer .f_mid{
	height: 162px;
}
.footer .f_bot{
	text-align: center;
	font-size: 12px;
	line-height: 24px;
	color: #333;
	padding: 20px 0;
}
.f_top img {
	display: block;
	float: left;
	width: 120px;
	height: 97px;
	margin-top: 28px;
}
.f_top .links {
	float: right;
	width: 83%;
	position: relative;
}
.f_top .links dl {
	float: left;
	width: 23%;
	display: inline;
	color: #333;
	text-align:center;
}
.f_top .links dl dt {
	font-size: 18px;
	line-height: 76px;
	font-weight: bold;
}
.f_top .links dl dd {
	line-height: 30px;
	height: 30px;
}
.f_top .links dl dd a {
	font-size: 14px;
}
.f_mid h2 {
	text-align: center;
	color: #333;
	font-size: 18px;
	line-height: 72px;
	margin-bottom: 10px;
}
.f_mid div {
	text-align: center;
}
.f_mid a
{
	display: inline-block;
	background:url(/assets/img/footer/sina-wechat.png)  no-repeat;
	position: relative;
	width: 48px;
	height: 48px;
	margin: 0 20px;
}
.f_mid .sina
{
	background-position:0 -48;
}
.f_mid .wechat
{
	background-position:0 0;
}

.f_mid .wechat .barcode
{
  position: absolute;
  /* display: none; */
  width: 170px;
  height: 160px;
  top: -70px;
  left: 70px;
  -webkit-transition: opacity 0.25s, transform .3s;
  -moz-transition: opacity 0.25s, transform .3s;
  transition: opacity 0.25s, transform .3s;
  opacity: 0;
  filter: alpha(opacity=0);
  max-width: 0;
  -webkit-transform: scale(0.01);
  -ms-transform: scale(0.01);
  transform: scale(0.01);
    -webkit-transform-origin: 0% 50%;
    -ms-transform-origin: 0% 50%;
    transform-origin: 0% 50%;
	background: url(/assets/img/float/float.png?) no-repeat 0 0;
}
.f_mid .wechat:hover .barcode
{
	display: block;
	visibility: visible;
	opacity: 1;
	filter: alpha(opacity=100);
	max-width: none;
	-webkit-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
}
</style>
<div class="footer">
<div class="block">
<div class="f_top clearfix">
<img src="/assets/img/common/logo-s.png" width="13%" alt="膳蔻官网"/>
<div class="links">
<dl>
<dt>关于膳蔻</dt>
<dd><a href="/brand/town">膳蔻小镇</a></dd>
<dd><a href="/brand/member">膳蔻会员</a></dd>
<dd><a href="/brand/contact">联系我们</a></dd>
<dd><a href="/brand/joinus">加入我们</a></dd>
</dl>
<dl>
<dt>商业合作</dt>
<dd><a href="/coop/groupon">商务团购</a></dd>
<dd><a href="/coop/welfare">企业福利</a></dd>
<dd><a href="http://angelcrunch.com/startup/12921937/" target="_blank">投资膳蔻</a></dd>
</dl>
<dl>
<dt>品牌活动</dt>
<dd><a href="/activity/loveback">让爱重回厨房™ </a></dd>
<dd><a href="http://jhmall.jd.com" target="_blank">中国特产·蛟河馆</a></dd>
<!-- <dd><a href="/">90后厨神</a></dd> -->
</dl>
<dl>
<dt>膳蔻服务</dt>
<dd><a href="/recipe">膳蔻食谱</a></dd>
<dd><a href="/brand/chain">膳蔻供应链</a></dd>
<dd><a href="http://suncall.jd.com" target="_blank">在线购买</a></dd>
</dl>
</div>
</div>

<div class="f_mid clearfix">
<h2>关注我们</h2>
<div>
	<a href="" class="sina"></a>
	<a  class="wechat">
		<div class="barcode"></div>
	</a>
</div>
</div>
<div class="f_bot">CopyRight 2010-2015, 膳蔻网  版权所有京ICP备10033495号<span style="position:relative;top:-6px">
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000084529'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s22.cnzz.com/z_stat.php%3Fid%3D1000084529%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));
		</script>
</div>
</div>
</div>
<?php include 'float.php';?>
</body>
</html>