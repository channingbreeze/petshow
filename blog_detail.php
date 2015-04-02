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
			background-color : #6DDBFF;
			margin-top : 30px;
		}
		.blogTitle {
			font-size : 50px;
			color : #2B6BB2;
			padding-top : 30px;
			text-align : center;
		}
		.blogArticle {
			margin-top : 30px;
		}
		.blogArticle p {
			text-indent : 40px;
			margin-top : 15px;
			margin-bottom : 15px;
			line-height : 30px;
			font-size : 20px;
			margin-left : 40px;
			margin-right : 40px;
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

	if(!isset($_GET['blogId'])) {
		$title = "no such blog";
		$content = "<p>I am sorry, no such blog</p>";
	} else {
		$sql = "select * from blog where id=" . $_GET['blogId'];
		$res = $sqlHelper->execute_dql_array($sql);
		if(count($res) > 0) {
			$title = $res[0]['title'];
			$content = $res[0]['content'];
		} else {
			$title = "no such blog";
			$content = "<p>I am sorry, no such blog</p>";
		}
	}
	
?>
		<div class="blog">
			<div class="blogTitle"><?php echo $title;?></div>
			<div class="blogArticle">
				<?php echo $content;?>
			</div>
			<div style="height : 30px;"></div>
		</div>
	</div>
</body>