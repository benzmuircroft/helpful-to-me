<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="_S/jquery.js"></script>
	<title>DEVICE RIM</title>
	<style>
		body{
			margin: 0px;
			overflow: hidden;
			}
		#rim{
			position: relative;
			overflow: auto;
			}
	</style>
</head><body>
	
	
	<div id="rim">
		<div style="background: #33a4ff;position: absolute;width: 10px;height: 10px;top: 0px;left: 0px;"></div>
		<div style="background: #33a4ff;position: absolute;width: 10px;height: 10px;top: 0px;right: 0px;"></div>
		<div style="background: #33a4ff;position: absolute;width: 10px;height: 10px;bottom: 0px;left: 0px;"></div>
		<div style="background: #33a4ff;position: absolute;width: 10px;height: 10px;bottom: 0px;right: 0px;"></div>
	</div>
	
	
	<script>
		$(function(){
			function rim(){
				$('#rim').css({'width':$(window).width()+'px','height':$(window).height()+'px'});
				return;
				}
			$(window).bind('resize',function(){rim();});
			$(window).trigger('resize');
			});
	</script>
	
	
	
</body></html>
