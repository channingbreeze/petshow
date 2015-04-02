<?php
	require_once dirname ( __FILE__ ) . '/SQLHelper.class.php';
	$sqlHelper = new SQLHelper();
	$sql = "select * from pic_title";
	$res = $sqlHelper->execute_dql_array($sql);
	echo json_encode($res);
?>