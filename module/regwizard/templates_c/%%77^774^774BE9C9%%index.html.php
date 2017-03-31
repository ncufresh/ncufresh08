<?php /* Smarty version 2.6.18, created on 2008-11-06 17:16:30
         compiled from index.html */ ?>
<link rel="stylesheet" href="templates/style.css" />
<table width="652" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="2" valign="top" class="td_1_top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top" class="td_2_full_left">
    <?php if ($this->_tpl_vars['currmodule']->isadmin($this->_tpl_vars['curruser']) == TRUE): ?>
    <center><a href="admin_main.php">[管理介面]</a></center>
    <?php endif; ?>
    <table width="318" border="0" cellspacing="0" cellpadding="0">
    <?php unset($this->_sections['dis']);
$this->_sections['dis']['name'] = 'dis';
$this->_sections['dis']['loop'] = is_array($_loop=$this->_tpl_vars['opt_list_dis']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['dis']['show'] = true;
$this->_sections['dis']['max'] = $this->_sections['dis']['loop'];
$this->_sections['dis']['step'] = 1;
$this->_sections['dis']['start'] = $this->_sections['dis']['step'] > 0 ? 0 : $this->_sections['dis']['loop']-1;
if ($this->_sections['dis']['show']) {
    $this->_sections['dis']['total'] = $this->_sections['dis']['loop'];
    if ($this->_sections['dis']['total'] == 0)
        $this->_sections['dis']['show'] = false;
} else
    $this->_sections['dis']['total'] = 0;
if ($this->_sections['dis']['show']):

            for ($this->_sections['dis']['index'] = $this->_sections['dis']['start'], $this->_sections['dis']['iteration'] = 1;
                 $this->_sections['dis']['iteration'] <= $this->_sections['dis']['total'];
                 $this->_sections['dis']['index'] += $this->_sections['dis']['step'], $this->_sections['dis']['iteration']++):
$this->_sections['dis']['rownum'] = $this->_sections['dis']['iteration'];
$this->_sections['dis']['index_prev'] = $this->_sections['dis']['index'] - $this->_sections['dis']['step'];
$this->_sections['dis']['index_next'] = $this->_sections['dis']['index'] + $this->_sections['dis']['step'];
$this->_sections['dis']['first']      = ($this->_sections['dis']['iteration'] == 1);
$this->_sections['dis']['last']       = ($this->_sections['dis']['iteration'] == $this->_sections['dis']['total']);
?>
      <tr>
        <td width="58" align="right">
		<img src="templates/images/<?php if ($this->_tpl_vars['opt_list_dis'][$this->_sections['dis']['index']]['dis_type'] == 'complete'): ?>cave.gif<?php else: ?>niddle.gif<?php endif; ?>" alt="(<?php echo $this->_tpl_vars['opt_list_dis'][$this->_sections['dis']['index']]['rwo_date_display']; ?>
)<?php echo $this->_tpl_vars['opt_list_dis'][$this->_sections['dis']['index']]['rwo_img_alt']; ?>
" width="17" height="18" />
		</td>
        <td width="5"></td>
        <td width="255" align="left"><a href="opt_check.php?rwoID=<?php echo $this->_tpl_vars['opt_list_dis'][$this->_sections['dis']['index']]['rwoID']; ?>
"><span class="<?php echo $this->_tpl_vars['opt_list_dis'][$this->_sections['dis']['index']]['dis_type']; ?>
"><?php echo $this->_tpl_vars['opt_list_dis'][$this->_sections['dis']['index']]['rwo_name']; ?>
</span></a></td>
      </tr>
    <?php endfor; endif; ?>
    </table>
    </td>
    <td valign="top" class="td_2_full_right">
    <div id="td_2_right">
    <?php if ($this->_tpl_vars['chk_finished'] == 1): ?>
    <br /><br /><br /><img src="templates/images/opt_finished.gif" />
    <?php endif; ?>
    </div>
    <div id="td_3_right"><img src="templates/images/pp.room<?php echo $this->_tpl_vars['c_level']; ?>
.gif" alt="<?php echo $this->_tpl_vars['c_level_description']; ?>
" /></div>
    <div id="td_4_right"></div>
    <div id="td_5_right" align="right">
    <img src="templates/images/ex_non-begin.gif" alt="工作未開始" /><br />
    <img src="templates/images/ex_necessary.gif" alt="必完成工作" /><br />
    <img src="templates/images/ex_non-necessary.gif" alt="非必要工作" /><br />
    <img src="templates/images/ex_complete.gif" alt="工作已完成" /><br />
    <img src="templates/images/ex_non-complete.gif" alt="過期未完成" />
    </div>
    </td>
  </tr>
</table>