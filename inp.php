<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="_S/jquery.js"></script>
	<title>.inp</title>
	<style>
		body{
			margin: 0px;
			overflow: hidden;
			}
		.inp{
        		white-space: nowrap;
        		overflow: hidden;
    			} 
    		.inp br{
        		display:none;
    			}
    		.inp * {
        		display:inline;
        		white-space:nowrap;
    			}
	</style>
</head><body>

	<div class="inp email" contenteditable="plaintext-only" style="background: #FFF;height: 14px;line-height: 14px;width: 593px;padding: 5px;text-align: center;margin-bottom: 10px;color: #CCC;" water="Your e-mail address for identification" wcol="#CCC">
		Your e-mail address for identification
	</div>


	<script>
	$(function(){
		$('.inp')
		.bind('textchange keydown keyup',function(e){
			if(e.which!==13){//return
				if($(this).hasClass('email')){}
				else if($(this).hasClass('???')){}
				}
			else{/*13*/return false;}})
		.bind('click',function(){
			$(this).css({'color':'#000'});
			if($(this).text().indexOf($(this).attr('water'))!==-1){
				$(this).text('');//cursor is kicked out!
				var _this=this;
				setTimeout(function(){inp(_this);},150);//jump cursor back in
				}})
		.bind('blur',function(){
			if($(this).text().match(/^\s*$/)){//empty or spaces
				$(this).css({'color':$(this).attr('wcol')});
				$(this).text($(this).attr('water'));
				}})
		.bind('paste',function(){
			$(this).css({'color':'#000'});
			if($(this).text().indexOf($(this).attr('water'))!==-1){
				$(this).text('');
				}});
		function inp(_this){$(_this).trigger('click');}
		});//ready
	</script>
			
</body></html>
