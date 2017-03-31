<?php /* Smarty version 2.6.18, created on 2008-11-06 15:20:50
         compiled from msg_box.htm */ ?>
<style type="text/css">
.field_content a
{
	text-decoration: none;
}
</style>

<div class="blue_back">
		<div class="field_top_top"><img src="templates/images/mailbox.gif" class="field_title" /><div class="bigfront" style="width:140px;margin: -35px 0 80px 480px;">你<?php if ($this->_tpl_vars['unreads'] == 0): ?>沒有<?php else: ?>有<?php echo $this->_tpl_vars['unreads']; ?>
封<?php endif; ?><br/><span style="margin-left:20px">未讀信件</span>
		</div>
		<div style="margin-left:95px;margin-top:-55px;"><a href="msgsend.php" title="傳送訊息">點我傳送訊息</a></div>
		</div>
<div class="field_content_bar"><div style="width:215px; float:left;color:#333;">主旨</div><div style="width:150px;float:left;color:#333">寄信人</div><div style="width:65px;float:left;color:#333;">日期</div><div style="float:left;color:#333;">刪除</div></div>
<div class="field_content_content">
<form action="msgbox_do.php?msgdel=1" method="post">
  <table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse" align="center" width="100%">
<?php unset($this->_sections['sec1']);
$this->_sections['sec1']['name'] = 'sec1';
$this->_sections['sec1']['loop'] = is_array($_loop=$this->_tpl_vars['msgs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sec1']['show'] = true;
$this->_sections['sec1']['max'] = $this->_sections['sec1']['loop'];
$this->_sections['sec1']['step'] = 1;
$this->_sections['sec1']['start'] = $this->_sections['sec1']['step'] > 0 ? 0 : $this->_sections['sec1']['loop']-1;
if ($this->_sections['sec1']['show']) {
    $this->_sections['sec1']['total'] = $this->_sections['sec1']['loop'];
    if ($this->_sections['sec1']['total'] == 0)
        $this->_sections['sec1']['show'] = false;
} else
    $this->_sections['sec1']['total'] = 0;
if ($this->_sections['sec1']['show']):

            for ($this->_sections['sec1']['index'] = $this->_sections['sec1']['start'], $this->_sections['sec1']['iteration'] = 1;
                 $this->_sections['sec1']['iteration'] <= $this->_sections['sec1']['total'];
                 $this->_sections['sec1']['index'] += $this->_sections['sec1']['step'], $this->_sections['sec1']['iteration']++):
$this->_sections['sec1']['rownum'] = $this->_sections['sec1']['iteration'];
$this->_sections['sec1']['index_prev'] = $this->_sections['sec1']['index'] - $this->_sections['sec1']['step'];
$this->_sections['sec1']['index_next'] = $this->_sections['sec1']['index'] + $this->_sections['sec1']['step'];
$this->_sections['sec1']['first']      = ($this->_sections['sec1']['iteration'] == 1);
$this->_sections['sec1']['last']       = ($this->_sections['sec1']['iteration'] == $this->_sections['sec1']['total']);
?>
    <tr>
      <td width="220"><a href="msgbox_do.php?msgread=1&mno=<?php echo $this->_tpl_vars['msgs'][$this->_sections['sec1']['index']]['mno']; ?>
" title="閱讀訊息" style="color:#1f4652;"><?php if (( $this->_tpl_vars['msgs'][$this->_sections['sec1']['index']]['status'] == 2 )): ?><b><?php echo $this->_tpl_vars['msgs'][$this->_sections['sec1']['index']]['title']; ?>
</b><?php else: ?><?php echo $this->_tpl_vars['msgs'][$this->_sections['sec1']['index']]['title']; ?>
<?php endif; ?></a></td>
      <td width="150"><a href="show_pfile.php?uno=<?php echo $this->_tpl_vars['msgs'][$this->_sections['sec1']['index']]['sender_no']; ?>
" title="使用者資料" style="color:#690;"><?php echo $this->_tpl_vars['msgs'][$this->_sections['sec1']['index']]['sender_id']; ?>
</a></td>
      <td width="70" style="color:#1f4652;"><?php echo $this->_tpl_vars['msgs'][$this->_sections['sec1']['index']]['time']; ?>
</td>
	  <!--<td><input type="checkbox" name="chk[]" value="<?php echo $this->_tpl_vars['msgs'][$this->_sections['sec1']['index']]['mno']; ?>
"/></td>-->
	  <td><a onClick="if(!confirm('確定刪除此信件?'))return false;" href="msgbox_do.php?msgdel=1&mno=<?php echo $this->_tpl_vars['msgs'][$this->_sections['sec1']['index']]['mno']; ?>
" title="刪除訊息"><img src="templates/images/p_friendminus.gif" style="border:0px;"/></a></td>
    </tr>
<?php endfor; endif; ?>
<!--	<tr>
		<td colspan="4" align="right"><input type="submit" value="刪除"/></td>
</tr>-->
  </table>
</form>
</div>
<div class="field_bottom">
      <div style="float:left; margin-left:10px;color:#2789A5;">共有 <?php echo $this->_tpl_vars['num']; ?>
 封</div>
      <div style="float:right; margin-right:10px;color:#2789A5;">頁數&nbsp;&nbsp;<?php $_from = $this->_tpl_vars['p']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pag']):
?><?php echo $this->_tpl_vars['pag']; ?>
&nbsp;&nbsp;<?php endforeach; endif; unset($_from); ?></div>
</div>
</div>