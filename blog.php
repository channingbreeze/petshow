<!DOCTYPE html>
<head>
	<meta charset=utf-8 />
	<title>pet show</title>
	<style>
		* {
			margin : 0px;
			padding : 0px;
		}
		body {
			background-color : #B1ECFE;
		}
		.totalDiv {
			width : 1000px;
			margin : 10px auto;
		}
		.titleDiv {
			width : 100%;
			height : 100px;
			background-color : #AEFFCF;
			margin-top : 10px;
		}
		.imgDiv {
			float : left;
		}
		.twoTitle {
			float : left;
		}
		.bigTitle {
			font-size : 45px;
			color : #FF5400;
			font-weight : bold;
			margin-top : 8px;
			margin-left : 28px;
		}
		.subTitle {
			font-size : 20px;
			color : #FF0000;
			margin-top : 5px;
			margin-left : 35px;
		}
		.menu {
			float : left;
			margin-left : 120px;
			margin-top : 15px;
		}
		.menu li {
			float : left;
			margin-left : 50px;
			list-style-type : none;
		}
		.menu a {
			font-size : 60px;
			text-decoration : none;
			color : #FFC600;
		}
		.menu a:hover {
			color : #6CDBFF;
		}
		.blog {
			margin-top : 30px;
			background-color : #6DDAFF;
		}
		.blog li {
			list-style-type : none;
			background-color : #29CAFF;
			width : 950px;
			margin : 0px auto;
			padding : 15px;
			cursor : pointer;
		}
		.blogTitle {
			margin-top : 10px;
			color : #2B6BB2;
			font-size : 50px;
		}
		.blogArticle {
			font-size : 20px;
			text-indent : 40px;
			margin-top : 20px;
			word-wrap: break-word;
		}
	</style>
</head>
<body>
	<div class="totalDiv">
		<div class="titleDiv">
			<div class="imgDiv">
				<img src="images/logo.jpg" width="150px" height="100px" />
			</div>
			<div class="twoTitle">
				<div class="bigTitle">
					宠恋秀
				</div>
				<div class="subTitle">
					秀出你的宠物
				</div>
			</div>
			<div class="menu">
				<ul>
					<li><a href="index.php">首页</a></li>
					<li><a href="pic.php">图片</a></li>
					<li><a href="blog.php">日记</a></li>
				</ul>
			</div>
		</div>
<?php 
	require_once dirname ( __FILE__ ) . '/SQLHelper.class.php';
	$sqlHelper = new SQLHelper();
	$sql = "select * from blog";
	$blogs = $sqlHelper->execute_dql_array($sql);
?>
		<div class="blog">
			<ul>
				<div style="height : 30px;"></div>
				<?php 
					foreach ($blogs as $blog) {
				?>
				<li class="blogLi" id="<?php echo $blog['id'];?>">
					<div class="blogTitle"><?php echo $blog['title'];?></div>
					<div class="blogArticle">
					<?php echo $blog['short_content'];?></div>
				</li>
				<div style="height : 30px;"></div>
				<?php 
					}
				?>
			</ul>
		</div>
		<script>
			var blogLis = document.querySelectorAll(".blogLi");
			for (index in blogLis) {
				blogLis[index].onclick = function() {
					var id = this.getAttribute("id");
					window.location.href = "blog_detail.php?blogId="+id;
				}
			}
		</script>
	</div>
</body>