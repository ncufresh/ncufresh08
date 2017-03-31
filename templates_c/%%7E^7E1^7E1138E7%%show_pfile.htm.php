<?php /* Smarty version 2.6.18, created on 2010-07-02 01:00:40
         compiled from show_pfile.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlencode', 'show_pfile.htm', 33, false),array('modifier', 'nl2br', 'show_pfile.htm', 41, false),)), $this); ?>
<script type="text/javascript">
	function add_friend2(fid)
	{
		var parms = 'add_friend=1&fid=' + fid;

		var req = new Ajax.Request("friendlist_ajax.php", {method: "post", parameters: parms, onComplete: function (q){alert('已加入好友名單');}});
	}
</script>
<div class="blue_back">
	<div class="field_top_top"><img src="templates/images/personallist.gif" class="field_title"/><img src="templates/images/pine<?php echo $this->_tpl_vars['user']->pic; ?>
.gif" class="in_section"/></div>
	<div id="gotoroom"><a href="<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/elf/elfroom.php?uno=<?php echo $_GET['uno']; ?>
" title="進入精靈房間"></a></div>
<div class="field_content_bar"></div>
<div class="field_content">
      <?php if (( ! $this->_tpl_vars['curruser']->isguest() )): ?><div class="button"><a href="javascript: add_friend2('<?php echo $this->_tpl_vars['user']->uid; ?>
')" title="加入好友" >加為<br>好友</a></div><div class="button"><a href="msgsend.php?fno=<?php echo $this->_tpl_vars['user']->uno; ?>
" title="傳送訊息" >傳送<br>訊息</a></div><?php endif; ?>
  <table border="0" cellpadding="10" cellspacing="0" style="border-collapse: collapse;" width="100%">
    <tr>
      <th colspan="5"><?php echo $this->_tpl_vars['user']->uid; ?>
(<?php if (( $this->_tpl_vars['user']->isonline() == 1 )): ?>正在線上<?php else: ?>不在線上<?php endif; ?>)</th>
    </tr>
    <tr>
      <td width="25%">暱稱</td>
      <td width="25%"><?php echo $this->_tpl_vars['user']->name; ?>
</td>
    </tr>
    <tr>
      <td width="25%">性別</td>
      <td width="25%"><?php echo $this->_tpl_vars['user']->sex; ?>
</td>
    </tr>
    <tr>
      <td width="25%">系所</td>
      <td width="25%"><?php echo $this->_tpl_vars['user']->department; ?>
</td>
    </tr>
    <tr>
      <td width="25%">首頁</td>
      <td colspan="3" width="82%"><?php if (( $this->_tpl_vars['user']->website )): ?><a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->website)) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
" target="_blank" title="個人首頁">請按我</a><?php else: ?>無<?php endif; ?></td>
    </tr>
    <tr>
      <td width="25%">電子信箱</td>
      <td colspan="3" width="82%"><?php if (( $this->_tpl_vars['user']->email )): ?><a href="mailto:<?php echo ((is_array($_tmp=$this->_tpl_vars['user']->email)) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
" title="電子信箱"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->email)) ? $this->_run_mod_handler('htmlencode', true, $_tmp) : htmlencode($_tmp)); ?>
</a><?php else: ?>無<?php endif; ?></td>
    </tr>
    <tr>
      <td width="25%">自我介紹</td>
      <td colspan="3" width="82%"><?php echo ((is_array($_tmp=$this->_tpl_vars['user']->intro)) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</td>
    </tr>
  </table>
</div>
<div class="field_bottom"></div>
</div>