<?php /* Smarty version 2.6.18, created on 2008-11-07 16:27:35
         compiled from elfroom.htm */ ?>
<div class="blue_back">
<div class="field_top_top">
	<img class="field_title" src="templates/images/elf.gif" />
	<div class="bigfront" style="margin: -35px 0pt 80px 480px; width: 140px;">
	你現在有 <br /><span style="margin-left:10px;"><?php echo $this->_tpl_vars['pics_num']; ?>
 隻精靈</span>
	</div>
</div>

<div style="position:relative;top:-40px;left:30px;margin-bottom:-40px;">

<?php if ($_GET['uno'] != ''): ?>
<dl id="elfroom">
<?php $_from = $this->_tpl_vars['pics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pic']):
?>
<dt id="elf<?php echo $this->_tpl_vars['pic']; ?>
"></dt>
<dd id="elf<?php echo $this->_tpl_vars['pic']; ?>
def"><a onclick="return false;" href="#"><span><?php echo $this->_tpl_vars['pic']; ?>
</span></a></dd>
<?php endforeach; endif; unset($_from); ?>
</dl>
<?php else: ?>
<dl id="elfroom">
<?php $_from = $this->_tpl_vars['pics']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['pic']):
?>
<dt id="elf<?php echo $this->_tpl_vars['pic']; ?>
"></dt>
<dd id="elf<?php echo $this->_tpl_vars['pic']; ?>
def"><a onclick="return confirm('你確定要放生 <?php echo $this->_tpl_vars['pic']; ?>
 ?');" href="letitgo.php?pic=<?php echo $this->_tpl_vars['pic']; ?>
"><span><?php echo $this->_tpl_vars['pic']; ?>
</span></a></dd>
<?php endforeach; endif; unset($_from); ?>
</dl>	
<?php endif; ?>

</div>

</div>