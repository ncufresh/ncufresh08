<?php /* Smarty version 2.6.18, created on 2010-07-01 23:25:14
         compiled from block/status.htm */ ?>
<?php if (( ! $this->_tpl_vars['curruser']->isguest() )): ?>
<script type="text/javascript">
	function show_msg_status(req)
	{
		var msg_num = req.responseText;

		var status = (msg_num > 0) ? '<a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/msgbox.php" title="訊息信箱">您有 ' + msg_num + ' 封新訊息</a>' : '您沒有新訊息';

		$('msg_status').innerHTML = status;
	}

	function get_msg_status()
	{
		var parms = "unread=1";

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/msgbox_do.php", {method: "get", parameters: parms, onComplete: show_msg_status});

		setTimeout(get_msg_status, 60 * 1000);
	}

	get_msg_status();
</script>

<div id="block_user_status">
<div id="block_user_status_data">
<div>Hi~, <?php echo $this->_tpl_vars['block']['name']; ?>
 </div>
<p id="msg_status"><?php echo $this->_tpl_vars['block']['unreadmail']; ?>
</p>
<p>
	<a id="img_link01" href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/edit_pfile.php" title="個人資料"><span>個人資料</span></a>
	<a id="img_link02" href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/forum/myquestion.php" title="問題紀錄"><span>問題紀錄</span></a>
	<a id="img_link03" href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/friendlist.php" title="好友名單"><span>好友名單</span></a>
</p>
<p>
	<a id="img_link04" href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/msgbox.php" title="個人信箱"><span>個人信箱</span></a>
	<a id="img_link05" href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/schedule/" title="行事曆"><span>行事曆</span></a>
	<a id="img_link06" href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/include/user.php?user_logout=1" title="登出"><span>登出</span></a>
</p>
<div style="clear:both"></div>
</div>
</div>
<?php endif; ?>