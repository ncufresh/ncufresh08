<?php
require_once ("../../mainfile.php");
require_once ("index_rw_readfirst.php");

if($curruser -> isguest())
{
	//	echo "欲使用此功能請先登入。";
	_savePage(URL.'/include/user.php?login_form=1');	
}
else
{
	// main - begin
	$opt_list = $currdb -> query("SELECT * FROM `".($currdb -> prefix("regwizard_opt"))."` ORDER BY rwo_date_begin ASC");
	
	$opt_list_dis = array();	// $opt_list_dis is a 2-D array.
	$opt_nums_total = 0;		// Count the numbers of all non-hidden options.
	$opt_nums_complete = 0;		// Count the numbers of options user completed.
	
	while($opt_list_dis_processing = $currdb -> fetch_array($opt_list))	// $opt_list_dis_processing is an 1-D array.
	{
		$opt_list_dis_processing['dis_type'] = check_display_type($opt_list_dis_processing);
		
		if($opt_list_dis_processing['dis_type'] == "complete")
		{
			$opt_nums_complete++;
		}
	
		if($opt_list_dis_processing['dis_type'] != "hidden")
		{
			$opt_nums_total++;
			
			$opt_list_dis_processing['rwo_date_display'] = avail_date_display($opt_list_dis_processing['rwo_datetype'], $opt_list_dis_processing['rwo_date_begin'], $opt_list_dis_processing['rwo_date_end']);
			
			switch($opt_list_dis_processing['dis_type'])
			{
				case "non-begin":
					$opt_list_dis_processing['rwo_img_alt'] = "這隻釘書針還不可以拔唷~";
					break;
				case "necessary":
					$opt_list_dis_processing['rwo_img_alt'] = "此為必要工作排程，您尚未拔掉這隻釘書針";
					break;
				case "non-necessary":
					$opt_list_dis_processing['rwo_img_alt'] = "此為可選擇性完成之工作排程，您尚未拔掉這隻釘書針";
					break;
				case "complete":
					$opt_list_dis_processing['rwo_img_alt'] = "您已準時拔掉這隻釘書針";
					break;
				case "non-complete":
					$opt_list_dis_processing['rwo_img_alt'] = "您並未在時間內拔掉這隻釘書針";
					break;
				default:
					echo "ERROR! <br />";
			}
			
			array_push($opt_list_dis, $opt_list_dis_processing);
		}
	}
	
	if($_GET['action']=="finished")
	{
		$currtpl -> assign('chk_finished', 1);
	}
	
	switch(check_level($opt_nums_complete, $opt_nums_total))
	{
		case 1:
			$c_level = 1;
			$c_level_description = "您目前為等級1，房間是空的。";
			break;
		case 2:
			$c_level = 2;
			$c_level_description = "您目前為等級2，房間有營服、毛巾。";
			break;
		case 3:
			$c_level = 3;
			$c_level_description = "您目前為等級3，房間有營服、毛巾、沒吃完的泡麵。";
			break;
		case 4:
			$c_level = 4;
			$c_level_description = "您目前為等級4，房間有營服、毛巾、沒吃完的泡麵、電腦。";
			break;
		case 5:
			$c_level = 5;
			$c_level_description = "您目前為等級5，房間有營服、毛巾、沒吃完的泡麵、電腦、檯燈。";
			break;
		case 6:
			$c_level = 6;
			$c_level_description = "您目前為等級6，房間有營服、毛巾、沒吃完的泡麵、電腦、檯燈、藍白拖。";
			break;
		case 7:
			$c_level = 7;
			$c_level_description = "您目前為等級7，房間有營服、毛巾、沒吃完的泡麵、電腦、檯燈、藍白拖、咖啡杯。";
			break;
		case 8:
			$c_level = 8;
			$c_level_description = "您目前為等級8，房間有營服、毛巾、沒吃完的泡麵、電腦、檯燈、藍白拖、咖啡杯還有神奇的...(?)";
			break;
		default:
			echo "ERROR<br />";
	}
	
	
	$currtpl -> assign('opt_list_dis', $opt_list_dis);
	
	$currtpl -> assign('c_level', $c_level);
	$currtpl -> assign('c_level_description', $c_level_description);
	
	$currtpl -> assign("title", $title);
	$currtpl -> display("index.html");
}
?>
