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
		.picDiv {
			width : 100%;
			background-color : #6DDBFF;
			margin-top : 30px;
		}
		.picLi {
			width : 950px;
			background-color : #29CAFF;
			list-style-type : none;
			margin : 0px auto;
			padding : 5px;
		}
		.picTitle {
			color : #2B6BB2;
			font-size : 40px;
		}
		.picLi ul {
			width : 900px;
			margin : 0px auto;
		}
		.picLi li {
			list-style-type : none;
			float : left;
			margin : 25px;
		}
		.grayDiv {
			position : absolute;
			width : 100%;
			height : 100%;
			background-color : gray;
			top : 0px;
			left : 0px;
			opacity : 0.5;
		}
		.wrapDiv {
			position : fixed;
			top : 100px;
			left : -250px;
			width ：100%;
			margin-left : 50%;
		}
		.leftButton, .rightButton {
			position : fixed;
			top : 300px;
			width ：100%;
			margin-left : 50%;
		}
		.leftButton {
			left : -320px;
		}
		.rightButton {
			left : 270px;
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
		<div class="picDiv">
			<ul class="picUl">
				<div style="height : 30px;"></div>
				<li class="picLi">
					<div class="picTitle">喵喵和狗狗</div>
					<ul>
						<li><img src="images/pics/pic1.jpg" /></li>
						<li><img src="images/pics/pic2.jpg" /></li>
						<li><img src="images/pics/pic3.jpg" /></li>
						<li><img src="images/pics/pic4.jpg" /></li>
						<li><img src="images/pics/pic5.jpg" /></li>
						<li><img src="images/pics/pic6.jpg" /></li>
						<li><img src="images/pics/pic7.jpg" /></li>
						<li><img src="images/pics/pic8.jpg" /></li>
						<li><img src="images/pics/pic9.jpg" /></li>
					</ul>
					<div style="clear : both;"></div>
				</li>
				<div style="height : 30px;"></div>
				<li class="picLi">
					<div class="picTitle">喵喵和狗狗</div>
					<ul>
						<li><img src="images/pics/pic1.jpg" /></li>
						<li><img src="images/pics/pic2.jpg" /></li>
						<li><img src="images/pics/pic3.jpg" /></li>
						<li><img src="images/pics/pic4.jpg" /></li>
						<li><img src="images/pics/pic5.jpg" /></li>
						<li><img src="images/pics/pic6.jpg" /></li>
						<li><img src="images/pics/pic7.jpg" /></li>
						<li><img src="images/pics/pic8.jpg" /></li>
						<li><img src="images/pics/pic9.jpg" /></li>
					</ul>
					<div style="clear : both;"></div>
				</li>
				<div style="height : 30px;"></div>
				<li class="picLi">
					<div class="picTitle">喵喵和狗狗</div>
					<ul>
						<li><img src="images/pics/pic1.jpg" /></li>
						<li><img src="images/pics/pic2.jpg" /></li>
						<li><img src="images/pics/pic3.jpg" /></li>
						<li><img src="images/pics/pic4.jpg" /></li>
						<li><img src="images/pics/pic5.jpg" /></li>
						<li><img src="images/pics/pic6.jpg" /></li>
						<li><img src="images/pics/pic7.jpg" /></li>
						<li><img src="images/pics/pic8.jpg" /></li>
						<li><img src="images/pics/pic9.jpg" /></li>
					</ul>
					<div style="clear : both;"></div>
				</li>
				<div style="height : 30px;"></div>
			</ul>
		</div>
	</div>
	<div class="grayDiv" id="grayDiv"></div>
	<div class="wrapDiv"><img src="images/pics/pic1.jpg" width="500px" height="500px" /></div>
	<div class="leftButton"><img src="images/left.png" /></div>
	<div class="rightButton"><img src="images/right.png" /></div>
	<script>
		setTimeout(function() {
			document.getElementById("grayDiv").style.height = document.body.scrollHeight + "px";
		}, 100);
	</script>
</body>