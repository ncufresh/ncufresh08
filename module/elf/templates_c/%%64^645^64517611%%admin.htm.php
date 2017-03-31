<?php /* Smarty version 2.6.18, created on 2009-08-13 16:30:09
         compiled from admin.htm */ ?>
<form action="" method="post">
<table border="0">
	<thead>
	<tr>
		<th></th>
		<th></th>
		<th></th>
		<th></th>
	</tr>
	</thead>
	<tbody>
	<?php $_from = $this->_tpl_vars['https']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['http']):
?>
	<tr>
		<td><input type="checkbox" name="http[del][]" value="<?php echo $this->_tpl_vars['http']['url']; ?>
" /> <?php echo $this->_tpl_vars['http']['url']; ?>
</td>
		<td><input type="text" name="http[data][<?php echo $this->_tpl_vars['http']['url']; ?>
][gilu]" value="<?php echo $this->_tpl_vars['http']['gilu']; ?>
" /></td>
		<td><input type="text" name="http[data][<?php echo $this->_tpl_vars['http']['url']; ?>
][piclimit]" value="<?php echo $this->_tpl_vars['http']['piclimit']; ?>
" /></td>
		<td><input type="text" name="http[data][<?php echo $this->_tpl_vars['http']['url']; ?>
][ord]" value="<?php echo $this->_tpl_vars['http']['ord']; ?>
" /></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?>
	</tbody>
</table>
	<p> new <input type="text" name="http[url]" /></p>
	<p><input type="submit" value="SAVE" /></p>
</form>
<hr />
<?php $_from = $this->_tpl_vars['userdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['elf']):
?>
<div><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/show_pfile.php?uno=<?php echo $this->_tpl_vars['elf']['uno']; ?>
"><?php echo $this->_tpl_vars['elf']['uno']; ?>
</a> :: <?php echo $this->_tpl_vars['elf']['count']; ?>
 </div>
<?php endforeach; endif; unset($_from); ?>

<?php $_from = $this->_tpl_vars['plink']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['page']):
?>
<?php echo $this->_tpl_vars['page']; ?>

<?php endforeach; endif; unset($_from); ?>