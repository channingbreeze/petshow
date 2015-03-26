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
			cursor : pointer;
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
			cursor : pointer;
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
<?php 
	require_once dirname ( __FILE__ ) . '/SQLHelper.class.php';
	$sqlHelper = new SQLHelper();
	$sql = "select * from pic_title";
	$picTitles = $sqlHelper->execute_dql_array($sql);
?>
		<script>
			var titles = {};
		</script>
		<div class="picDiv">
			<ul class="picUl">
				<div style="height : 30px;"></div>
				<?php 
					foreach ($picTitles as $picTitle) {
				?>
				<script>
					var pics = new Array();
				</script>
				<li class="picLi">
					<div class="picTitle"><?php echo $picTitle['title'];?></div>
					<ul>
						<?php 
							$sql = "select * from picture where title_id=" . $picTitle['id'] . " limit 0,9";
							$pictures = $sqlHelper->execute_dql_array($sql);
							foreach($pictures as $index => $picture) {
						?>
						<li class="imgLi" pid="<?php echo $picTitle['id'];?>" id="<?php echo $index;?>"><img src="<?php echo $picture['path'];?>" width="100px" height="100px" /></li>
						<script>
							pics[<?php echo $index;?>] = "<?php echo $picture['path'];?>";
						</script>
						<?php 
							}
						?>
					</ul>
					<div style="clear : both;"></div>
				</li>
				<div style="height : 30px;"></div>
				<script>
					titles[<?php echo $picTitle['id'];?>] = pics;
				</script>
				<?php
					}
				?>
			</ul>
		</div>
	</div>
	<div id="bigPic">
		<div class="grayDiv" id="grayDiv"></div>
		<div class="wrapDiv"><img id="bigImg" width="500px" height="500px" /></div>
		<div class="leftButton"><img id="leftButton" src="images/left.png" /></div>
		<div class="rightButton"><img id="rightButton" src="images/right.png" /></div>
	</div>
	<script>
		var curIndex;
		var curTitleId;
		setTimeout(function() {
			document.getElementById("grayDiv").style.height = document.body.scrollHeight + "px";
		}, 100);
		document.getElementById("bigPic").style.display = 'none';
		var showBigImg = function(path) {
			document.getElementById("bigImg").setAttribute("src", path);
			if(document.getElementById("bigPic").style.display == 'none') {
				document.getElementById("bigPic").style.display = 'block';
			}
		}
		var hideBigImg = function() {
			if(document.getElementById("bigPic").style.display == 'block') {
				document.getElementById("bigPic").style.display = 'none';
			}
		}
		document.getElementById("bigPic").onclick = function(e) {
			if(e.target.id == "grayDiv") {
				hideBigImg();
			} else if(e.target.id == "leftButton") {
				curIndex--;
				if(curIndex < 0) {
					curIndex = titles[curTitleId].length-1;
				}
				showBigImg(titles[curTitleId][curIndex]);
			} else if(e.target.id == "rightButton") {
				curIndex++;
				if(curIndex >= titles[curTitleId].length) {
					curIndex = 0;
				}
				showBigImg(titles[curTitleId][curIndex]);
			}
		}
		var imgLis = document.querySelectorAll(".imgLi");
		for (index in imgLis) {
			imgLis[index].onclick = function() {
				curIndex = this.getAttribute("id");
				curTitleId = this.getAttribute("pid");
				showBigImg(titles[curTitleId][curIndex]);
			};
		}
	</script>
</body>