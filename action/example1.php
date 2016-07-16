<?php
// To test : http://localhost/do.php?action=example1&test=123&test2=abc

include($_SERVER["DOCUMENT_ROOT"] . "/include/deny.php");

// Echo.
$response = $_GET;
?>