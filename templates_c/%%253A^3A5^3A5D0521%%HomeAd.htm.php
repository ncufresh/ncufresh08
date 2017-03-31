<?php /* Smarty version 2.6.18, created on 2010-07-01 23:25:14
         compiled from block/HomeAd.htm */ ?>
<style type="text/css">

.HomeAd1 {
	width: 136px;
	height: 40px;
	margin-bottom: 5px;
}


</style>
<?php unset($this->_sections['HomeAd']);
$this->_sections['HomeAd']['name'] = 'HomeAd';
$this->_sections['HomeAd']['loop'] = is_array($_loop=$this->_tpl_vars['block']['img']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['HomeAd']['show'] = true;
$this->_sections['HomeAd']['max'] = $this->_sections['HomeAd']['loop'];
$this->_sections['HomeAd']['step'] = 1;
$this->_sections['HomeAd']['start'] = $this->_sections['HomeAd']['step'] > 0 ? 0 : $this->_sections['HomeAd']['loop']-1;
if ($this->_sections['HomeAd']['show']) {
    $this->_sections['HomeAd']['total'] = $this->_sections['HomeAd']['loop'];
    if ($this->_sections['HomeAd']['total'] == 0)
        $this->_sections['HomeAd']['show'] = false;
} else
    $this->_sections['HomeAd']['total'] = 0;
if ($this->_sections['HomeAd']['show']):

            for ($this->_sections['HomeAd']['index'] = $this->_sections['HomeAd']['start'], $this->_sections['HomeAd']['iteration'] = 1;
                 $this->_sections['HomeAd']['iteration'] <= $this->_sections['HomeAd']['total'];
                 $this->_sections['HomeAd']['index'] += $this->_sections['HomeAd']['step'], $this->_sections['HomeAd']['iteration']++):
$this->_sections['HomeAd']['rownum'] = $this->_sections['HomeAd']['iteration'];
$this->_sections['HomeAd']['index_prev'] = $this->_sections['HomeAd']['index'] - $this->_sections['HomeAd']['step'];
$this->_sections['HomeAd']['index_next'] = $this->_sections['HomeAd']['index'] + $this->_sections['HomeAd']['step'];
$this->_sections['HomeAd']['first']      = ($this->_sections['HomeAd']['iteration'] == 1);
$this->_sections['HomeAd']['last']       = ($this->_sections['HomeAd']['iteration'] == $this->_sections['HomeAd']['total']);
?>
  <div class="HomeAd1"><a target="_blank" href="<?php echo $this->_tpl_vars['block']['img'][$this->_sections['HomeAd']['index']]['url']; ?>
"><img border="0" src="<?php echo $this->_tpl_vars['block']['img'][$this->_sections['HomeAd']['index']]['img']; ?>
" alt=""/></a></div>
<?php endfor; endif; ?>