<?php
	require_once dirname ( __FILE__ ) . '/SQLHelper.class.php';
	if(isset($_POST['titleId'])) {
		$sqlHelper = new SQLHelper();
		$sql = "select * from picture where title_id=" . $_POST['titleId'];
		$res = $sqlHelper->execute_dql_array($sql);
		$arr = array();
		$arr['pic'] = $res;
		$sql = "select * from pic_title where id=" . $_POST['titleId'];
		$title = $sqlHelper->execute_dql_array($sql);
		$arr['title'] = $title[0]['title']; 
		echo json_encode($arr);
	} else {
		echo "false";
	}
?>