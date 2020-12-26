<?php
$connection = new mysqli("127.0.0.1","mysql","mysql",'spotify');
$query = "select * into outfile 'd:/ospanel/userdata/temp/media.txt' from media";
$result = $connection->query($query);
?>