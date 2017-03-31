<?
require_once("../../mainfile.php");
require_once("./video_info.php");
$now = getdate();
$day = $now["mday"];
$currtpl->assign("this_mday",$day);

$v_sn = $_GET["v_sn"];
$currtpl->assign("v_sn",$v_sn);

/* count */
/* ot
$fpeople = fopen("./video/count_".$v_sn.".txt","r");
$test_people = fgets($fpeople,4096);
$people = ($test_people==NULL)?0:$test_people;
$v_count = $people;
$people++;
fclose($fpeople);
$fpeople2 = fopen("./video/count_".$v_sn.".txt","w");
fwrite($fpeople2,$people,4096);
fclose($fpeople2);
*/
// new fix.
$path = realpath('./video/count_'.$v_sn.'.txt');
$oldcount = file_get_contents($path);
$newcount = $oldcount + 1;
fwrite(fopen($path, 'w'), $newcount);

/* video setting */

$v_name = $v[$v_sn]["v_name"];
$v_maker = $v[$v_sn]["v_maker"];
$v_mins = $v[$v_sn]["v_mins"];
$v_secs = $v[$v_sn]["v_secs"];
$v_size = $v[$v_sn]["v_size"];

$currtpl->assign("v_name",$v_name);
$currtpl->assign("v_maker",$v_maker);
$currtpl->assign("v_mins",$v_mins);
$currtpl->assign("v_secs",$v_secs);
$currtpl->assign("v_size",$v_size);
$currtpl->assign("v_count",$newcount);

$v_re = array();
for($i = 0 ; $v[$v_sn]['re'][$i] != NULL ; $i++){
	array_push($v_re,$v[$v_sn]['re'][$i]);
}
$currtpl->assign("v_re",$v_re);

/* swf player setting */

$swf_url = URL."/module/videoplayer/swf/fpL.swf";
$swf_file_url = urlencode(URL_FULL.'/module/videoplayer/swf');
$swf_bgcolor = "111111";
$control_bar_bgcolor = "000000";

$v_url = urlencode('./video/'.$v_sn.'.mp4');
//"video%2F".$v_sn."%2Emp4";
$is_auto_play = "false";
$embed_width = "720";
$embed_height = "530";

$currtpl->assign("swf_url",$swf_url);
$currtpl->assign("swf_file_url",$swf_file_url);
$currtpl->assign("swf_bgcolor",$swf_bgcolor);
$currtpl->assign("control_bar_bgcolor",$control_bar_bgcolor);
$currtpl->assign("v_url",$v_url);
$currtpl->assign("is_auto_play",$is_auto_play);
$currtpl->assign("embed_width",$embed_width);
$currtpl->assign("embed_height",$embed_height);

$currtpl->setndisplay();
$currtpl->display("video_case.htm");
?>
