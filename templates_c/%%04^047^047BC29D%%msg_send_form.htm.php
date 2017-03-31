<?php /* Smarty version 2.6.18, created on 2008-11-13 21:20:56
         compiled from msg_send_form.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'msg_send_form.htm', 42, false),)), $this); ?>
<script type="text/javascript">
	function show_chk_uid(req)
	{
		$('chk_uid').innerHTML = (req.responseText == "exists") ? '' : '<font color="#FF0000">錯誤的使用者帳號</font>';
	}

	function chk_uid()
	{
		if (!document.msg_send.fid.value)
			return false;

		var parms = "chk_uid=1&uid=" + document.msg_send.fid.value;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['currconfig']->url; ?>
/include/user.php", {method: "get", parameters: parms, onComplete: show_chk_uid});
	}
</script>

<div class="blue_back">
<div class="field_top_top">
	<img src="templates/images/sendmail.gif" alt="傳訊息" class="field_title"/>
	<div style="margin: -20px 0px 80px 470px;float:none;font-size:14pt;">
		回到&gt;&gt;<a href="redirect.php?1" style="color:black;text-decoration:none;margin:10px 0 0 20px;font-size:24pt;display:block;"><span>上一頁</span></a></div>
</div>
<div class="field_content_bar"></div>
<div class="field_content">
    <form method="post" action="msgsend.php" id="msg_send" name="msg_send" onSubmit="
  	if (!this.fid.value && document.msg_send.group.value == 0) {alert('請輸入收件人'); this.fid.focus(); return false;}
	if (!this.title.value) {alert('請輸入標題'); this.title.focus(); return false;}
	if (!this.content.value) {alert('請輸入內容'); this.content.focus(); return false;}
" >
    <input type="submit" value="送出" class="button" style="font-size:12pt"/><input type="reset" value="清除" class="button" style="font-size:12pt"/>
    <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" align="center" >
      <tr>
        <td>收件人</td>
	<td><input type="text" name="fid" value="<?php echo $this->_tpl_vars['fid']; ?>
" size="20" onBlur="javascript: chk_uid()" />
	
		<span id="chk_uid" style="margin: 0px 10px;font-size:11pt;"></span>
	</td>
      </tr>
      <tr>
        <td>標題</td>
        <td><input type="text" name="title" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
" size="40" /></td>
      </tr>
      <tr>
        <td colspan="2"><textarea name="content" rows="10" cols="50"></textarea></td>
      </tr>
    </table>
  </form>
</div>
<div class="field_bottom"></div>
</div>