<?php
// To test : http://localhost/do.php?action=example2&name=jihun&password=1q2w3e4r
// To test argument exception : http://localhost/do.php?action=example2
include($_SERVER["DOCUMENT_ROOT"] . "/include/deny.php");

// Check the arguments. For POST requests, use 'checkPost' function instead.
ArgumentTool::CheckGet("name", "password");

// Some database codes here

// Return a result.
$response["isFailed"] = "true";
$response["result"] = "Not implemented.";
?>