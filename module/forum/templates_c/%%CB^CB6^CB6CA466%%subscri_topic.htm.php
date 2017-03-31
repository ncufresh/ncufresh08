<?php /* Smarty version 2.6.18, created on 2008-11-06 15:20:55
         compiled from block/subscri_topic.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'block/subscri_topic.htm', 17, false),array('modifier', 'htmlencode', 'block/subscri_topic.htm', 18, false),)), $this); ?>
<?php if ($this->_tpl_vars['block']['topic']): ?>
<form action="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/rm_subscribe.php" method="get">
<input type="hidden" name="type" value="topic"/>
<table style="width:100%;text-align:left;" id="_subscrtopic">
<thead>
	<tr>
	<th width="10%">刪除</th>
	<th width="35%">最後回覆</th>
	<th width="55%">標題</th>
	</tr>
</thead>
<tbody>
	<tr><td colspan="3"><hr /></td></tr>
<?php $_from = $this->_tpl_vars['block']['topic']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['object']):
?>
	<tr>
	<td><input style="margin-left:10px" type="checkbox" name="del[]" value="<?php echo $this->_tpl_vars['object']['topic_no']; ?>
" /></td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['object']['lasttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
</td>
	<td><a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/viewtopic.php?no=<?php echo $this->_tpl_vars['object']['topic_no']; ?>
" title="閱讀文章"><?php echo ((is_array($_tmp=$this->_tpl_vars['object']['title'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
 (<?php echo $this->_tpl_vars['object']['num']; ?>
)</a></td>
	</tr>
<?php endforeach; endif; unset($_from); ?>
	<tr><td colspan="3"><input type="button" value="反選" onclick="$$('#_subscrtopic input[type=checkbox]').each(function(th){ $(th).checked=! $(th).checked; });" /> <input type="submit" value="刪除勾選" /></td></tr>
</tbody>
</table>

<?php else: ?>
<div class="notopic">沒有追蹤</div>
<?php endif; ?>