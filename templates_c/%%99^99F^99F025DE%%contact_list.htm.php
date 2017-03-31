<?php /* Smarty version 2.6.18, created on 2009-01-17 17:48:56
         compiled from contact_list.htm */ ?>
<div class="blue_back">
<div class="field_top_top"><img src="templates/images/contactus.gif" class="field_title"/><img src="templates/images/pineR.gif" class="in_section"/></div>
<div class="field_content_bar"></div>
<div class="field_content">
  <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" align="center" width="100%">
    <tr>
      <td width="20%">寄件者</td>
      <td width="45%">標題</td>
      <td width="15%">時間</td>
      <td width="5%">刪</td>
      <td width="15%">狀態</td>
    </tr>
<?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['title']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sec1']['show'] = true;
$this->_sections['sec1']['max'] = $this->_sections['sec1']['loop'];
$this->_sections['sec1']['step'] = 1;
$this->_sections['sec1']['start'] = $this->_sections['sec1']['step'] > 0 ? 0 : $this->_sections['sec1']['loop']-1;
if ($this->_sections['sec1']['show']) {
    $this->_sections['sec1']['total'] = $this->_sections['sec1']['loop'];
    if ($this->_sections['sec1']['total'] == 0)
        $this->_sections['sec1']['show'] = false;
} else
    $this->_sections['sec1']['total'] = 0;
if ($this->_sections['sec1']['show']):

            for ($this->_sections['sec1']['index'] = $this->_sections['sec1']['start'], $this->_sections['sec1']['iteration'] = 1;
                 $this->_sections['sec1']['iteration'] <= $this->_sections['sec1']['total'];
                 $this->_sections['sec1']['index'] += $this->_sections['sec1']['step'], $this->_sections['sec1']['iteration']++):
$this->_sections['sec1']['rownum'] = $this->_sections['sec1']['iteration'];
$this->_sections['sec1']['index_prev'] = $this->_sections['sec1']['index'] - $this->_sections['sec1']['step'];
$this->_sections['sec1']['index_next'] = $this->_sections['sec1']['index'] + $this->_sections['sec1']['step'];
$this->_sections['sec1']['first']      = ($this->_sections['sec1']['iteration'] == 1);
$this->_sections['sec1']['last']       = ($this->_sections['sec1']['iteration'] == $this->_sections['sec1']['total']);
?>
    <tr<?php if ($this->_tpl_vars['state'][$this->_sections['sec1']['index']] == '未處理'): ?> class="nosolve"<?php elseif ($this->_tpl_vars['state'][$this->_sections['sec1']['index']] == '處理中'): ?> class="solving"<?php endif; ?>>
      <td><a href="<?php echo $this->_tpl_vars['email'][$this->_sections['sec1']['index']]; ?>
" title="寄信"><?php echo $this->_tpl_vars['sender'][$this->_sections['sec1']['index']]; ?>
</a></td>
      <td><a href="contact.php?read_contact=1&mno=<?php echo $this->_tpl_vars['mno'][$this->_sections['sec1']['index']]; ?>
"><?php echo $this->_tpl_vars['title'][$this->_sections['sec1']['index']]; ?>
</a></td>
      <td><?php echo $this->_tpl_vars['time'][$this->_sections['sec1']['index']]; ?>
</td>
      <td><a onClick="if(!confirm('確認刪除？'))return false;" href="<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
?del_contact=1&mno=<?php echo $this->_tpl_vars['mno'][$this->_sections['sec1']['index']]; ?>
" title="刪除">Ｘ</a></td>
      <td><?php echo $this->_tpl_vars['state'][$this->_sections['sec1']['index']]; ?>
</td>
    </tr>
<?php endfor; endif; ?>
    <tr>
      <td colspan="5" align="left">頁數&nbsp;&nbsp;<?php $_from = $this->_tpl_vars['p']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pag']):
?><?php echo $this->_tpl_vars['pag']; ?>
&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?></td>
    </tr>
  </table>
</div>
<div class="field_bottom"></div>
</div>