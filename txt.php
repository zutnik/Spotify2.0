<?php
require_once __DIR__ . '/config.php';
$connection = db_connect();
$query = "select * into outfile 'd:/ospanel/userdata/temp/media.txt' from media";
$result = $connection->query($query);
?>