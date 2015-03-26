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
		.picDiv, .blogDiv {
			width : 100%;
			
			background-color : #6CDBFF;
			margin-top : 10px;
		}
		.picUl {
			width : 800px;
			margin : 0px auto;
		}
		.picLi {
			list-style-type : none;
			width : 350px;
			float : left;
			margin-left : 40px;
		}
		.picLi li {
			list-style-type : none;
			float : left;
			margin-top : 10px;
			margin-left : 10px;
		}
		.picTitle {
			color : #2B6BB2;
			font-size : 20px;
			font-weight : bold;
			text-align : center;
			margin-top : 10px;
		}
		.blogUl {
			width : 900px;
			margin : 0px auto;
			
		}
		.blogLi {
			list-style-type : none;
			padding-top : 15px;
			padding-bottom : 15px;
		}
		.blogTitle {
			color : #2B6BB2;
			font-size : 50px;
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
	// 选出前四个pic_title
	$sql = "select * from pic_title limit 0,4";
	$picTitles = $sqlHelper->execute_dql_array($sql);
?>
		<div class="picDiv">
			<ul class="picUl">
				<?php 
					foreach ($picTitles as $picTitle) {
				?>
				<li class="picLi">
					<div class="picTitle"><?php echo $picTitle['title'];?></div>
					<ul>
						<?php 
							$sql = "select * from picture where title_id=" . $picTitle['id'] . " order by id desc limit 0,9";
							$pictures = $sqlHelper->execute_dql_array($sql);
							foreach($pictures as $picture) {
						?>
						<li><img src="<?php echo $picture['path'];?>" /></li>
						<?php 
							}
						?>
					</ul>
				</li>
				<?php
					}
				?>
			</ul>
			<div style="clear : both; height : 10px;"></div>
		</div>
		<div class="blogDiv">
			<ul class="blogUl">
			<?php 
				$sql = "select * from blog order by id desc limit 0,2";
				$blogs = $sqlHelper->execute_dql_array($sql);
				foreach ($blogs as $blog) {
			?>
				<li class="blogLi">
					<div class="blogTitle"><?php echo $blog['title'];?></div>
					<div class="blogArticle">
					<?php echo $blog['short_content'];?>
					</div>
				</li>
			<?php 
				}
			?>
			</ul>
		</div>
	</div>
</body>