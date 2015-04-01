<?php
	require_once dirname ( __FILE__ ) . '/SQLHelper.class.php';
	if(isset($_POST['titleId'])) {
		$sqlHelper = new SQLHelper();
		$sql = "select * from picture where title_id=" . $_POST['titleId'];
		$res = $sqlHelper->execute_dql_array($sql);
		echo json_encode($res);
	} else {
		echo "false";
	}
?>