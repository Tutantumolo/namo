<?php
// Proxy per SSRF4
echo file_get_contents('http://127.0.0.1/get_flag.php');
?>
