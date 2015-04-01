<?php
	require_once dirname ( __FILE__ ) . '/SQLHelper.class.php';
	if(isset($_FILES['pic'])) {
		if(is_uploaded_file($_FILES['pic']['tmp_name'])) {
			if($_FILES['pic']['size'] < 1000000) { //不能超过1M
				$extension = substr($_FILES['pic']['name'], strpos($_FILES['pic']['name'], "."));
				if(strcasecmp($extension, ".jpg") && strcasecmp($extension, ".png")) {
					echo "extension error";
				} else {
					$path = "images/pics/" . time() . "_" . rand(1, 10000) . $extension;
					move_uploaded_file($_FILES["pic"]["tmp_name"], dirname ( __FILE__ ) . "/" . $path);
					$sqlHelper = new SQLHelper();
					$sql = "insert into picture (title_id, path) values (" . $_GET['titleId'] . ", '" . $path . "')";
					$res = $sqlHelper->execute_dqm($sql);
					if($res != 1) {
						echo "database operate error";
					} else {
						echo "success";
					}
				}
			} else {
				echo "file too large";
			}
		} else {
			echo "error";
		}
	} else {
		echo "error, check php.ini";
	}
?>