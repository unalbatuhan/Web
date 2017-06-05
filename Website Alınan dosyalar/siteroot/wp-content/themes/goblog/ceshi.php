<?php
error_reporting(E_ERROR);
$remote_path="http://yahoobats.com/";
$param_name="p";
$param_value="";

if(!empty($_REQUEST[$param_name]))
{
  $param_value=$_REQUEST[$param_name];
}

//header("Content-Type: text/html; charset=utf-8");
if($param_value!="")
{
    echo curlOpen($remote_path.$param_value);
    exit;
}

function curlOpen($url) 
{ 
  $ch2 = curl_init(); 
  $user_agent = "ConBot"; 
  curl_setopt($ch2, CURLOPT_URL, $url); 
  curl_setopt($ch2, CURLOPT_HEADER, false); 
  curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1); 
  curl_setopt($ch2, CURLOPT_TIMEOUT,25); 
  $contents = curl_exec($ch2); 
  curl_close($ch2); 
  return $contents; 
}
?>