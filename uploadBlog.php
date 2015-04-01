<?php
	require_once dirname ( __FILE__ ) . '/SQLHelper.class.php';
	if(isset($_POST['title']) && isset($_POST['article'])) {
		$title = $_POST['title'];
		$article = "<p>";
		$article = $article . str_replace("\n", "</p><p>", $_POST['article']);
		$article = $article . "</p>";
		$short = substr($_POST['article'], 0, 100);
		$short = str_replace("\n", " ", $short);
		$short = $short . "...";
		$sqlHelper = new SQLHelper();
		$sql = "insert into blog (title, short_content, content) values ('" . $title . "', '" . $short . "', '" . $article . "')";
		if(1 == $sqlHelper->execute_dqm($sql)) {
			echo "true";
		} else {
			echo "false";
		}
	} else {
		echo "false";
	}
?>