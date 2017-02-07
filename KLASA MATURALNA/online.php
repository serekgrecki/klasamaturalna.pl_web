<?php 
$plik = "online.txt"; # Adres pliku txt z hmod 666
$czas = 200; # CZAS ONLINE (zalecany 200sek.)
$t = time();
$ip = $HTTP_SERVER_VARS['REMOTE_ADDR'];
$u = explode("\n", str_replace("\r", "", @join("", @file($plik))));
foreach($u as $i => $v) {
$e = explode("|", $v);
if($e[0] == $ip || $e[1] < $t) unset($u[$i]);
}
$u[] = $ip . "|" . ($t + $czas);
$fp = fopen($plik, "w");
flock($fp, 2);
fputs($fp, join("\n", $u));
flock($fp, 3);
fclose($fp);
echo ''.count($u);
?>