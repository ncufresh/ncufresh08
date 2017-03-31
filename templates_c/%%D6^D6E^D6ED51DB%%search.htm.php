<?php /* Smarty version 2.6.18, created on 2008-11-06 17:42:06
         compiled from search.htm */ ?>
<div style="border:1px solid #dfdfdf; margin-left:5px;">
	<div>共搜尋到<?php echo $this->_tpl_vars['count']; ?>
個結果</div>

	<?php unset($this->_sections['res']);
$this->_sections['res']['name'] = 'res';
$this->_sections['res']['loop'] = is_array($_loop=$this->_tpl_vars['result']['data']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['res']['show'] = true;
$this->_sections['res']['max'] = $this->_sections['res']['loop'];
$this->_sections['res']['step'] = 1;
$this->_sections['res']['start'] = $this->_sections['res']['step'] > 0 ? 0 : $this->_sections['res']['loop']-1;
if ($this->_sections['res']['show']) {
    $this->_sections['res']['total'] = $this->_sections['res']['loop'];
    if ($this->_sections['res']['total'] == 0)
        $this->_sections['res']['show'] = false;
} else
    $this->_sections['res']['total'] = 0;
if ($this->_sections['res']['show']):

            for ($this->_sections['res']['index'] = $this->_sections['res']['start'], $this->_sections['res']['iteration'] = 1;
                 $this->_sections['res']['iteration'] <= $this->_sections['res']['total'];
                 $this->_sections['res']['index'] += $this->_sections['res']['step'], $this->_sections['res']['iteration']++):
$this->_sections['res']['rownum'] = $this->_sections['res']['iteration'];
$this->_sections['res']['index_prev'] = $this->_sections['res']['index'] - $this->_sections['res']['step'];
$this->_sections['res']['index_next'] = $this->_sections['res']['index'] + $this->_sections['res']['step'];
$this->_sections['res']['first']      = ($this->_sections['res']['iteration'] == 1);
$this->_sections['res']['last']       = ($this->_sections['res']['iteration'] == $this->_sections['res']['total']);
?>
		<div><a href="<?php echo $this->_tpl_vars['result']['data'][$this->_sections['res']['index']]['url']; ?>
"><?php echo $this->_tpl_vars['result']['data'][$this->_sections['res']['index']]['title']; ?>
</a>
    	    	<blockquote><div><?php echo $this->_tpl_vars['result']['data'][$this->_sections['res']['index']]['content']; ?>
</div></blockquote>
		</div>
		-----------------------------------------------------------------------------
	<?php endfor; endif; ?>
</div>