<?php
require_once('./mainfile.php');
require_once('./include/searchfun.php');
$per = 10;
$keyword = urldecode($_GET['keyword']);
$keyword = addslashes(trim($keyword));
if (!empty($keyword))
{
	if(mb_strlen($keyword) <= 2) dies('請輸入至少兩個字');

	$count[0] = search_forum($keyword,0,0,true);
	$count[1] = intval($count[0]) + search_wiki($keyword,0,0,true);
	$count[2] = intval($count[1]) + search_life($keyword,0,0,true);
	$count[3] = intval($count[2]) + search_must($keyword,0,0,true);
	$count[4] = intval($count[3]) + search_news($keyword,0,0,true);
	$count[5] = intval($count[4]);
	if (!$curruser->isguest())
		$count[5] += search_reg($keyword,0,0,true);
//
//	$_GET['page'] = intval($_GET['page'] <= 0)?1:intval($_GET['page']);
	$sum_count = $count[5];
//	$maxpage = ($sum_count % $per == 0) ? intval($sum_count / $per) : intval($sum_count / $per + 1);
//	$link = _multipage($_GET['page'], $maxpage, URL."search.php", 5);
	
	$result = array();
	$arr = search_news($keyword,0,1000);
	$result = array_merge_recursive($result,$arr);
	if(!$curruser->isguest())
	{
		$arr = search_reg($keyword,0,1000);
		$result = array_merge_recursive($result,$arr);
	}
	$arr = search_life($keyword,0,1000);
	$result = array_merge_recursive($result,$arr);
	$arr = search_must($keyword,0,1000);
	$result = array_merge_recursive($result,$arr);
	$arr = search_wiki($keyword,0,1000);
	$result = array_merge_recursive($result,$arr);
	$arr = search_forum($keyword,0,1000);
	$result = array_merge_recursive($result,$arr);

	$currtpl->assign('count',$sum_count);
	$currtpl->assign('result',$result);
	$currtpl->display('search.htm');
}
else
	_redirect();
?>
