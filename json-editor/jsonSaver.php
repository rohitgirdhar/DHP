<?php
	$id = $_GET['id'];
	$json = $_POST['data'];
	file_put_contents('../../timelines-data/' . $id . '.json', $json);
?>
