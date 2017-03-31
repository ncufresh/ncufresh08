<?php /* Smarty version 2.6.18, created on 2010-07-02 16:32:00
         compiled from block/life.htm */ ?>
<style type="text/css">
#block_container{
	width: 629px;
	border-bottom: 1px solid #ccc;
}
.block_life_banner{
	float:left;
	border:0px solid #CCCCCC;
	padding:0px;
	margin:0px;
}

/* 
	各色區塊通用設定 
*/
.bg_orange,
.bg_green,
.bg_blue,
.bg_yellow{
  height: 340px;
  border: 0px;
	float: left;
	padding-left: 10px;
}

/*
	各色區塊寬度設定
*/
.bg_green{
  border-right: 1px solid #CCC;
	border-left: 1px solid #CCC;
	width: 158px;
}
.bg_orange{
	width: 150px;
}
.bg_blue, .bg_pink{
  border-right: 1px solid #CCC;
	border-left: 1px solid #CCC;
	width: 145px;
}
.bg_yellow{
	width: 131px;
	border-right: 0px;
}

/* 
	大標題通用設定
 */
.block_life_title,
.block_life_title_purple{
  margin: 0px;
	font-weight:400;
  text-align: right;
}

/* 
	大標題背景底色設定 
	未加span: 淡 
	有加span: 濃
*/
.bg_green .block_life_title{
	background-color: #87f3a6;}
.bg_green .block_life_title span{
	background-color: #3dd677;}

.bg_orange .block_life_title{
	background-color: #F7db98;}
.bg_orange .block_life_title span{
	background-color: #Fcba1c;}

.bg_orange .block_life_title_purple{
	background-color: #fce4ee;}
.bg_orange .block_life_title_purple span{
	background-color: #f597bd;}

.bg_blue .block_life_title{
	background-color: #5deee9;}
.bg_blue .block_life_title span{
	background-color: #1bc7e6;}

.bg_yellow .block_life_title{
	background-color: #fdfa93;}
.bg_yellow .block_life_title span{
	background-color: #fbf52c;}
.bg_blue .block_life_title_pink{
	background-color: #FBD7E5}
.bg_blue .block_life_title_pink span{
	background-color: #F8AFCC}

/* 
	小標題通用設定 
*/
.block_life_class_pink,
.block_life_class,
.block_life_class_purple{
	float: left;
	text-align:center;
	width: 20px;
}

/* 
	小標題右邊框色線設定  
*/
.bg_green .block_life_class{
	border-right: 3px solid #3dd677;}

.bg_orange .block_life_class{
	border-right: 3px solid #Fcba1c;}

.bg_orange .block_life_class_purple{
	border-right: 3px solid #f597bd;}

.bg_blue .block_life_class{
	border-right: 3px solid #1bc7e6;}

.bg_yellow .block_life_class{
	border-right: 3px solid #fbf52c;}
.bg_blue .block_life_class_pink{
	border-right: 3px solid #F8AFCC; }

/* 
	內文連結區塊設定 
*/
.block_life_main{
  line-height: 25px;
  margin-bottom: 10px;
	font-size: 11pt;
	vertical-align:middle;
  float:left;
  margin: 5px 0px 0px 4px;
}
.block_life_main a{
	color: black;
}
.block_life_main a.movie{
	color: blue;
}

.block_life_main a span{
  font-size: 9pt;
  line-height: 5px;
}
.block_life_main a img{
	margin: 5px;
	border: 1px solid #CCC;
	width: 100px;
	height: 100px;
}
.clear{
	clear:both;
	line-height:10px;
}
</style>
<div id="block_container">
	<img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/header.jpg" border="0" class="block_life_banner" />
	
	<div class="bg_green">
		<p class="block_life_title"><span>　活在中大</span></p>
		<div class="block_life_class">校內生活</div>
		<div class="block_life_main">
			<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=33">校內地圖導覽</a><br />
			<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=37">金融資訊</a><br/>
			<a onclick="open_video(9);return false;" href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=36" class="movie">運動場所導覽</a>
		</div>
		<div style="clear:both;margin-bottom: 10px;"></div>

		<div class="block_life_class">校外生活</div>
		<div class="block_life_main">
			<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=34">消夜街導覽</a><br />
			<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=35">中大後門導覽</a>
		</div>
		<div style="clear:both;margin-bottom: 10px;"></div>
		
		<div class="block_life_class">醫療資源</div>
		<div class="block_life_main">
			<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=30">特約醫院</a><br />
			<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=31">非特約醫院</a><br />
			<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=32">衛生保衛組</a><br />
			<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=41">心理諮商</a>
		</div>
		<div style="clear:both;margin-bottom: 10px;"></div>
	</div>
	<div class="bg_orange">
		<p class="block_life_title"><span>　住在中大</span></p>
		<div class="block_life_class">校內生活</div>
		<div class="block_life_main">
			<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=21">新生宿舍介紹</a><br />
			<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=9">宿舍網路</a><br />
			<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=10">郵件招領</a><br />
			<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=11">住宿裝備</a><br />
			<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=38">資電院新生宿舍</a><br />
			<a onclick="open_video(5);return false;" href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=29" class="movie">男舍影片導覽</a><br/>
			<a onclick="open_video(6);return false;" href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=29" class="movie">女舍影片導覽</a>
		</div>
		<div style="clear:both;margin-bottom: 10px;"></div>
	</div>
	<div class="bg_blue">
		<p class="block_life_title"><span>　來去中大</span></p>
			<div class="block_life_class">交通資訊</div>
			<div class="block_life_main">
				<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=16">如何到中大</a><br />
				<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=17">學校專車</a><br />
				<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=18">腳踏車資訊</a><br />
				<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=19">汽機車入校</a><br/>
				<a onclick="open_video(7);return false;" href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=39" class="movie">影片導覽</a>
			</div>
		<div style="clear:both"></div>
		<p class="block_life_title block_life_title_pink"><span>　特別專區</span></p>
			<div class="block_life_class_pink">研一新生專區</div>
			<div class="block_life_main">
				<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=45">前言</a><br />
				<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=46">適應篇</a><br />
				<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=47">關係篇</a><br />
				<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=48">資源篇</a><br />
			</div>
		<div style="clear:both"></div>
	</div>
	<div class="bg_yellow" style="border-right: 1px solid #ccc;">
		<p class="block_life_title"><span>　學藝中大</span></p>
			<div class="block_life_class">學藝相關資源</div>
			<div class="block_life_main">
				<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=22">松濤電台</a><br />
				<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=28">圖書館</a><br />
				<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=23">107電影院</a><br />
				<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=25">語言中心</a><br />
				<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=26">計算機中心</a><br />
				<a href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=27">藝文中心</a><br />
				<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/lifemigi/index.php?csn=43">敦煌書局</a><br />
	
				<a onclick="open_video(8);return false;" href="http://ncufresh.dnip.net/ncufresh08/module/lifemigi/index.php?csn=15" class="movie">影片導覽</a>
			</div>
		<div style="clear:both"></div>
	</div>
	<div style="clear:left"></div>
</div>