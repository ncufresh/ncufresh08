<?php

	$v[0]["v_name"] = "I'm still walking";
	$v[0]["v_maker"] = "大一生活知訊網";
	$v[0]["v_mins"] = "4";
	$v[0]["v_secs"] = "12";
	$v[0]["v_size"] = "35,600";
	$v[0]["v_expire"] = "8";
	
	$v[1]["v_name"] = "一、Fresh Life";
	$v[1]["v_maker"] = "影音組 - 三瓶";
	$v[1]["v_mins"] = "7";
	$v[1]["v_secs"] = "23";
	$v[1]["v_size"] = "53,210";
	$v[1]["v_expire"] = "8";
	
	$v[2]["v_name"] = "二、食萬伙急";
	$v[2]["v_maker"] = "影音組 - 貝貝";
	$v[2]["v_mins"] = "5";
	$v[2]["v_secs"] = "23";
	$v[2]["v_size"] = "46,394";
	$v[2]["v_expire"] = "15";
	
	$v[3]["v_name"] = "三、決戰松果嶺";
	$v[3]["v_maker"] = "影音組 - 小風";
	$v[3]["v_mins"] = "7";
	$v[3]["v_secs"] = "29";
	$v[3]["v_size"] = "0";
	$v[3]["v_expire"] = "22";
		
	$v[4]["v_name"] = "四、有你，真好";
	$v[4]["v_maker"] = "影音組 - 朋朋";
	$v[4]["v_mins"] = "5";
	$v[4]["v_secs"] = "38";
	$v[4]["v_size"] = "22,528";
	$v[4]["v_expire"] = "29";
	
	$v[5]["v_name"] = "宿舍 - 男舍";
	$v[5]["v_maker"] = "影音組 - 三瓶";
	$v[5]["v_mins"] = "1";
	$v[5]["v_secs"] = "00";
	$v[5]["v_size"] = "8,627";
	$v[5]["v_expire"] = "8";
	
	$v[6]["v_name"] = "宿舍 - 女舍";
	$v[6]["v_maker"] = "影音組 - 三瓶";
	$v[6]["v_mins"] = "2";
	$v[6]["v_secs"] = "37";
	$v[6]["v_size"] = "21,841";
	$v[6]["v_expire"] = "8";
	
	$v[7]["v_name"] = "行到中央";
	$v[7]["v_maker"] = "影音組 - 貝貝";
	$v[7]["v_mins"] = "3";
	$v[7]["v_secs"] = "31";
	$v[7]["v_size"] = "30,065";
	$v[7]["v_expire"] = "18";
	
	$v[8]["v_name"] = "學習場所";
	$v[8]["v_maker"] = "影音組 - 小風";
	$v[8]["v_mins"] = "4";
	$v[8]["v_secs"] = "39";
	$v[8]["v_size"] = "39,071";
	$v[8]["v_expire"] = "8";
		
	$v[9]["v_name"] = "運動場所";
	$v[9]["v_maker"] = "影音組 - 朋朋";
	$v[9]["v_mins"] = "6";
	$v[9]["v_secs"] = "22";
	$v[9]["v_size"] = "66,221";
	$v[9]["v_expire"] = "8";
	
	
	/* 影音專區 */
	
	for($i = 0 ;$i < 5;$i++){
		$temp = 0;
		for($j = 0;$j < 4;$j++){
			if($j == $i){
				$temp++;
			}
			$v[$i]["re"][$j]["v_sn"] = $j+$temp;
			$v[$i]["re"][$j]["v_name"] = $v[$j+$temp]["v_name"];
			$v[$i]["re"][$j]["v_expire"] = $v[$j+$temp]["v_expire"];
		}
	}
	
	/* 生存密技 */
	
	for($i = 5 ;$i < 10;$i++){
		$temp = 5;
		for($j = 0;$j < 4;$j++){
			if($j+5 == $i){
				$temp++;
			}
			$v[$i]["re"][$j]["v_sn"] = $j+$temp;
			$v[$i]["re"][$j]["v_name"] = $v[$j+$temp]["v_name"];
			$v[$i]["re"][$j]["v_expire"] = $v[$j+$temp]["v_expire"];
		}
	}	
?>
