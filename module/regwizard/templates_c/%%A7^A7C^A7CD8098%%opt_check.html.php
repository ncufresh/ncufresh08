<?php /* Smarty version 2.6.18, created on 2008-11-08 10:36:30
         compiled from opt_check.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'nl2br', 'opt_check.html', 56, false),)), $this); ?>
<table width="652" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="64" colspan="2" background="templates/images/bg_1_top.gif">&nbsp;</td>
  </tr>
  <tr>
    <td width="318" background="templates/images/bg_2_left.gif" valign="top"><table width="318" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="58" valign="top" align="right"><span class="column_title">名稱</span></td>
        <td width="5" valign="top">&nbsp;</td>
        <td width="255" valign="top"><span class="column_title_value"><?php echo $this->_tpl_vars['opt_dis']['rwo_name']; ?>
</span></td>
      </tr>
      <tr>
        <td width="58" valign="top" align="right"><span class="column_title">日期</span></td>
        <td width="5" valign="top">&nbsp;</td>
        <td width="255" valign="top">
        <span class="column_title_value">
        <?php echo $this->_tpl_vars['opt_dis']['rwo_date_display']; ?>

        </span>
        </td>
      </tr>
      <tr>
        <td width="58" valign="top" align="right"><span class="column_title">重要性</span></td>
        <td width="5" valign="top">&nbsp;</td>
        <td width="255" valign="top">
        <span class="column_title_value">
        <?php if ($this->_tpl_vars['opt_dis']['opt_necessary'] == 'necessary'): ?>
        必要
        <?php elseif ($this->_tpl_vars['opt_dis']['opt_necessary'] == "non-necessary"): ?>
        非必要
        <?php endif; ?>
        </span>
        </td>
      </tr>
      <tr>
        <td valign="top" align="right"><span class="column_title">相關連結</span></td>
        <td valign="top">&nbsp;</td>
        <td valign="top">
        <span class="column_title_value">
        <?php unset($this->_sections['rel_link_dis']);
$this->_sections['rel_link_dis']['name'] = 'rel_link_dis';
$this->_sections['rel_link_dis']['loop'] = is_array($_loop=$this->_tpl_vars['opt_rel_links_display']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['rel_link_dis']['show'] = true;
$this->_sections['rel_link_dis']['max'] = $this->_sections['rel_link_dis']['loop'];
$this->_sections['rel_link_dis']['step'] = 1;
$this->_sections['rel_link_dis']['start'] = $this->_sections['rel_link_dis']['step'] > 0 ? 0 : $this->_sections['rel_link_dis']['loop']-1;
if ($this->_sections['rel_link_dis']['show']) {
    $this->_sections['rel_link_dis']['total'] = $this->_sections['rel_link_dis']['loop'];
    if ($this->_sections['rel_link_dis']['total'] == 0)
        $this->_sections['rel_link_dis']['show'] = false;
} else
    $this->_sections['rel_link_dis']['total'] = 0;
if ($this->_sections['rel_link_dis']['show']):

            for ($this->_sections['rel_link_dis']['index'] = $this->_sections['rel_link_dis']['start'], $this->_sections['rel_link_dis']['iteration'] = 1;
                 $this->_sections['rel_link_dis']['iteration'] <= $this->_sections['rel_link_dis']['total'];
                 $this->_sections['rel_link_dis']['index'] += $this->_sections['rel_link_dis']['step'], $this->_sections['rel_link_dis']['iteration']++):
$this->_sections['rel_link_dis']['rownum'] = $this->_sections['rel_link_dis']['iteration'];
$this->_sections['rel_link_dis']['index_prev'] = $this->_sections['rel_link_dis']['index'] - $this->_sections['rel_link_dis']['step'];
$this->_sections['rel_link_dis']['index_next'] = $this->_sections['rel_link_dis']['index'] + $this->_sections['rel_link_dis']['step'];
$this->_sections['rel_link_dis']['first']      = ($this->_sections['rel_link_dis']['iteration'] == 1);
$this->_sections['rel_link_dis']['last']       = ($this->_sections['rel_link_dis']['iteration'] == $this->_sections['rel_link_dis']['total']);
?>
        <a target="<?php echo $this->_tpl_vars['opt_rel_links_display'][$this->_sections['rel_link_dis']['index']]['target']; ?>
" href="<?php echo $this->_tpl_vars['opt_rel_links_display'][$this->_sections['rel_link_dis']['index']]['url']; ?>
"><?php echo $this->_tpl_vars['opt_rel_links_display'][$this->_sections['rel_link_dis']['index']]['name']; ?>
</a><br />
        <?php endfor; endif; ?>
        </span>
        </td>
      </tr>
      <tr>
        <td colspan="3" align="center" valign="bottom">
        <form method="post" action="opt_check.php?action=process&rwoID=<?php echo $this->_tpl_vars['opt_dis']['rwoID']; ?>
">
				<br/><?php echo $this->_tpl_vars['form_complete_submit']; ?>
 <span class="buttonfake"><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/redirect.php?1">回上一頁</a></span>
        </form>
        </td>
      </tr>
    </table>
    </td>
    <td width="334" class="td_2_full_right" valign="top">
    <div id="opt_chk_td_2_right"></div>
    <div id="opt_chk_td_2_content"><?php echo ((is_array($_tmp=$this->_tpl_vars['opt_dis']['rwo_description'])) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</div>
    </td>
  </tr>
</table>