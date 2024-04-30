<?php

define('HOME', getenv('HOME'));

foreach (range(1, 4) as $v) {
  if (file_exists($f = "./ex_0$v.php")) include($f);
}
if (file_exists($f = "./bonus.php")) include($f);

if (function_exists("rev_epur_str")) {
  echo "=== Exercice 1 ===\n";
  ob_start();
  var_dump(rev_epur_str("salut ça va ?"));
  $v = ob_get_contents();
  ob_end_clean();
  echo "Test de l'exercice 1... [" . (md5($v) == "a60e424a0d7884544e19ae230ad50b24" ? 'Your exercice could be correct.' : 'Your exercice is not correct.') . "]\n";
  echo "\n";
}
if (function_exists("min_len_array")) {
  echo '=== Exercice 2 ===' . PHP_EOL;
  ob_start();
  var_dump(min_len_array(['key1' => 'val1',
 'k2' => 'val2']));
  $v = ob_get_contents();
  ob_end_clean();
  echo 'Test de l\'exercice 2... [' . (md5($v) == 
'6f01421f66f5aaaef39428f07d7ef551' ? 'Your exercice could be correct.' :
 'Your exercice is not correct.') . ']' . PHP_EOL . PHP_EOL;
}
if (function_exists("resum_join_str")) {
  echo '=== Exercice 3 ===' . PHP_EOL;
  ob_start();
  var_dump(resum_join_str('12345678', 'a'));
  $v = ob_get_contents();
  ob_end_clean();
  echo 'Test de l\'exercice 3... [' . (md5($v) == 
'e6cfd0a5c03767e4f0a694681108bed1' ? 'Your exercice could be correct.' :
 'Your exercice is not correct.') . ']' . PHP_EOL . PHP_EOL;
}
if (function_exists("return_calls")) {
  function xxxxxxxxxxxmoulibxxxxxxxxxxxxxxxxxx($a) {}
  echo '=== Exercice 4 ===' . PHP_EOL;
  ob_start();
  var_dump(return_calls('xxxxxxxxxxxmoulibxxxxxxxxxxxxxxxxxx', 
['salut']));
  $v = ob_get_contents();
  ob_end_clean();
  echo 'Test de l\'exercice 4... [' . (md5($v) == 
'b46c4cdc97840888876b6cd59e66e178' ? 'Your exercice could be correct.' :
 'Your exercice is not correct.') . ']' . PHP_EOL . PHP_EOL;
} 
if (function_exists("playWithMe")) {
  echo '=== Exercice bonus ===' . PHP_EOL;
  ob_start();
  var_dump(playWithMe(7));
  $v = ob_get_contents();
  ob_end_clean();
  echo 'Test de l\'exercice bonus... [' . (md5($v) == 
'648ea31e8e088761c27c0c18abe8a26c' ? 'Your exercice could be correct.' :
 'Your exercice is not correct.') . ']' . PHP_EOL . PHP_EOL;
}