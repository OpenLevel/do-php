<?php
// To test : http://localhost/do.php?action=example0

include($_SERVER["DOCUMENT_ROOT"] . "/include/deny.php");

// Return a simple Hello message.
$response["test"] = "Hello do.php!";
?>