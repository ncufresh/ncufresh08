<?php
require_once("../../mainfile.php");

$data = $currdb -> query("SELECT * FROM `".$currdb -> prefix("news_post")."` ORDER BY top DESC,date DESC ");
/*$result = $currdb -> query("SELECT FOUND_ROWS()");

$how_many_news = $currdb -> fetch_array($result);
$how_many_news = $how_many_news[0];
$maxpage = ($how_many_news % 10 == 0) ? intval($how_many_news / 10) : intval($how_many_news / 10 + 1);
$link = _multipage($_GET['page'], $maxpage, "index.php", 5);*/

while($news_pro = $currdb -> fetch_array($data))
{
	$file = $currdb -> query("SELECT * FROM `".$currdb -> prefix("news_upfile")."` WHERE news_no=".$news_pro['news_no']);
	while($tmp = $currdb->fetch_array($file))
	{
		$news_pro['files'][] = $tmp;
	}
	$news_pro['date'] = date("Y-m-d", $news_pro['date']);
	$news_pro['content'] = _replace_code($news_pro['content']);
	$news_pro['poster'] = $curruser->u_handler->getuserbyno($news_pro['poster_no'])->name;
	$news_dis[] = $news_pro;
}




if(empty($_GET['news_no'])){
	for($i = 0;$i<10;$i++){
		if($news_dis[$i]['top'] == 0){
			$_GET['news_no'] = $news_dis[$i]['news_no'];
			break;
		}
	}
}

$currtpl -> assign('news_dis',$news_dis);
$currtpl -> assign('news_no',intval($_GET['news_no']));

$currtpl -> display("index.htm");
?>
