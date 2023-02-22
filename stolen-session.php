<?php

$data = $_GET['session_id'];
$fp = fopen('session.txt', 'w');
fwrite($fp, $data);
fclose($fp);
?>