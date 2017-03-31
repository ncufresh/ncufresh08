<?php /* Smarty version 2.6.18, created on 2008-11-06 15:20:53
         compiled from friendlist.htm */ ?>
<script type="text/javascript">
	function chk_uid(uid)
	{
		if (!uid)
			return false;

		var parms = 'chk_uid=1&uid=' + encodeURIComponent(uid);

		var req = new Ajax.Request('<?php echo $this->_tpl_vars['currconfig']->url; ?>
/include/user.php', {method: 'get', parameters: parms, onComplete: function (req) {$('chk_uid_result').innerHTML = (req.responseText == 'exists') ? '' : '錯誤的使用者帳號';} });
	}

	function addfriend()
	{
		if (!document.fl.fid.value)
			return ;

		var parms = 'add_friend=1&keep=1&fid=' + document.fl.fid.value;

		var req = new Ajax.Request("friendlist_ajax.php", {method: "post", parameters: parms, onComplete: function(q){ document.location.href = '<?php echo $this->_tpl_vars['currconfig']->phpself; ?>
';}});
	}

	function delfriend(fno)
	{
		if (fno == 0)
			return ;

		var parms = 'del_friend=1&keep=1&fno=' + fno;

		var req = new Ajax.Request("friendlist_ajax.php", {method: "get", parameters: parms, onComplete: function(q){ Effect.Fade('fl-' + fno); }});
	}

	function turnfriendship(fno)
	{
		if (fno == 0)
			return ;

		var imgsrc = $('fl-img-' + fno).src;
		var txtclass;

		if (imgsrc.match('good.gif'))
		{
			imgsrc = imgsrc.replace('good.gif', 'bad.gif');
			txtclass = "bfriend";
		}
		else
		{
			imgsrc = imgsrc.replace('bad.gif', 'good.gif');
			txtclass = "gfriend";
		}

		var parms = 'turn_friendship=1&keep=1&fno=' + fno;

		var req = new Ajax.Request("friendlist_ajax.php", {method: "get", parameters: parms, onComplete: function(q){ $('friend-' + fno).className = txtclass; $('fl-img-' + fno).src = imgsrc; }});
	}
</script>
<style type="text/css">
.gfriend {color: #CC9900};
.bfriend {color: #666666};
</style>
<div class="blue_back">
<div class="field_top_top"><img src="templates/images/friend.gif" alt="好友名單" class="field_title"/>
<div style="margin: -20px 0px 80px 470px; >margin-top:-40px;">
	<form method="post" action="friendlist_ajax.php?add_friend=1" id="fl" name="fl" onSubmit="
		addfriend();return false;
	">
	  <div style="width:70px;">新增好友</div> <br/><input type="text" name="fid" size="17" onblur="chk_uid(this.value);" style="margin-left:20px;"/><br/>
	  <input type="submit" value="新增" style="margin-left:40px;"/>
	  <span id="chk_uid_result" style="margin: 0px 0px; color: #FF0000;font-size:8pt;width:100px;display:inline;"></span>
  </form>
 </div>
</div>
<div class="field_content_bar"><div style="margin:4px 10px 0 0;float:left; width:325px;">帳號 (暱稱)</div><div style="margin-top:4px;width:50px;float:left;">傳訊</div><div style="margin-top:4px;float:left;">刪除</div></div>
<div class="field_content_content">

  <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse;" width="100%">
	  <tr><td width="340"></td><td width="50"></td><td ></td></tr>
<?php $_from = $this->_tpl_vars['friend']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
    <tr id="fl-<?php echo $this->_tpl_vars['user']->uno; ?>
">
	    <td><span id="friend-<?php echo $this->_tpl_vars['user']->uno; ?>
" class="<?php if (( $this->_tpl_vars['user']->friendship == $this->_tpl_vars['friend_handler']->goodfriend )): ?>gfriend<?php else: ?>bfriend<?php endif; ?>"><a href="show_pfile.php?uno=<?php echo $this->_tpl_vars['user']->uno; ?>
" title="觀看使用者資料" style="color:#c90"><?php echo $this->_tpl_vars['user']->uid; ?>
 (<?php echo $this->_tpl_vars['user']->name; ?>
)</a></span></td>
      <td><a href="msgsend.php?fno=<?php echo $this->_tpl_vars['user']->uno; ?>
" title="傳送訊息"><img src="templates/images/mailicon.png" alt="" border="0" /></a></td>
      <td><a onclick="javascript: if (confirm('確定要刪除 <?php echo $this->_tpl_vars['user']->uid; ?>
 (<?php echo $this->_tpl_vars['user']->name; ?>
) ?')) {delfriend(<?php echo $this->_tpl_vars['user']->uno; ?>
);} return false;" href="friendlist_ajax.php?del_friend=1&fno=<?php echo $this->_tpl_vars['user']->uno; ?>
" title="從好友名單中刪除"><img src="templates/images/p_friendminus.gif" alt="" border="0" /></a></td>
    </tr>
<?php endforeach; endif; unset($_from); ?>
  </table>
</div>
<div class="field_bottom"></div>
</div>