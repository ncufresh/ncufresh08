<?php /* Smarty version 2.6.18, created on 2009-01-17 18:04:38
         compiled from showStatics.tpl.php */ ?>
<table class="table"> 
<tr><td>
	<div align="center"><img src="templates/images/Topic.gif"/></div>
		<blockquote>
   	 		<blockquote>
      			<?php echo $this->_tpl_vars['topic']; ?>

    		</blockquote>
  		</blockquote>
  	<div align="center"><img src="templates/images/info.gif"/></div>
  		<blockquote>
    		<blockquote>
      			<p><?php echo $this->_tpl_vars['description']; ?>
        </p>
                <?php if ($this->_tpl_vars['anschk'] == 1): ?><p align="center">請確實填寫問卷內容</p><?php endif; ?>
    		</blockquote>
  		</blockquote>
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
?></br>
</p><br>
<table width="600" border="0">
  <tr>
    <td><div class="question">
    		<div style="float:left">問題<?php echo $this->_sections['qst']['iteration']; ?>
 : <?php echo $this->_tpl_vars['questions'][$this->_sections['qst']['index']]; ?>
 
    		<?php if ($this->_tpl_vars['type'][$this->_sections['qst']['index']] == 'radio'): ?>
    			<單選題>
    		<?php elseif ($this->_tpl_vars['type'][$this->_sections['qst']['index']] == 'checkbox'): ?>
    			<多選題>
    		<?php endif; ?>
			</div>
        </div>
		<div style="float:right"><a href="./showStatics.php?sno=<?php echo $this->_tpl_vars['sno']; ?>
&qis=<?php echo $this->_sections['qst']['iteration']; ?>
">顯示詳細資料</a> </div>
    <br/>
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
    	<div class="chooses">選項<?php echo $this->_sections['choose']['iteration']; ?>
:
        	<?php if ($this->_tpl_vars['choose'][$this->_sections['qst']['index']][$this->_sections['choose']['index']] != 'others'): ?>
          		<?php echo $this->_tpl_vars['choose'][$this->_sections['qst']['index']][$this->_sections['choose']['index']]; ?>
&nbsp;&nbsp;出現&nbsp;&nbsp;
          		<?php if ($this->_tpl_vars['anscount'][$this->_sections['qst']['iteration']][$this->_sections['choose']['iteration']] != 0): ?>
          			<?php echo $this->_tpl_vars['anscount'][$this->_sections['qst']['iteration']][$this->_sections['choose']['iteration']]; ?>

          		<?php else: ?>0
            	<?php endif; ?>&nbsp;&nbsp;次
          	<?php elseif ($this->_tpl_vars['choose'][$this->_sections['qst']['index']][$this->_sections['choose']['index']] == 'others'): ?>其他&nbsp;&nbsp;出現&nbsp;&nbsp;
          <?php if ($this->_tpl_vars['othercount'][$this->_sections['qst']['iteration']] != 0): ?>
          <?php echo $this->_tpl_vars['othercount'][$this->_sections['qst']['iteration']]; ?>

          <?php else: ?>0<?php endif; ?>&nbsp;&nbsp;次<?php endif; ?>
          </div><br/><?php endfor; endif; ?> </td>

  </tr>
</table>

<?php endfor; endif; ?><br /><br /><br />

  <a href="index.php"><input type="button" name="button" id="button" value="上一頁"></a>
</td></tr></table>