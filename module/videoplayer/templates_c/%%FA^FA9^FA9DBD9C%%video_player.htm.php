<?php /* Smarty version 2.6.18, created on 2008-11-06 15:15:41
         compiled from block/video_player.htm */ ?>
<!-- video player plugin starts !-->
<script type="text/javascript">
function open_video(v_sn){
	document.getElementById("video_bg").style.display = "block";
	document.getElementById("video_frame").src="<?php echo $this->_tpl_vars['block']['dirname']; ?>
/"+"video_case.php?v_sn="+v_sn;
}
function close_video(){
	document.getElementById("video_frame").src="";
	document.getElementById("video_bg").style.display = "none";
}
</script>
<div id="video_bg">
	<div id="video_win">
		<div id="video_title"><span class="video_title">影音導覽</span><a href="#" onclick="close_video();return false;" class="delete_box">&nbsp;</a></div>
		<iframe 
			id="video_frame" 
			name="video_frame" 
			frameborder="0" 
			width="720" 
			height="710" 
			src=""  
			scrolling="no"
		></iframe>
	</div>
</div>
<!-- video player plugin ends !-->
