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
		.bodyDiv {
			width : 100%;
			background-color : #6DDBFF;
			padding-top : 10px;
			padding-bottom : 10px;
		}
		.picDiv, .blogDiv {
			width : 950px;
			background-color : #29CAFF;
			margin : 30px auto;
			padding : 15px;
		}
		.selectDiv {
			width : 950px;
			background-color : #29CAFF;
			margin : 10px auto;
			padding : 15px;
		}
		.blogDiv {
			text-align : center;
		}
		.picTitle {
			color : #2B6BB2;
			font-size : 40px;
		}
		.picUl li {
			list-style-type : none;
			float : left;
			margin : 15px;
		}
		.bodyDiv select {
			width : 200px;
			height : 30px;
		}
		.blogDiv input[type="text"] {
			width : 100%;
			height : 30px;
			font-size : 20px;
		}
		.blogDiv textarea {
			margin-top : 10px;
			width : 100%;
			font-size : 20px;
		}
		.blogDiv button {
			background-color : #4C42C7;
			color : white;
			width : 150px;
			height : 50px;
			font-size : 30px;
			margin-top : 10px;
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
		<div class="bodyDiv">
			<div class="selectDiv">
				<select>
					<option>狗狗的故事</option>
					<option>狗狗的故事</option>
					<option>狗狗的故事</option>
				</select>
			</div>
			<div class="picDiv">
				<div class="picTitle">狗狗的故事</div>
				<ul class="picUl">
					<li><img src="images/pics/pic1.jpg" /></li>
					<li><img src="images/pics/pic2.jpg" /></li>
					<li><img src="images/pics/pic3.jpg" /></li>
					<li><img src="images/pics/pic4.jpg" /></li>
					<li><img src="images/pics/pic5.jpg" /></li>
					<li><img src="images/pics/pic6.jpg" /></li>
					<li><img src="images/pics/pic7.jpg" /></li>
					<li><img src="images/pics/pic8.jpg" /></li>
					<li><img src="images/pics/pic9.jpg" /></li>
					<li><img src="images/add.jpg" /></li>
				</ul>
				<div style="clear : both;"></div>
			</div>
			<div class="blogDiv">
				<form action="#" method="post">
					<input type="text" name="title" placeholder="标题"/>
					<textarea name="article" placeholder="正文" cols="100" rows="30"></textarea>
					<button>提交</button>
				</form>
			</div>
		</div>
	</div>
</body>