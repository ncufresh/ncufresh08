<?php /* Smarty version 2.6.18, created on 2008-11-06 18:21:19
         compiled from showGroup.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'showGroup.htm', 16, false),)), $this); ?>
<div class="forum_field">
<!--
<div class="forum_title"><?php echo $this->_tpl_vars['forumgroup']->title; ?>
列表</div>
-->
<div class="forum_content">

<?php $_from = $this->_tpl_vars['forumgroups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
<div class="forum_group">
<?php echo $this->_tpl_vars['group']->title; ?>

</div>
<div class="forum_boardlist">
	<table border="0" style="width:100%">
	<thead><tr><th width="25%"></th><th width="25%"></th><th width="25%"></th><th width="25%"></th></tr></thead>
	<tbody><tr>
	<?php $_from = $this->_tpl_vars['group']->forumboards; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['child'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['child']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['board']):
        $this->_foreach['child']['iteration']++;
?>
	<td <?php if ($this->_foreach['child']['iteration']%4 != 0 && ($this->_foreach['child']['iteration'] == $this->_foreach['child']['total'])): ?> colspan="<?php echo smarty_function_math(array('equation' => "5-X",'X' => $this->_foreach['child']['iteration']%4), $this);?>
"<?php endif; ?>>
		<a href="viewboard.php?no=<?php echo $this->_tpl_vars['board']->board_no; ?>
"><?php echo $this->_tpl_vars['board']->title; ?>
</a></td>
	<?php if ($this->_foreach['child']['iteration']%4 == 0 && $this->_foreach['child']['iteration'] != 0): ?></tr><tr><?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>
	</tr></tbody></table>
</div>
<?php endforeach; endif; unset($_from); ?>

</div>

</div>