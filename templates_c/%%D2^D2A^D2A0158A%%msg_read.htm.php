<?php /* Smarty version 2.6.18, created on 2008-11-07 16:27:21
         compiled from msg_read.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'urlencode', 'msg_read.htm', 9, false),)), $this); ?>
<div class="blue_back">
<div class="field_top_top">
	<img src="templates/images/readmail.gif" class="field_title" alt="傳訊息" />
	<div style="margin: -20px 0px 80px 470px;float:none;font-size:14pt;">
		回到&gt;&gt;<a href="redirect.php?1" style="color:black;text-decoration:none;margin:10px 0 0 20px;font-size:24pt;display:block;"><span>我的信箱</span></a></div>
</div>
<div class="field_content_bar"></div>
<div class="field_content">
  <div class="button"><a href="msgsend.php?msgreply=1&title=<?php echo ((is_array($_tmp=$this->_tpl_vars['msg']['title'])) ? $this->_run_mod_handler('urlencode', true, $_tmp) : urlencode($_tmp)); ?>
&fno=<?php echo $this->_tpl_vars['msg']['sender_no']; ?>
" title="回覆留言" style="line-height:43px;">回覆</a></div>
  <div class="button"><a href="msgbox_do.php?msgdel=1&mno=<?php echo $this->_tpl_vars['msg']['mno']; ?>
" title="刪除留言" style="line-height:43px;">刪除</a></div>
  <table border="0" cellpadding="3" cellspacing="0" style="border-collapse: collapse" align="center" width="100%">
    <tr>
      <td width="75">寄件者：</td>
      <td><?php echo $this->_tpl_vars['msg']['sender_id']; ?>
(<?php echo $this->_tpl_vars['msg']['sender_name']; ?>
)</td>
	  <td width="100"></td>
    </tr>
    <tr>
      <td>標題：</td>
      <td><?php echo $this->_tpl_vars['msg']['title']; ?>
</td>
    </tr>
    <tr>
      <td>時間：</td>
      <td><?php echo $this->_tpl_vars['msg']['time']; ?>
</td>
    </tr>
    <tr>
 	  <td colspan="2"><hr/>
		  <?php echo $this->_tpl_vars['msg']['content']; ?>

	  </td>
    </tr>
  </table>
</div>
<div class="field_bottom"></div>
</div>