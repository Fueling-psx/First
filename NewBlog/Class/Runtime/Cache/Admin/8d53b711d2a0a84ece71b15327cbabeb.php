<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>风筝</title>
<link href="/NewBlog/Public/assets/global/css/admin.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/NewBlog/Public/assets/global/css/wysiwyg-editor.css" />
</head>
<body>
<div class="admin-bg"></div>
<div class="frameset">
	<div class="top">
		<div class="left">
			<img src="/NewBlog/Public/assets/global/img/风筝.PNG" alt="" />
			<span>风筝</span>
			<div class="nav">
				<a href="<?php echo U('/NewBlog/index.php?m=Home&c=index&a=index');?>">主页</a>
				<a href="<?php echo U('Index/index');?>">博客管理</a>
				<a href="<?php echo U('Index/addBlog');?>">写博客</a>
				<a href="<?php echo U('Index/pageChange');?>">页面修改</a>
				<a href="<?php echo U('Index/userinfo');?>">个人信息</a>
			</div>
			
		</div>
		<div class="right">
			<div class="user">
				<img src="/NewBlog/Public/assets/global/img/<?php echo ($userInfo['avatar_file']); ?>" alt="" />
				<span><?php echo ($userInfo['name']); ?></span>
			</div>
		</div>
	</div>
	<div class="container">

		<div class="right">
				
	<div class="main">
		<div class="index-con">
			<div class="title"><a href="">页面修改</a></div>
			<div class="container">
				<table>
					<tr class="first">
						<td>页面</td>
						<td>签名</td>
						<td>背景图</td>
						<td>操作</td>
					</tr>
					<?php if(is_array($Allpage)): $i = 0; $__LIST__ = $Allpage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
							<td><?php echo ($vo["name"]); ?></td>
							<td><?php echo ($vo["index_show"]); ?></td>
							<td><a href=""  class="img-bac"><?php echo ($vo["img"]); ?></a></td>
							<td><a href="<?php echo U('index/change',array('id'=>$vo['id']));?>">编辑</a></td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
				</table>
			</div>
		</div>
	</div>
	<script type="text/javascript" class="autoinsert" src="/NewBlog/Public/assets/plugins/jquery/jquery-2.1.3.min.js"></script> 
	<script>
	$(function(){
		$(".img-bac").on('click',function(e){
			e.preventDefault();
			$(".admin-bg").css({
				display:"block",
				height:$(document).height(),
				width:$(document).width(),
			});
			var attr=$(this).html();
			$(".page-img img").attr("src","/NewBlog/Public/assets/global/img/"+attr);
			var $box = $('.page-img');
	        $box.css({
	            //设置弹出层距离左边的位置
	            left: ($("body").width() - $box.width()) / 2 - 20 + "px",
	            //设置弹出层距离上面的位置
	            top: ($(window).height() - $box.height()) / 2 + $(window).scrollTop() + "px",
	            display: "block"
	        });
			
			$(document.body).css({
			   "overflow-x":"hidden",
			   "overflow-y":"hidden"
			}); 
		});
		var close = function(){
				$(".admin-bg").css({
					display:"none"
				});
				$(".page-img").css({
					display:"none"
				});
				$(document.body).css({
					   "overflow-x":"auto",
					   "overflow-y":"auto"
				});
		}
		$(".page-img span a").on('click',function(e){
			e.preventDefault();
			close();
		})
	});
			
	</script>

		</div>
	</div>
	<div class="bottom"></div>
</div>
<div class="page-img">
			<span><a href="">×</a></span>
			<img src="" alt="" />
</div>
</body>
</html>