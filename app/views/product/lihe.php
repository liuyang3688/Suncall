<link rel="stylesheet" href="/assets/css/product.css">
<div class="main">
	<div class="bread"><span>所有分类 &gt;</span> 礼盒</div>
	<div class="container">
		<div class="catnav">
		<div class="catnav-radio">
			<span class="catnav-title">类型</span>
			<div class="cat-radio">
				<label>
					<input type="radio" name="cat-name" data-url="/product/index"/>
					<em>推荐</em>
				</label>
				<label>
					<input type="radio" name="cat-name" data-url="/product/youxuan"/>
					<em>优选</em>
				</label>
				<label>
					<input type="radio" name="cat-name" data-url="/product/zhenxuan"/>
					<em>甄选</em>
				</label>
				<label>
					<input type="radio" name="cat-name" data-url="/product/lihe"  checked="checked"/>
					<em>礼盒</em>
				</label>
			</div>
		</div>
		<div class="catnav-btn"><input type="submit" value="确定" class="btn-submit"></div>
	</div>
	<div class="cont">
		<div class="cat">
			<div class="title-bar clearfix">
				<h2 class="title-name">礼盒</h2>
			</div>
			<div class="clearfix">
				<div class="prod-div">
					<div class="prod-box">
						<div class="prod-img-cover">
							<img class="prod-img" src="/assets/img/product/lihe/box-1.jpg"/>
							<a class="prod-cover" style="display:none" href="/"><span>京东购买</span></a>
						</div>
						<div class="clearfix"><span class="prod-title">膳蔻礼盒A</span><span class="prod-price">四盒装</span></div>
						<div class="clearfix"><span class="prod-title">价格参考京东商城</span><span class="prod-buy"><a href="/">购买</a></span></div>
					</div>
				</div>
				<div class="prod-div">
					<div class="prod-box">
						<div class="prod-img-cover">
							<img class="prod-img" src="/assets/img/product/lihe/box-2.jpg"/>
							<a class="prod-cover" style="display:none" href="/"><span>京东购买</span></a>
						</div>
						<div class="clearfix"><span class="prod-title">膳蔻礼盒B</span><span class="prod-price">四盒装</span></div>
						<div class="clearfix"><span class="prod-title">价格参考京东商城</span><span class="prod-buy"><a href="/">购买</a></span></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
<script>
$(document).ready(function(){
	$(":submit").click(function(){
		location.href = $(':radio:checked').data('url');
	});
	$(".prod-img-cover").hover(function(){
		$(this).children('.prod-cover').show();
	},function(){
		$(this).children('.prod-cover').hide();
	});
});
</script>
