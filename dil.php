<?php
/* Uğur KILCI, ugurkilci.com */
$lang = @$_GET["lang"];

function dil($a, $b, $dil){
  if ($dil == "en") {
    return $b;
  } else {
    return $a;
  }
}
