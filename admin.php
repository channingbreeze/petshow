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
		.loginLine {
			text-align : center;
			font-size : 30px;
			margin-top : 30px;
		}
		.loginLine input {
			height : 30px;
			vertical-align: top;
		}
		.loginLine input[type="submit"] {
			font-size : 30px;
			height : 50px;
			width : 100px;
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
		#addPic {
			cursor : pointer;
		}
		#uploadPic {
			display : none;
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
		<?php 
			$login = false;
			session_start();
			if(!isset($_SESSION['petuser'])) {
				if(isset($_POST['username']) && isset($_POST['password'])) {
					if($_POST['username'] == "admin" && isset($_POST['password']) == "admin") {
						$_SESSION['petuser'] = "admin";
						$login = true;
					}
				}
			} else {
				$login = true;
			}
		?>
			<?php 
				if(!$login) {
			?>
			<div class="selectDiv">
				<div class="loginLine">请登陆</div>
				<form action="#" method="post">
					<div class="loginLine">用户名：<input type="text" name="username" /></div>
					<div class="loginLine">密　码：<input type="password" name="password" /></div>
					<div class="loginLine"><input type="submit" value="登陆" /></div>
				</form>
			</div>
			<?php 
				} else {
			?>
			<script>
				var curTitleId = 1;
			</script>
			<div class="selectDiv">
				<select id="selectPicTitle">
				<?php 
					require_once dirname ( __FILE__ ) . '/SQLHelper.class.php';
					$sqlHelper = new SQLHelper();
					$sql = "select * from pic_title";
					$picTitles = $sqlHelper->execute_dql_array($sql);
					foreach ($picTitles as $picTitle) {
				?>
					<option value="<?php echo $picTitle['id'];?>"><?php echo $picTitle['title'];?></option>
				<?php 
					}
				?>
					<option value="-1">添加</option>
				</select>
				<script>
					curTitleId = 
					<?php if (count($picTitles) > 0) {
						 echo $picTitles[0]['id'];
					} else {
						echo "1";
					}
					?>;
				</script>
			</div>
			<div class="picDiv">
				<div class="picTitle">狗狗的故事</div>
				<ul class="picUl">
					<div id="pics">
					</div>
					<li id="addPic"><img src="images/add.jpg" /></li>
					<input id="uploadPic" name="pic" type="file" />
				</ul>
				<div style="clear : both;"></div>
			</div>
			<div class="blogDiv">
				<form id="blogForm" action="#" method="post">
					<input id="blogTitle" type="text" name="title" placeholder="标题"/>
					<textarea id="blogArticle" name="article" placeholder="正文" cols="100" rows="30"></textarea>
					<button id="submitBlog">提交</button>
				</form>
			</div>
			<?php 
				}
			?>
			<script>
				// 更新图片
				var selectPic = function(titleId) {
					var	xhr = new XMLHttpRequest();
					xhr.open("POST", "getPics.php", true);
					xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
					xhr.onreadystatechange = function() {
						if (xhr.readyState == 4) {
							if (xhr.status == 200) {
								if(xhr.responseText != "false") {
									var picJson = JSON.parse(xhr.responseText);
									var lis = "";
									for (var i in picJson) {
										lis += '<li><img src="' + picJson[i].path + '" /></li>';
									}
									document.getElementById('pics').innerHTML = lis;
								}
							}
						}
					};
					xhr.send("titleId=" + titleId);
				};
				// select逻辑
				var selectPicTitle = document.getElementById("selectPicTitle");
				selectPic(curTitleId);
				selectPicTitle.onchange = function() {
					if(selectPicTitle.value == -1) {
						var res = window.prompt('请输入新Title：');
						if(res) {
							// ajax 添加新Title
							var	xhr = new XMLHttpRequest();
							xhr.open("POST", "addTitle.php", true);
							xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
							xhr.onreadystatechange = function() {
								if (xhr.readyState == 4) {
									if (xhr.status == 200) {
										if(xhr.responseText == "true") {
											window.location.reload();
										} else {
											window.alert('添加新Title失败');
										}
									}
								}
							};
							xhr.send("newTitle=" + res);
						}
					} else {
						curTitleId = selectPicTitle.value;
						selectPic(curTitleId);
					}
				};
				// 添加图片逻辑
				document.getElementById("addPic").onclick = function() {
					document.getElementById("uploadPic").click();
				}
				// 上传逻辑
				document.getElementById('uploadPic').onchange = function() {
			        var fd = new FormData();
			        fd.append(this.name, this.files[0]);
			        var xhr = new XMLHttpRequest();
			        xhr.open('POST', 'uploadPic.php?titleId=' + curTitleId, true);
			        xhr.onreadystatechange = function() {
						if (xhr.readyState == 4) {
							if (xhr.status == 200) {
								if(xhr.responseText == "success") {
									selectPic(curTitleId);
								} else {
									window.alert(xhr.responseText);
								}
							}
						}
					};
		        	xhr.send(fd);
				}
				// 提交日记
				document.getElementById('submitBlog').onclick = function(e) {
					e.preventDefault();
					var	xhr = new XMLHttpRequest();
					xhr.open("POST", "uploadBlog.php", true);
					xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
					xhr.onreadystatechange = function() {
						if (xhr.readyState == 4) {
							if (xhr.status == 200) {
								if(xhr.responseText == "true") {
									window.alert("添加成功");
								} else {
									window.alert("操作失败");
								}
							}
						}
					};
					xhr.send("title=" + document.getElementById("blogTitle").value
						+ "&article=" + document.getElementById("blogArticle").value);
				}
			</script>
		</div>
	</div>
</body>