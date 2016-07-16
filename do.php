<?php
/**
 * do.php
 * 
 * Main controller of do.php library. It checks action argument from GET and excute the action, and then return JSON response.
 * @author Jihun Song
 * @version 0.1
 * @example ./do.php?action=example0
 */
define(_DO_PHP, true);

try
{
  require_once($_SERVER["DOCUMENT_ROOT"] . "/include/ArgumentTool.php");
  
  ArgumentTool::CheckGet("action");
  $action = $_GET["action"];
  
  $actionFile = "./action/$action.php";

  if(file_exists($actionFile))
  {
    include($actionFile);
  }
  else
  {
    throw new Exception("The action is not valid or [$action.php] file dose not exists. (action : [$action])");
  }
}
catch(Exception $e)
{
  // Return error
  $response["error"] = $e->getMessage();
}

echo(json_encode($response));
?>