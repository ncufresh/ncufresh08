<?php /* Smarty version 2.6.18, created on 2008-11-06 16:02:21
         compiled from video_case.htm */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" type="text/css" rel="stylesheet" href="video_style.css" />
<body>
<div id="video_container">
<embed src="<?php echo $this->_tpl_vars['swf_url']; ?>
?config=%7Bembedded%3Atrue%2CbaseURL%3A%27<?php echo $this->_tpl_vars['swf_file_url']; ?>
%27%2CvideoFile%3A%27%2E%2E%2F<?php echo $this->_tpl_vars['v_url']; ?>
%27%2CinitialScale%3A%27scale%27%2CcontrolBarBackgroundColor%3A%270x<?php echo $this->_tpl_vars['control_bar_bgcolor']; ?>
%27%2CautoPlay%3A<?php echo $this->_tpl_vars['is_auto_play']; ?>
%7D" width="<?php echo $this->_tpl_vars['embed_width']; ?>
" height="<?php echo $this->_tpl_vars['embed_height']; ?>
" scale="noscale" bgcolor="<?php echo $this->_tpl_vars['swf_bgcolor']; ?>
" type="application/x-shockwave-flash" allowFullScreen="true" allowScriptAccess="always" allowNetworking="all" pluginspage="http://www.macromedia.com/go/getflashplayer">
</embed><!-- %2F-> / %2E -> . !-->

	<span class="video_info" style="text-align: left">片名: <?php echo $this->_tpl_vars['v_name']; ?>
</span>
	<span class="video_info">製片: <?php echo $this->_tpl_vars['v_maker']; ?>
</span>
	<span class="video_info">片長: <?php echo $this->_tpl_vars['v_mins']; ?>
 分 <?php echo $this->_tpl_vars['v_secs']; ?>
 秒</span>
	<span class="video_info">大小: <?php echo $this->_tpl_vars['v_size']; ?>
 KBs</span>
	<span class="video_info">觀看人次: <?php echo $this->_tpl_vars['v_count']; ?>
 人</span>
	<span class="video_info_right" style="border-top: 0px; width: 10px;">&nbsp;</span>
	<span class="video_info_right" style="border-bottom: 0px;">相關影片</span>
	<span class="video_info_right" style="border-top: 0px;"><a href="video/<?php echo $this->_tpl_vars['v_sn']; ?>
.mp4">下載影片</a></span>
	<div id="video_link">
		<?php unset($this->_sections['key']);
$this->_sections['key']['loop'] = is_array($_loop=$this->_tpl_vars['v_re']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['key']['name'] = 'key';
$this->_sections['key']['show'] = true;
$this->_sections['key']['max'] = $this->_sections['key']['loop'];
$this->_sections['key']['step'] = 1;
$this->_sections['key']['start'] = $this->_sections['key']['step'] > 0 ? 0 : $this->_sections['key']['loop']-1;
if ($this->_sections['key']['show']) {
    $this->_sections['key']['total'] = $this->_sections['key']['loop'];
    if ($this->_sections['key']['total'] == 0)
        $this->_sections['key']['show'] = false;
} else
    $this->_sections['key']['total'] = 0;
if ($this->_sections['key']['show']):

            for ($this->_sections['key']['index'] = $this->_sections['key']['start'], $this->_sections['key']['iteration'] = 1;
                 $this->_sections['key']['iteration'] <= $this->_sections['key']['total'];
                 $this->_sections['key']['index'] += $this->_sections['key']['step'], $this->_sections['key']['iteration']++):
$this->_sections['key']['rownum'] = $this->_sections['key']['iteration'];
$this->_sections['key']['index_prev'] = $this->_sections['key']['index'] - $this->_sections['key']['step'];
$this->_sections['key']['index_next'] = $this->_sections['key']['index'] + $this->_sections['key']['step'];
$this->_sections['key']['first']      = ($this->_sections['key']['iteration'] == 1);
$this->_sections['key']['last']       = ($this->_sections['key']['iteration'] == $this->_sections['key']['total']);
?>
		<a <?php if ($this->_tpl_vars['this_mday'] >= $this->_tpl_vars['v_re'][$this->_sections['key']['index']]['v_expire']): ?>
					href="video_case.php?v_sn=<?php echo $this->_tpl_vars['v_re'][$this->_sections['key']['index']]['v_sn']; ?>
"
				<?php else: ?>
					href="#" onclick="alert(' 8 月 <?php echo $this->_tpl_vars['v_re'][$this->_sections['key']['index']]['v_expire']; ?>
 號才會推出喔');return false;" style="border:1px dashed"
				<?php endif; ?> target="video_frame">
		<div style="width: 100%; height:20px;">

		<span class="video_expire">&nbsp;8 / <?php echo $this->_tpl_vars['v_re'][$this->_sections['key']['index']]['v_expire']; ?>
&nbsp;</span>
		
		</div>
		<div style="clear:both;line-height:0px;">&nbsp;</div>
		<span class="video_relative_name"><?php if ($this->_tpl_vars['this_mday'] >= $this->_tpl_vars['v_re'][$this->_sections['key']['index']]['v_expire']): ?><?php echo $this->_tpl_vars['v_re'][$this->_sections['key']['index']]['v_name']; ?>
<?php else: ?>近期推出<?php endif; ?></span>
		
		</a>
		<?php endfor; endif; ?>
		<div style="clear:both;line-height: 10px;text-align: center;">&nbsp;</div>
	</div>
</div>
</body>
