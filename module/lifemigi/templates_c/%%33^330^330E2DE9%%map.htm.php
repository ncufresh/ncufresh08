<?php /* Smarty version 2.6.18, created on 2010-07-01 23:40:16
         compiled from map.htm */ ?>
<script type="text/javascript">
var sUserAgent = navigator.userAgent;  
var isIE = sUserAgent.indexOf("compatible") > -1   
	&& sUserAgent.indexOf("MSIE") > -1;  

var isIE6 = false;  

if (isIE) 
{  
	var reIE = new RegExp("MSIE (\\d+\\.\\d+);");  
	reIE.test(sUserAgent);  
	var fIEVersion = parseFloat(RegExp["$1"]);  

	isIE6 = (fIEVersion >= 6.0 && fIEVersion < 7.0);  
} 

function open_map(no)
{
	var parms = $H({'no': no, 'ajax': 1}).toQueryString();
	new Ajax.Request('<?php echo $this->_tpl_vars['currconfig']->url; ?>
/module/lifemigi/map.php', {method: 'get', parameters: parms, onComplete: show_map});

	$('container').style.height='0px';
	$('container').style.overflow='hidden';
	
	if(isIE6) 
	{
		$('map').style.height=document.documentElement.offsetHeight;
		$('map').style.width=document.body.offsetWidth+'px';
	}
	
	return false;
}
function show_map(req)
{
	$('map').style.display='block';
	$('map_content').innerHTML = req.responseText;
}
function close_map()
{
	$('container').style.height='auto';
	$('map').style.display='none';
}
</script>
<style>
#map { position: absolute; width: 100%; min-height: 100%; background: black; top: 0; left: 0; z-index: 2000; filter:alpha(opacity=90); -moz-opacity:0.9; opacity: 0.9; }
#map_content { margin: 10px auto; text-align: center; }
</style>
<div id="map" style="display:none" onclick="close_map()"><div id="map_content"></div></div>