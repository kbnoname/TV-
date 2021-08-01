<?php

# © 2021 Avishkar Patil DO NOT EDIT ANYTHING TO KEEP RUNNING

# Here I Put Token which Available Publicly I Recommended Use Your Own Token Here 
# For Suppport @Avishkarpatil at Telegram or proavipatil@gmail.com



$jctBase = "cutibeau2ic";

$ssoToken = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1bmlxdWUiOiI5ZmVhMDM4Ny04YmM0LTRkNzEtOGI3YS04NjFhZDRkNGI2YmQiLCJ1c2VyVHlwZSI6IlJJTHBlcnNvbiIsImF1dGhMZXZlbCI6IjQwIiwiZGV2aWNlSWQiOiI3YTc1YmRjZDhlNGMzMDE5ODU3Mzk3Yzg0NjdmYWNlNzA2YjY5YzRjZThkYWFlYjc1NmY3NWYzNjQ0NmFhNDQzNjg5MDYwYTE3NDI2YmEyZTc2ZWIxMjM4NTg3Y2EwMjNiOTgwOTcwNzdmMGNiYTZiZGE3Mzc3ZmVjZmI2YWQwNSIsImp0aSI6ImQ2NjM4NjlkLTFkYTQtNGY0YS1iZmNiLTgzZTNiNTFhYjIxYyIsImlhdCI6MTYyNjI2NjY1N30.-KnhgQFUFLrTUGYo8z_-cGDNgPoaRmQfIIQKUyKFIdc"; #Change This with your SSOTOKEN 
function tokformat($str)
{
$str= base64_encode(md5($str,true));
return str_replace("\n","",str_replace("\r","",str_replace("/","_",str_replace("+","-",str_replace("=","",$str)))));
}
function generateJct($st, $pxe) 
{
 global $jctBase;
 return trim(tokformat($jctBase . $st . $pxe));
}
function generatePxe() {
return time() + 6000000;
}
function generateSt() {
global $ssoToken;
return tokformat($ssoToken);
}
function generateToken() {
$st = generateSt();
$pxe = generatePxe();
$jct = generateJct($st, $pxe);
return "?jct=" . $jct . "&pxe=" . $pxe . "&st=" . $st;
}

# © 2021 Avishkar Patil DO NOT EDIT ANYTHING TO KEEP RUNNING


echo generateToken();
?>
