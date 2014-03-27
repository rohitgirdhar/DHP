<?php
$url = 'http://ideone.com/plain/'.$_GET['id'];
echo file_get_contents($url);
?>
