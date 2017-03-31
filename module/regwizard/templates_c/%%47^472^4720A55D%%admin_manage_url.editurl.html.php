<?php /* Smarty version 2.6.18, created on 2009-01-26 13:14:28
         compiled from admin_manage_url.editurl.html */ ?>
<table width="652" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="64" colspan="2" valign="top" background="templates/images/bg_1_top.gif">&nbsp;</td>
  </tr>
  <tr>
    <td width="318" valign="top" background="templates/images/bg_2_left.gif">
    <table width="318" border="0" cellspacing="0" cellpadding="0">
    <?php if ($this->_tpl_vars['link_exist'] == TRUE): ?>
    <?php unset($this->_sections['dis']);
$this->_sections['dis']['name'] = 'dis';
$this->_sections['dis']['loop'] = is_array($_loop=$this->_tpl_vars['opt_list_url_dis']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
        <td width="58"><a href="admin_process.php?action=deleteurl&rel_l_ID=<?php echo $this->_tpl_vars['opt_list_url_dis'][$this->_sections['dis']['index']]['rel_l_ID']; ?>
"><span class="text_delete">[刪除]</span></a></td>
        <td width="5">&nbsp;</td>
        <td width="255"><a href="admin_manage_url.php?action=edit_single_url&rel_l_ID=<?php echo $this->_tpl_vars['opt_list_url_dis'][$this->_sections['dis']['index']]['rel_l_ID']; ?>
"><span class="necessary"><?php echo $this->_tpl_vars['opt_list_url_dis'][$this->_sections['dis']['index']]['name']; ?>
</span></a></td>
      </tr>
    <?php endfor; endif; ?>
    <?php endif; ?>
      <form method="post" action="admin_process.php?action=addurl">
      <tr>
        <td colspan="3"><br /><br /><br /><center><span class="necessary">新增相關連結</span><input name="rwoID" type="hidden" value="<?php echo $this->_tpl_vars['rwoID']; ?>
" /></center></td>
      </tr>
      <tr>
        <td width="58" align="right"><span class="column_title">連結名稱</span></td>
        <td width="5"></td>
        <td width="255"><input name="name" type="text" /></td>
      </tr>
      <tr>
        <td width="58" align="right"><span class="column_title">連結URL</span></td>
        <td width="5"></td>
        <td width="255"><input name="url" type="text" value="http://" /></td>
      </tr>
      <tr>
        <td width="58" align="right"><span class="column_title">開啟視窗</span></td>
        <td width="5"></td>
        <td width="255">
        <select name="target">
          <option value="_blank">開新視窗</option>
          <option value="_self">原視窗開啟</option>
        </select>
        </td>
      </tr>
      <tr>
        <td colspan="3"><center><input name="submit" type="submit" value="新增相關連結" /></center></td>
      </tr>
      </form>
    </table>
    </td>
    <td width="334" valign="top" class="td_2_full_right">
    <div id="td_2_right_admin"></div>
    <a href="admin_main.php"><img border="0" src="templates/images/admin_btn_opt_manage.gif" alt="管理端首頁" /></a><br />
    <a href="admin_manage_add.php"><img border="0" src="templates/images/admin_btn_opt_add.gif" alt="選項新增" /></a><br />
    </td>
  </tr>
</table>