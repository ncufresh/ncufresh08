<?php /* Smarty version 2.6.18, created on 2008-11-06 15:15:41
         compiled from block/indexNews.htm */ ?>
<div class="news_content">
<table border="0" width="95%" align="center">
	<?php $_from = $this->_tpl_vars['block']['news']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['news']):
?>
    <tr>
        	<td width="20%"><?php echo $this->_tpl_vars['news']['date']; ?>
</td>
			<td width="80%"><?php if ($this->_tpl_vars['news']['top'] == 1): ?><span style="color:#C22A1B;">[重要]</span><?php endif; ?>
            <a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/index.php?news_no=<?php echo $this->_tpl_vars['news']['news_no']; ?>
" title="<?php echo $this->_tpl_vars['news']['title']; ?>
"><?php echo $this->_tpl_vars['news']['title']; ?>
</a></td>
	<!--<td width="25%" align="right">公告者:<?php echo $this->_tpl_vars['news']['poster']; ?>
</td>-->
    </tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
</div>
<div class="news_footer">
	<a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/index.php" title="所有消息列表"><img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/new_link.gif"></a>
</div>