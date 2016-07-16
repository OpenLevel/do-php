<?php
/**
 * ArgumentTool
 * 
 * Some functions related to arguments.
 * @author Jihun Song
 * @version 0.1
 */

class ArgumentException extends Exception { }

class ArgumentTool
{
  /**
   * It checks wheather an argument (or arguments) exist(s) on POST variables.
   *
   * @param String ...$argumentName : a name (or names) of the argument(s) to check.
   * @example CheckPost("name", "password", "age"); to check name, password and age arguments on POST variables.
   * @return void
   * @throws ArgumentException if the argument does not exist on POST variables.
   */
  public static function CheckPost()
  {
    foreach(func_get_args() as $arg)
	  if(!isset($_POST[$arg]))
        throw new ArgumentException("Argument '$arg' is not set on POST variables.");
  }
  
  /**
   * It checks wheather an argument (or arguments) exist(s) on GET variables.
   *
   * @param String ...$argumentName : a name (or names) of the argument(s) to check.
   * @example CheckGet("name", "password", "age"); to check name, password and age arguments on GET variables.
   * @return void
   * @throws ArgumentException if the argument does not exist on POST variables.
   */
  public static function CheckGet()
  {
	foreach(func_get_args() as $arg)
	  if(!isset($_GET[$arg]))
        throw new ArgumentException("Argument '$arg' is not set on GET variables.");
  }
  
  /**
   * It checks wheather an argument (or arguments) exist(s) on POST or GET variables.
   *
   * @param String ...$argumentName : a name (or names) of the argument(s) to check.
   * @example Check("name", "password", "age"); to check name, password and age arguments on POST or GET variables.
   * @return void
   * @throws ArgumentException if the argument does not exist on POST and GET variables.
   */
  public static function Check()
  {
	foreach(func_get_args() as $arg)
	  if(!isset($_POST[$arg]) && !isset($_GET[$arg]))
        throw new ArgumentException("Argument '$arg' is not set on POST and GET variables.");
  }
}
?>