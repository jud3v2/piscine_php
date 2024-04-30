<?php

// DELETE SI PAS DE FONCTION SPECIFIQUE
$func = 'print_array';
$args = [["key1" => 'val1', "key2" => 'val2']];

try
{
  if ($argc != 2 || !file_exists($file = $argv[1]) || !is_file($file) || !is_readable($file)) throw new Exception('Usage : ./test.php path/to/your/exercice.php' . PHP_EOL);
  ob_start();
  require_once($file);
  if (isset($func)) {
    if (!function_exists($func)) throw new Exception("The function $func does not exist." . PHP_EOL);
    if (isset($args)) var_dump(call_user_func_array($func, $args));
    else var_dump(call_user_func_array($func));
  }
  $result = md5(ob_get_clean());
  echo 'MD5 of your result : ' . $result . PHP_EOL;
  if ($result === file_get_contents('result')) {
      throw new Exception('Your exercice could be correct.' . PHP_EOL);
  } else {
	    throw new Exception('Your exercice is not correct.' . PHP_EOL);
	}
}
catch (Exception $e)
{
  die($e->getMessage());
}