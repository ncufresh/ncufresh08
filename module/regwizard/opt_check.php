<?php
require_once ("../../mainfile.php");
require_once ("index_rw_readfirst.php");

if($curruser -> isguest())
{
	//echo "欲使用此功能請先登入。";
	_savePage(URL.'/include/user.php?login_form=1');	
}
else
{
	if($_GET['action']=="process")
	{
		$opt = $currdb -> query("SELECT * FROM `".($currdb -> prefix("regwizard_opt"))."` WHERE rwoID=".$_GET['rwoID']."");
		
		if((judge_freshman($curruser -> sid)) && isset($_GET['rwoID']) && ($currdb -> num_rows($opt) != 0))
		{
			$opt_array = $currdb -> fetch_array($opt);
			
			if(check_display_type($opt_array) == "necessary" || check_display_type($opt_array) == "non-necessary")
			{
				$currdb -> query("INSERT INTO `".($currdb -> prefix("regwizard_data"))."` (uno, rwoID, finish, finish_datetime) VALUES ('".($curruser -> uno)."','".($_GET['rwoID'])."','1','".mktime()."')");
			
				_redirect("index.php?action=finished");
			}
			else
			{
				echo "參數傳遞錯誤，請勿由此路徑執行本程式。";
				echo_goback();
			}
		}
		else
		{
			echo "參數傳遞錯誤，請勿由此路徑執行本程式。";
			echo_goback();
		}
	}
	else
	{
		if(!isset($_GET['rwoID']))
		{
			echo "參數傳遞錯誤，請勿由此路徑執行本程式。";
			echo_goback();
		}
		else
		{
			$opt = $currdb -> query("SELECT * FROM `".$currdb -> prefix("regwizard_opt")."` WHERE rwoID = ".($_GET['rwoID'])." ");
			
			if(($currdb -> num_rows($opt)) != 0)
			{
				$opt_dis = $currdb -> fetch_array($opt);
				
				$opt_dis['opt_necessary'] = check_necessary($opt_dis);
				$opt_dis['dis_type'] = check_display_type($opt_dis);
				
				// Use 'dis_type' to judge displaying the relative data or not
				// The data would be displayed when 'dis_type' not equal to "hidden"
				if($opt_dis['dis_type'] != "hidden")
				{
					// Processing relative links
					$opt_rel_links = $currdb -> query("SELECT * FROM `".($currdb -> prefix("regwizard_rel_links") )."` WHERE rwoID = ".$opt_dis['rwoID']." ORDER BY rel_l_ID ASC");
					
					$opt_rel_links_display = array();
					
					while($opt_rel_links_processing = $currdb -> fetch_array($opt_rel_links))
					{
						array_push($opt_rel_links_display, $opt_rel_links_processing);
					}
					
					// Processing the array to be displayed
					// --- Output the template ---
					$opt_dis['rwo_date_display'] = avail_date_display($opt_dis['rwo_datetype'], $opt_dis['rwo_date_begin'], $opt_dis['rwo_date_end']);
					
					// --- Judge the user is freshman or not, and display the submit button ---
					if(judge_freshman($curruser -> sid))
					{
						if($opt_dis['dis_type'] == "necessary" || $opt_dis['dis_type'] == "non-necessary")
						{
							$currtpl -> assign('form_complete_submit', "<input name=\"submit\" type=\"submit\" value=\"我完成囉！\" />");
						}
					}
					
					$currtpl -> assign('opt_rel_links_display', $opt_rel_links_display);
					$currtpl -> assign('opt_dis', $opt_dis);
					
					$currtpl -> display("opt_check.html");
				}
				else
				{
					echo "找不到對應的註冊精靈選項，或該選項不可使用；請返回上一頁重試。";
					echo_goback();
				}
			}
			else
			{
				echo "找不到對應的註冊精靈選項，或該選項不可使用；請返回上一頁重試。";
				echo_goback();
			}
		}
	}
}
?>
