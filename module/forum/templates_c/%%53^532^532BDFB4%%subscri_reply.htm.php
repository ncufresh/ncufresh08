<?php /* Smarty version 2.6.18, created on 2008-11-06 15:20:55
         compiled from block/subscri_reply.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'block/subscri_reply.htm', 18, false),array('modifier', 'htmlencode', 'block/subscri_reply.htm', 20, false),)), $this); ?>
<?php if ($this->_tpl_vars['block']['reply']): ?>
<form action="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/rm_subscribe.php" method="get">
<input type="hidden" name="type" value="reply" />
<table style="width:100%;text-align:left" id="_subscrreply">
<thead>
	<tr>
	<th width="10%">刪除</th>
	<th width="35%">最後回覆</th>
	<th width="20%">作者</th>
	<th width="35%">標題</th>
	</tr>
</thead>
<tbody>
	<tr><td colspan="4"><hr /><td></tr>
<?php $_from = $this->_tpl_vars['block']['reply']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['reply']):
?>
	<tr>
	<td style="padding-left:10px"><input type="checkbox" name="del[]" value="<?php echo $this->_tpl_vars['reply']['reply_no']; ?>
" /></td>
	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['reply']['lasttime'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
</td>
	<td><?php echo $this->_tpl_vars['reply']['name']; ?>
</td>
	<td><a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/viewtopic.php?no=<?php echo $this->_tpl_vars['reply']['topic_no']; ?>
" title="閱讀文章"><?php echo ((is_array($_tmp=$this->_tpl_vars['reply']['title'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
 (<?php echo $this->_tpl_vars['reply']['num']; ?>
)</a></td>
	</tr>
<?php endforeach; endif; unset($_from); ?>
	<tr><td colspan="4"><input type="button" value="反選" onclick="$$('#_subscrreply input[type=checkbox]').each(function(th){ $(th).checked=! $(th).checked; });" /> <input type="submit" value="刪除勾選" /><td></tr>
</tbody>
</table>
</form>
<?php else: ?>
<div class="notopic">沒有追蹤</div>
<?php endif; ?>