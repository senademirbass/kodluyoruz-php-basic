<?php

/*arama kriteri olarak bölümü bsm olan öğrencileri seçtim */

$search = 'bsm';
$lines = file('ogrenci_list.txt');
// Store true when the text is found
$found = false;
foreach($lines as $line)
{
  if(strpos($line, $search) !== false)
  {
    $found = true;
    echo $line;
  }
}
// If the text was not found, show a message
if(!$found)
{
  echo 'No match found';
}

?>