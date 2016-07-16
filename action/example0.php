<?php
// To test : http://127.0.0.1/do.php?action=example0

include($_SERVER["DOCUMENT_ROOT"] . "/include/deny.php");

// Return a simple Hello message.
$response["test"] = "Hello do.php!";
?>