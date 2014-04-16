<?php
$url = 'http://socionity.iiit.ac.in/gpsapp/gpsback-timeline/timelines-data/' . $_GET['id'] . '.json';
echo file_get_contents($url);
?>
