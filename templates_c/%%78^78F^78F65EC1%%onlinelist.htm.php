<?php /* Smarty version 2.6.18, created on 2010-07-01 23:25:14
         compiled from block/onlinelist.htm */ ?>
<?php if (( ! $this->_tpl_vars['curruser']->isguest() ) && ! $this->_tpl_vars['currmodule']->showlink && ! $this->_tpl_vars['block']['fuckok']): ?>
<style type="text/css">
#block_flist
{
	margin: 5px 0 0;
	width: 100%;
	height: 357px;
}

#block_flist ul
{
	margin: 0px;
	list-style-type: none;
	display: inline;
}

#block_flist li
{
	float: left;
	margin-top: 5px;
	display: block;
	width: 70px;
	height: 25px;
}

#flistDiv
{
	clear: both;
	background: url("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/friend_content.png") no-repeat;
	width: 100%;
	height: 330px;
}

#flistShow
{
	overflow-x: hidden;
	overflow-y: auto;
	width: 100%;
	height: 330px;
}

#flistShow a
{
	margin: auto 1px;
	color: #000000;
}
</style>

<script type="text/javascript">

	var timeoutflag = 0;

	var listtype = <?php echo $this->_tpl_vars['block']['listtype']; ?>
;

	function show_friend_list(req)
	{
		var fno = req.responseXML.getElementsByTagName("fno");
		var fid = req.responseXML.getElementsByTagName("fid");

		var fl = (listtype == 1) ? 1 : 2;

		$('friend_button').style.background = 'url(<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/c_friendlist_' + fl + '.png)';

		fl = 3 - fl;

		$('online_button').style.background = 'url(<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/c_onlinelist_' + fl + '.png)';

		var friend = '<table border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse">\n';

		for (var i = 0;i < fid.length;i++)
		{
			var fno_data = (fno.item(i).firstChild) ? fno.item(i).firstChild.data : '';
			var fid_data = (fid.item(i).firstChild) ? fid.item(i).firstChild.data : '';

			friend = friend + '  <tr>\n    <td><a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/msgsend.php?fno=' + fno_data + '" title="傳送訊息"><img src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/mailicon.png" alt="傳送訊息" border="0" /></a><a href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/show_pfile.php?uno=' +  fno_data + '" title="觀看使用者資料">' + fid_data + '</a></td>\n  </tr>\n';
		}

		friend = friend + '</table>\n';

		$('flistShow').innerHTML = friend;
	}

	function get_friend_list()
	{
		if (timeoutflag != 0)
			clearTimeout(timeoutflag);

		var parms = "listtype=" + listtype;

		var req = new Ajax.Request("<?php echo $this->_tpl_vars['block']['dirname']; ?>
/block/onlinelist_ajax.php", {method: "post", parameters: parms, onComplete: show_friend_list});

		timeoutflag = setTimeout(get_friend_list, 60 * 1000);
	}

	function turn_friend_list(p)
	{
		listtype = (p == 1 || p == 2) ? p : listtype;

		get_friend_list();
	}

	get_friend_list();
</script>
 <div id="block_flist">
   <ul>
     <li style="width:65px; height:21px;background:url('<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/c_friendlist_<?php if ($this->_tpl_vars['block']['listtype'] == 1): ?>1<?php else: ?>2<?php endif; ?>.png');" id="friend_button"><a onclick="javascript: turn_friend_list(1); return false;" href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/block/onlinelist_ajax.php?j=0&l=1" title="好友名單" style="display:block;width:65px;height:21px;"></a></li>
     <li style="width:61px; height:21px;background:url('<?php echo $this->_tpl_vars['block']['dirname']; ?>
/templates/images/c_onlinelist_<?php if ($this->_tpl_vars['block']['listtype'] == 1): ?>2<?php else: ?>1<?php endif; ?>.png');" id="online_button"><a onclick="javascript: turn_friend_list(2); return false;" href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/block/onlinelist_ajax.php?j=0&l=2" title="線上名單" style="display:block;width:61px;height:21px;"></a></li>
   </ul>
   <div id="flistDiv">
     <div id="flistShow"><table border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse"><?php echo $this->_tpl_vars['block']['friend']; ?>
</table></div>
   </div>
 </div>
<a id="img_aboutus" href="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/aboutus.php" title="關於我們"><span>ABOUTUS</span></a>
<?php endif; ?>