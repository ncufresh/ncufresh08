<?php /* Smarty version 2.6.18, created on 2009-07-28 00:09:34
         compiled from editSheet.tpl.php */ ?>
<table class="table"><tr><td>
<div class="question">第<?php echo $this->_tpl_vars['sheetNum']; ?>
份問卷 - <?php echo $this->_tpl_vars['topic']; ?>
</div>
<br/><div class="question">問卷說明：<?php echo $this->_tpl_vars['description']; ?>
</div> 
<br/> 
</a><div class="question">
<a href="<?php echo $this->_tpl_vars['newQuestLink']; ?>
">
<input type="button"  value="新增問題" />
  </a>
<a href="addSheet.php?sno=<?php echo $this->_tpl_vars['sheetNum']; ?>
">
<input type="button" value="確認送出"/>
  </a>
<a href="./index.php">
<input type="button" value="以後再作" />
  </a>
<a href="giveupSheet.php?sno=<?php echo $this->_tpl_vars['sheetNum']; ?>
">
<input type="button" value="放棄了放棄了，砍掉吧._.\~/" /> 
  </a> </div>
<br/>
<?php unset($this->_sections['qst']);
$this->_sections['qst']['name'] = 'qst';
$this->_sections['qst']['loop'] = is_array($_loop=$this->_tpl_vars['questions']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['qst']['show'] = true;
$this->_sections['qst']['max'] = $this->_sections['qst']['loop'];
$this->_sections['qst']['step'] = 1;
$this->_sections['qst']['start'] = $this->_sections['qst']['step'] > 0 ? 0 : $this->_sections['qst']['loop']-1;
if ($this->_sections['qst']['show']) {
    $this->_sections['qst']['total'] = $this->_sections['qst']['loop'];
    if ($this->_sections['qst']['total'] == 0)
        $this->_sections['qst']['show'] = false;
} else
    $this->_sections['qst']['total'] = 0;
if ($this->_sections['qst']['show']):

            for ($this->_sections['qst']['index'] = $this->_sections['qst']['start'], $this->_sections['qst']['iteration'] = 1;
                 $this->_sections['qst']['iteration'] <= $this->_sections['qst']['total'];
                 $this->_sections['qst']['index'] += $this->_sections['qst']['step'], $this->_sections['qst']['iteration']++):
$this->_sections['qst']['rownum'] = $this->_sections['qst']['iteration'];
$this->_sections['qst']['index_prev'] = $this->_sections['qst']['index'] - $this->_sections['qst']['step'];
$this->_sections['qst']['index_next'] = $this->_sections['qst']['index'] + $this->_sections['qst']['step'];
$this->_sections['qst']['first']      = ($this->_sections['qst']['iteration'] == 1);
$this->_sections['qst']['last']       = ($this->_sections['qst']['iteration'] == $this->_sections['qst']['total']);
?></br></p><br>
		<div><div class="question">問題<?php echo $this->_sections['qst']['iteration']; ?>
: <?php echo $this->_tpl_vars['questions'][$this->_sections['qst']['index']]; ?>
   
    <?php if ($this->_tpl_vars['type'][$this->_sections['qst']['index']] == 'radio'): ?>  <單選題> <?php else: ?> <多選題> <?php endif; ?></div>
    <a href="editQuestion.php?sno=<?php echo $this->_tpl_vars['sheetNum']; ?>
&sig=<?php echo $this->_sections['qst']['iteration']; ?>
"><input type="button" value="編輯問題" /></a> 
    <a href="delQuestion.php?sno=<?php echo $this->_tpl_vars['sheetNum']; ?>
&sig=<?php echo $this->_sections['qst']['iteration']; ?>
"><input type="button" value="刪除問題" /></a>
       <?php unset($this->_sections['choose']);
$this->_sections['choose']['name'] = 'choose';
$this->_sections['choose']['loop'] = is_array($_loop=$this->_tpl_vars['choose'][$this->_sections['qst']['index']]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['choose']['show'] = true;
$this->_sections['choose']['max'] = $this->_sections['choose']['loop'];
$this->_sections['choose']['step'] = 1;
$this->_sections['choose']['start'] = $this->_sections['choose']['step'] > 0 ? 0 : $this->_sections['choose']['loop']-1;
if ($this->_sections['choose']['show']) {
    $this->_sections['choose']['total'] = $this->_sections['choose']['loop'];
    if ($this->_sections['choose']['total'] == 0)
        $this->_sections['choose']['show'] = false;
} else
    $this->_sections['choose']['total'] = 0;
if ($this->_sections['choose']['show']):

            for ($this->_sections['choose']['index'] = $this->_sections['choose']['start'], $this->_sections['choose']['iteration'] = 1;
                 $this->_sections['choose']['iteration'] <= $this->_sections['choose']['total'];
                 $this->_sections['choose']['index'] += $this->_sections['choose']['step'], $this->_sections['choose']['iteration']++):
$this->_sections['choose']['rownum'] = $this->_sections['choose']['iteration'];
$this->_sections['choose']['index_prev'] = $this->_sections['choose']['index'] - $this->_sections['choose']['step'];
$this->_sections['choose']['index_next'] = $this->_sections['choose']['index'] + $this->_sections['choose']['step'];
$this->_sections['choose']['first']      = ($this->_sections['choose']['iteration'] == 1);
$this->_sections['choose']['last']       = ($this->_sections['choose']['iteration'] == $this->_sections['choose']['total']);
?>	
            <div>
            	<div class="chooses">選項<?php echo $this->_sections['choose']['iteration']; ?>
:<?php if ($this->_tpl_vars['choose'][$this->_sections['qst']['index']][$this->_sections['choose']['index']] != 'others'): ?>
          		<input name="<?php echo $this->_tpl_vars['chsname'][$this->_sections['qst']['index']]; ?>
" type="<?php echo $this->_tpl_vars['type'][$this->_sections['qst']['index']]; ?>
" value="<?php echo $this->_tpl_vars['choose'][$this->_sections['qst']['index']][$this->_sections['choose']['index']]; ?>
"><?php echo $this->_tpl_vars['choose'][$this->_sections['qst']['index']][$this->_sections['choose']['index']]; ?>

          		<?php elseif ($this->_tpl_vars['choose'][$this->_sections['qst']['index']][$this->_sections['choose']['index']] == 'others'): ?>
          			<input type="<?php echo $this->_tpl_vars['type'][$this->_sections['qst']['index']]; ?>
" name="<?php echo $this->_tpl_vars['chsname'][$this->_sections['qst']['index']]; ?>
" value="otherson">其他：</div>
          			<textarea name="ans<?php echo $this->_sections['qst']['iteration']-1; ?>
-TEXT"></textarea>
          		<?php endif; ?>
				
				
			</div><br />
                <?php endfor; endif; ?>
		</div>
<?php endfor; endif; ?>



</td></tr></table>


