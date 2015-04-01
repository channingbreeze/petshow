<?php
	require_once dirname ( __FILE__ ) . '/SQLHelper.class.php';
	if(isset($_POST['newTitle'])) {
		$sqlHelper = new SQLHelper();
		$sql = "insert into pic_title (title) values ('" . $_POST['newTitle'] . "')";
		$res = $sqlHelper->execute_dqm($sql);
		if($res == 1) {
			echo "true";
		} else {
			echo "false";
		}
	} else {
		echo "false";
	}
?>