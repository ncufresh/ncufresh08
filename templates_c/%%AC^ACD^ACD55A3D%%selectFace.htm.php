<?php /* Smarty version 2.6.18, created on 2008-11-22 23:17:30
         compiled from selectFace.htm */ ?>
<div class="blue_back">
	<div class="field_top_top"><img src="templates/images/choose.gif" class="field_title"><img src="templates/images/pine<?php echo $this->_tpl_vars['curruser']->pic; ?>
.gif" class="in_section"></div>
	<form action="selectFace.php?selected=1" method="post">
		<table style="margin:0 auto;">
			<tr>
				<?php unset($this->_sections['sel']);
$this->_sections['sel']['name'] = 'sel';
$this->_sections['sel']['loop'] = is_array($_loop=$this->_tpl_vars['arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sel']['show'] = true;
$this->_sections['sel']['max'] = $this->_sections['sel']['loop'];
$this->_sections['sel']['step'] = 1;
$this->_sections['sel']['start'] = $this->_sections['sel']['step'] > 0 ? 0 : $this->_sections['sel']['loop']-1;
if ($this->_sections['sel']['show']) {
    $this->_sections['sel']['total'] = $this->_sections['sel']['loop'];
    if ($this->_sections['sel']['total'] == 0)
        $this->_sections['sel']['show'] = false;
} else
    $this->_sections['sel']['total'] = 0;
if ($this->_sections['sel']['show']):

            for ($this->_sections['sel']['index'] = $this->_sections['sel']['start'], $this->_sections['sel']['iteration'] = 1;
                 $this->_sections['sel']['iteration'] <= $this->_sections['sel']['total'];
                 $this->_sections['sel']['index'] += $this->_sections['sel']['step'], $this->_sections['sel']['iteration']++):
$this->_sections['sel']['rownum'] = $this->_sections['sel']['iteration'];
$this->_sections['sel']['index_prev'] = $this->_sections['sel']['index'] - $this->_sections['sel']['step'];
$this->_sections['sel']['index_next'] = $this->_sections['sel']['index'] + $this->_sections['sel']['step'];
$this->_sections['sel']['first']      = ($this->_sections['sel']['iteration'] == 1);
$this->_sections['sel']['last']       = ($this->_sections['sel']['iteration'] == $this->_sections['sel']['total']);
?>
				<?php if ($this->_sections['sel']['index'] % 5 == 0): ?></tr><tr><?php endif; ?>
				<td>
					<img src="templates/images/<?php echo $this->_tpl_vars['arr'][$this->_sections['sel']['index']]; ?>
.gif"/><br/>
					<input type="radio" name="piccho" value="<?php echo $this->_tpl_vars['ys'][$this->_sections['sel']['index']]; ?>
" <?php if ($this->_tpl_vars['arr'][$this->_sections['sel']['index']]['1'] == 'N'): ?>disabled="disabled"<?php endif; ?> <?php if ($this->_tpl_vars['curruser']->pic == $this->_tpl_vars['ys'][$this->_sections['sel']['index']]): ?>checked="checked"<?php endif; ?>>
				</td>
				<?php endfor; endif; ?>
			</tr>
		<tr>
			<td colspan="5" align="center"><input type="submit" value="送出"/></td>
		</tr>
	</table>
	</form>
</div>