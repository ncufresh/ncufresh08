<?php /* Smarty version 2.6.18, created on 2010-07-01 23:25:14
         compiled from index.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/2002/REC-xhtml1-20020801/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
 <head>
<meta http-equiv="Content-Language" content="zh-tw" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo $this->_tpl_vars['hdr']; ?>

<title><?php echo $this->_tpl_vars['sitename']; ?>
</title>
<?php echo $this->_tpl_vars['js']; ?>

</head>
<body>
<a name="top_video"></a>
	<div id="container">
		<div id="intro">

			<div id="p_search">
				<form action="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/search.php" method="get">
					<input type="text" style="width:110px" name="keyword"/>
					<input class="sub" type="submit" value="GO!!"/>
				</form>
			</div>

			<ul id="indexlink">
				<li><a id="img_index" href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
" title="首頁"><span>首頁</span></a></li>
				<li><a id="img_sitemap" href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/map.php" title="網站地圖"><span>網站地圖</span></a></li>
				<li><span style="font-size:10pt;">線上人數:<?php echo $this->_tpl_vars['currconfig']->online_users; ?>
<br/>總瀏覽人數:<?php echo $this->_tpl_vars['currconfig']->total_guests; ?>
</span></li>
			</ul>
			<ul id="mainlink">
				<li><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/mustknow" title="大一必讀"><span>大一必讀</span></a></li>
				<li><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/lifemigi" title="生存密技"><span>生存密技</span></a></li>	
				<li><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/superask" title="系所VS社團"><span>系所VS社團</span></a></li>
				<li><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/forum" title="新生論壇"><span>新生論壇</span></a></li>
				<li><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/regwizard" title="註冊精靈"><span>註冊精靈</span></a></li>
			</ul>
		</div>
		<div id="content_top">
			<div id="currsite">
				<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
">08 知訊網</a>
				<?php $_from = $this->_tpl_vars['currsite']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['site']):
?>
					&gt;&gt; <a href="<?php echo $this->_tpl_vars['site']['url']; ?>
"><?php echo $this->_tpl_vars['site']['name']; ?>
</a>
				<?php endforeach; endif; unset($_from); ?>
			</div>
		</div>

		<?php if ($this->_tpl_vars['default_top_blocks']): ?>
		<div id="blockwide">
		<?php $_from = $this->_tpl_vars['default_top_blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
			<?php echo $this->_tpl_vars['block']; ?>

		<?php endforeach; endif; unset($_from); ?>
		</div>
		<?php endif; ?>

		<div id="content_blockside">
			<div id="content">
				<?php echo $this->_tpl_vars['content']; ?>

			</div>
			<div id="blockside">
			<?php $_from = $this->_tpl_vars['default_side_blocks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['default_block'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['default_block']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['block']):
        $this->_foreach['default_block']['iteration']++;
?>
				<?php echo $this->_tpl_vars['block']; ?>

				<?php if ($this->_foreach['default_block']['iteration'] == 2): ?>
					<div id="side_block_top"></div>
					<div id="side_block_field">
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
			</div>
			<div id="side_block_bottom"></div>
			</div>
		</div>
	  
		<div id="footer">
        <table border="0" cellpadding="1" cellspacing="0" >
          <tr>
				  <td>主辦單位：<a href="http://www.ncu.edu.tw/" target="_blank" title="">國立中央大學</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://osa.adm.ncu.edu.tw/main.php" target="_blank" title="">學務處</a></td>
				  <td>承辦單位：<a href="http://140.115.183.140:8080/NCU_Counsel/home_show.php" target="_blank" title="">諮商中心</a></td>
				  <td align="right">執行單位：<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/aboutus.php" title="">2008大一生活知訊網工作團隊</a></td>
          </tr>
          <tr>
				  <td colspan="2">地址：桃園縣中壢市五權里2鄰中大路300號&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;電話：03-4227151(分機轉 57261)</td>
				  <td align="right">版權所有：<a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/aboutus.php" title="">2008大一生活知訊網工作團隊</a></td>
          </tr>
        </table>
		<div style="float:right;margin-top:-58px;width:96px;height:72px;"><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/contact.php" title="聯絡我們" style="text-decoration:none;display:block;height:72px;"><span style="visibility:hidden;">聯絡我們</span></a></div>
		</div>
	</div>
</body>
</html>