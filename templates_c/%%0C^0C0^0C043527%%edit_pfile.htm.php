<?php /* Smarty version 2.6.18, created on 2008-11-06 15:20:56
         compiled from edit_pfile.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'binary_and', 'edit_pfile.htm', 56, false),)), $this); ?>
<div class="blue_back">
		<div class="field_top_top"><img src="templates/images/personallist.gif" class="field_title"/><a href="selectFace.php" title="選擇頭像" style="text-decoration:none;"><div class="in_section"><img src="templates/images/pine<?php echo $this->_tpl_vars['user']->pic; ?>
.gif" style="border:0px;"/><br/><span style="color:black;margin-left:50px;">點我選擇頭像</span></a></div></div>
<div id="gotoroom"><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/elf/elfroom.php" title="進入精靈房間"></a></div>
<div class="field_content_bar"></div>
<div class="field_content">
<?php if (( $this->_tpl_vars['curruser']->uno == $this->_tpl_vars['user']->uno )): ?>
  <div >
<?php if (( ! $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermvalid()) && ! $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermdeny()) )): ?>
    <div class="button"><a href="sparc.php" title="計中 e-mail 確認" >e-mail<br/>確認</a></div>
<?php endif; ?>
    <div class="button"><a href="passwd.php" title="修改密碼" >修改<br/>密碼</a></div>
  </div>
<?php endif; ?>

  <form method="post" action="" onSubmit="
	if (!this.name.value) {alert('請輸入姓名'); this.name.focus(); return false;}
">
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" align="center" width="500">
      <tr>
        <td width="25%" class="label">帳號</td>
        <td width="75%"><?php echo $this->_tpl_vars['user']->uid; ?>
</td>
      </tr>
      <tr>
        <td width="25%" class="label">姓名</td>
        <td width="75%"><?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermadmin()) )): ?><input type="text" name="realname" value="<?php echo $this->_tpl_vars['user']->realname; ?>
" size="10" /><?php else: ?><?php echo $this->_tpl_vars['user']->realname; ?>
<?php endif; ?></td>
      </tr>
      <tr>
        <td width="25%" class="label"><font color="#FF0000">*</font>&nbsp;暱稱</td>
        <td width="75%"><input type="text" name="name" value="<?php echo $this->_tpl_vars['user']->name; ?>
" size="20" /></div></td>
      </tr>
      <tr>
        <td width="25%" class="label">性別</td>
        <td width="75%"><?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermadmin()) )): ?><input type="radio" name="sex" value="boy" <?php if (( $this->_tpl_vars['user']->sex == "男" )): ?>checked <?php endif; ?>/>男&nbsp;&nbsp;<input type="radio" name="sex" value="girl" <?php if (( $this->_tpl_vars['user']->sex != "男" )): ?>checked <?php endif; ?>/>女<?php else: ?><?php echo $this->_tpl_vars['user']->sex; ?>
<?php endif; ?></td>
      </tr>
      <tr>
        <td width="25%" class="label"><font color="#FF0000">*</font>&nbsp;學號</td>
        <td width="75%"><?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermadmin()) )): ?><input type="text" name="sid" value="<?php echo $this->_tpl_vars['user']->sid; ?>
" size="10" /><?php else: ?><?php echo $this->_tpl_vars['user']->sid; ?>
<?php endif; ?></td>
      </tr>
      <tr>
        <td width="25%" class="label">首頁</td>
        <td width="75%"><input type="text" name="website" value="<?php echo $this->_tpl_vars['user']->website; ?>
" size="40" /></td>
      </tr>
      <tr>
        <td width="25%" class="label">電子信箱</td>
        <td width="75%"><input type="text" name="email" value="<?php echo $this->_tpl_vars['user']->email; ?>
" size="40" /></td>
      </tr>
      <tr>
        <td width="25%" class="label">自我介紹</td>
        <td width="75%"><textarea name="intro" rows="10" cols="40"><?php echo $this->_tpl_vars['user']->intro; ?>
</textarea></td>
      </tr>
<?php if (( $this->_tpl_vars['curruser']->haveperm($this->_tpl_vars['curruser']->p_handler->getpermadmin()) )): ?>
      <tr>
        <td width="25%" class="label">使用者權限</td>
        <td width="75%">
<?php $_from = $this->_tpl_vars['user']->p_handler->permlist; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['perm']):
?>
          <input type="checkbox" name="perm[]" value="<?php echo $this->_tpl_vars['perm']['perm_id']; ?>
"<?php if (((is_array($_tmp=$this->_tpl_vars['user']->perm)) ? $this->_run_mod_handler('binary_and', true, $_tmp, $this->_tpl_vars['perm']['perm_id']) : binary_and($_tmp, $this->_tpl_vars['perm']['perm_id']))): ?> checked<?php endif; ?> /> <?php echo $this->_tpl_vars['perm']['perm_desc']; ?>
&nbsp;
<?php endforeach; endif; unset($_from); ?>
        </td>
      </tr>
<?php endif; ?>
      <tr>
        <td colspan="2" align="center"><input type="hidden" name="edit_pfile" value="1" /><input type="hidden" name="uno" value="<?php echo $this->_tpl_vars['user']->uno; ?>
" /><input type="submit" value="送出" />&nbsp;&nbsp;<input type="reset" value="取消" /></td>
      </tr>
    </table>
  </form>
</div>  
<div class="field_bottom"></div>
</div>