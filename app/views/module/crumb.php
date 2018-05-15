<style>
.crumbs {
    width: 80%;
    margin: 10px auto;
    overflow: hidden;
}
.crumbs .breadcrumb
{
	display: block;
    padding: 7px 14px;
    background: repeat-x #fafafa;
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='white', endColorstr='whitesmoke');
    background: -webkit-gradient(linear,left top,left bottom,from(white),to(whitesmoke))repeat-x;
    background: -moz-linear-gradient(top,#fff,#f5f5f5)repeat-x;
    border: 1px solid #DDD;
    font-size: 12px;
    line-height:1.5;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    color: #666;
}
.crumbs .breadcrumb i 
{
	display: inline-block;
    font-size: 12px;
    color: #666;
    font-family: "Microsoft YaHei";
    font-style: normal;
    text-indent: 4px;
    font-weight: 400;
}
.crumbs a {
    font-size: 12px;
}
</style>
<div class="crumbs">
    <span class="breadcrumb">
        <a href="/">首页 </a>
        <?php 
        	if (isset($crumb_two))
        	{
        		if (isset($crumb_three))
        		{
        			if(isset($crumb_two_href))
        			{
        				echo "<i>&gt;</i> <a href='".$crumb_two_href."'>".$crumb_two."</a><i>&gt;</i> ".$crumb_three;
        			}
        			else 
        			{
        				echo "<i>&gt;</i> <a href='/'>".$crumb_two."</a><i>&gt;</i> ".$crumb_three;
        			}
        		}
        		else 
        		{
        			echo "<i>&gt;</i> ".$crumb_two;
        		}
        	}
        ?>
    </span>
</div>