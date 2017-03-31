<?php
if (!defined("MAINFILE_INCLUDED"))
	exit();
	
function HomeAd($dirname = null)
{
	$block = array();
	
	/*----Configure Area begin----*/
	$block['img']['0']['img'] = URL."/templates/images/logo/fresh_talk.gif";
	$block['img']['0']['url'] = URL."/module/mustknow/index.php?csn=24";
	
	$block['img']['1']['img'] = URL."/templates/images/logo/course.jpg";
	$block['img']['1']['url'] = "http://portal.ncu.edu.tw";

	$block['img']['2']['img'] = URL."/templates/images/logo/guideline.jpg";
	$block['img']['2']['url'] = URL."/guide.pdf";
	/*----Configure Area End------*/
	
	return $block;
}
?>
