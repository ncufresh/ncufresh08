<?php /* Smarty version 2.6.18, created on 2008-11-20 12:31:40
         compiled from register.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'register.htm', 63, false),)), $this); ?>
<style type="text/CSS">
.vCenter
{
	height: 189px;
	width: 175px;
	display:table-cell;
	text-align:center;
	vertical-align:middle;
}
.vCenter *
{
	vertical-align:middle;
}
.vCenter span
{
	display:inline-block;
	height:100%;
}
</style>
<script type="text/javascript">
	function chk_uid(uid)
	{
		if (!uid)
			return false;

		var parms = 'chk_uid=1&uid=' + encodeURIComponent(uid);

		var req = new Ajax.Request('<?php echo $this->_tpl_vars['currconfig']->url; ?>
/include/user.php', {method: 'get', parameters: parms, onComplete: function (req) {$('chk_uid_result').innerHTML = (req.responseText == 'exists') ? '<font color="#FF0000">此帳號已被使用</font>' : '';} });
	}
	function chk_name(name)
	{
		var parms = $H({'name' : name}).toQueryString();

		new Ajax.Request('<?php echo $this->_tpl_vars['currconfig']->url; ?>
/include/name.php', {method: 'post', parameters: parms, onComplete: function(req) {if(req.responseText == 'true') $('chk_name').innerHTML = ''; else $('chk_name').innerHTML = req.responseText}});
	}
	function changeFace()
	{	
		$('cface').src = 'templates/images/pine'+document.register.face.value+'.gif';
	}
</script>
<div style="border:2px solid #dfdfdf; margin:0 5px ;">
	<span style="color:red;"><?php echo $this->_tpl_vars['errmsg']; ?>
</span>
<p class="field_top">註冊帳號</p>
<div >
  <form method="post" action="" id="register" name="register" onSubmit="
	if (!this.uid.value) {alert('請輸入帳號'); this.uid.focus(); return false;}
	if (!this.pwd.value) {alert('請輸入密碼'); this.pwd.focus(); return false;}
	if (!this.pwd_i.value) {alert('請確認密碼'); this.pwd_i.focus(); return false;}
	if (this.pwd.value.length < 6) {alert('密碼長度需超過 6 個字元'); this.pwd.focus(); return false;}
	if (this.pwd.value != this.pwd_i.value) {alert('密碼不相符'); this.pwd.focus(); return false;}
	if (!this.realname.value) {alert('請輸入姓名'); this.realname.focus(); return false;}
	if (!this.name.value) {alert('請輸入暱稱'); this.name.focus(); return false;}
	if (!this.sex[0].checked && !this.sex[1].checked) {alert('請選擇性別'); return false;}
">
<div style="background:url('templates/images/elf_bg.jpg') no-repeat;float:right; margin:0px 20px -180px 0px; "><div class="vCenter"><span></span><img id="cface" src="templates/images/pine<?php echo $_POST['face']; ?>
.gif" alt="松鼠圖像" /></div></div>
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" align="center" width="100%">
      <tr>
  	    <td width="25%"><font color="#FF0000">*&nbsp;</font>帳號</td>
		<td width="75%"><input type="text" name="uid" size="20" maxlength="12" onblur="chk_uid(this.value);" value="<?php echo $_POST['uid']; ?>
"/><span id="chk_uid_result" style="margin: 0px 10px;"></span></td>
      </tr>
	  <tr>
		<td width="25%">頭像</td>
		<td><select name="face" onChange="changeFace()"><?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['faces'],'selected' => $_POST['face']), $this);?>
</select></td>
	  </tr>
      <tr>
        <td width="25%"><font color="#FF0000">*&nbsp;</font>密碼</td>
		<td width="75%"><input type="password" name="pwd" size="20" /> <br/>密碼長度須超過 6 個字元</td>
      </tr>
      <tr>
        <td width="25%"><font color="#FF0000">*&nbsp;</font>確認密碼</td>
        <td width="75%"><input type="password" name="pwd_i" size="20" /></td>
      </tr>
      <tr>
        <td width="25%"><font color="#FF0000">*&nbsp;</font>姓名</td>
		<td width="75%"><input type="text" name="realname" size="10" value="<?php echo $_POST['realname']; ?>
"/></td>
      </tr>
      <tr>
        <td width="25%"><font color="#FF0000">*&nbsp;</font>暱稱</td>
		<td width="75%"><input type="text" name="name" size="20" value="<?php echo $_POST['name']; ?>
" onblur="chk_name(this.value)" /><span id="chk_name" style="color:red;margin: 0 10px"></span></td>
      </tr>
      <tr>
        <td width="25%"><font color="#FF0000">*&nbsp;</font>性別</td>
		<td width="75%"><input type="radio" name="sex" value="boy" <?php if ($_POST['sex'] == 'boy'): ?>checked="checked"<?php endif; ?>/>男&nbsp;&nbsp;<input type="radio" name="sex" value="girl" <?php if ($_POST['sex'] == 'girl'): ?>checked="checked"<?php endif; ?>/>女</td>
      </tr>
      <tr>
        <td width="26%">計中e-mail帳號 (學號)</td>
		<td width="74%"><input type="text" name="sid" size="10" value="<?php echo $_POST['sid']; ?>
"/></td>
      </tr>
      <tr>
        <td width="26%">計中e-mail密碼</td>
        <td width="74%"><input type="password" name="spwd" size="10" /> 新生請填出生日期 (YYYYMMDD)</td>
      </tr>
      <tr>
        <td width="25%"><font color="#FF0000">*&nbsp;</font>系所</td>
        <td width="75%"><select name="department" size="1">
<?php $_from = $this->_tpl_vars['dep']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value'] => $this->_tpl_vars['desc']):
?>
	<option value="<?php echo $this->_tpl_vars['value']; ?>
" <?php if ($_POST['department'] == $this->_tpl_vars['value']): ?>selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['desc']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
        </select></td>
      </tr>
      <tr>
        <td width="25%">首頁</td>
		<td width="75%"><input type="text" name="website" size="40" value="<?php echo $_POST['website']; ?>
"/></td>
      </tr>
      <tr>
        <td width="25%">電子信箱</td>
		<td width="75%"><input type="text" name="email" size="40" value="<?php echo $_POST['email']; ?>
"/></td>
      </tr>
      <tr>
        <td width="25%">自我介紹</td>
		<td width="75%"><textarea name="intro" rows="10" cols="40"><?php echo $_POST['intro']; ?>
</textarea></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="hidden" name="register_user" value="1" /><input type="submit" value="送出" />&nbsp;&nbsp;<input type="reset" value="取消" /></td>
      </tr>
    </table>
  </form>
</div>
<p class="field_bottom"></p>
</div>