<?php /* Smarty version 2.6.18, created on 2009-08-08 15:42:49
         compiled from read_contact.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'assign_adv', 'read_contact.htm', 32, false),)), $this); ?>
<div class="blue_back">
<div class="field_top_top"><img src="templates/images/contactus.gif" class="field_title"/><img src="templates/images/pineR.gif" class="in_section"/></div>
<div class="field_content_bar"></div>
<div class="field_content">
	<div class="button"><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/redirect.php?1" title="上一頁">回到<br/>上頁</a></div>
	<div class="button"><a onClick="if(!confirm('確認刪除？'))return false;" href="<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
?del_contact=1&mno=<?php echo $this->_tpl_vars['mno']; ?>
" title="刪除留言" style="line-height:46px;">刪除</a></div>
  <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" align="center" width="100%">
    <tr>
      <td>姓名：</td>
      <td><a href="<?php echo $this->_tpl_vars['email']; ?>
" title="回覆"><?php echo $this->_tpl_vars['sender']; ?>
</a></td>
    </tr>
    <tr>
      <td>標題：</td>
      <td><?php echo $this->_tpl_vars['title']; ?>
</td>
    </tr>
    <tr>
      <td>時間：</td>
      <td><?php echo $this->_tpl_vars['time']; ?>
</td>
	  <td align="right">ip:<?php echo $this->_tpl_vars['ip']; ?>
</td>
    </tr>
    <tr>
      <td colspan="2"><hr/>
          <?php echo $this->_tpl_vars['content']; ?>

      </td>
    </tr>
    <tr>
      <td colspan="2"><hr />
        <form action="?changestate=1" method="post">
          <input type="hidden" name="mno" value="<?php echo $this->_tpl_vars['mno']; ?>
" />
          狀態 :
          <select name="state">
            <?php echo smarty_function_assign_adv(array('var' => 'states','value' => "array('未處理','處理中','已回覆','已解決')"), $this);?>

            <?php if ($this->_tpl_vars['state'] == ''): ?><?php $this->assign('state', "未處理"); ?><?php endif; ?>
            <?php $_from = $this->_tpl_vars['states']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['st']):
?>
            <option value="<?php echo $this->_tpl_vars['st']; ?>
"<?php if ($this->_tpl_vars['st'] == $this->_tpl_vars['state']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['st']; ?>
</option>
            <?php endforeach; endif; unset($_from); ?>
          </select>
          </select><input type="submit" value="更新" />
        </form>
      </td>
    </tr>
  </table>
</div>
<div class="field_bottom"></div>
</div>