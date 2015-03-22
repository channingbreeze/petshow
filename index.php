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
		<div class="picDiv">
			<ul class="picUl">
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
				</li>
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
				</li>
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
				</li>
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
				</li>
			</ul>
			<div style="clear : both; height : 10px;"></div>
		</div>
		<div class="blogDiv">
			<ul class="blogUl">
				<li class="blogLi">
					<div class="blogTitle">狗狗到我家</div>
					<div class="blogArticle">
					有一天，我在路上遇到一只小狗。就用声问：“小汪，你怎么在这，你的主人呢？”“汪汪，我被主人赶出来了，我的主人是小明。”小狗好像说。我好奇地继续又问：“那你主人为什么把你赶出门呢？”小狗愁眉苦脸地回答道：“我跟小明看电视，我们看到公益广告，那个汽车排气管排出烟雾全是灰色，把屏幕弄得全灰色，我也不懂就随便大叫，小明叫我别吵，但我还叫着，小明一脚把我给踹到门外，我只好在街上走来走去，哎！”我叹了口气说：“你也够可怜的，哦！我觉得你也叫得对……
					</div>
				</li>
				<li class="blogLi">
					<div class="blogTitle">狗狗到我家</div>
					<div class="blogArticle">
					有一天，我在路上遇到一只小狗。就用声问：“小汪，你怎么在这，你的主人呢？”“汪汪，我被主人赶出来了，我的主人是小明。”小狗好像说。我好奇地继续又问：“那你主人为什么把你赶出门呢？”小狗愁眉苦脸地回答道：“我跟小明看电视，我们看到公益广告，那个汽车排气管排出烟雾全是灰色，把屏幕弄得全灰色，我也不懂就随便大叫，小明叫我别吵，但我还叫着，小明一脚把我给踹到门外，我只好在街上走来走去，哎！”我叹了口气说：“你也够可怜的，哦！我觉得你也叫得对……
					</div>
				</li>
			</ul>
		</div>
	</div>
</body>