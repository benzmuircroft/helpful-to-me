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
	</style>
</head><body>




<script>

  $(function(){

    $('.inp')
			.bind('textchange keydown keyup',function(e){
				//var up=(e.type==='keyup')?1:0;
				if(e.which!==13){
					if($(this).hasClass('email')){
						if(em.test($(this).text())){//email was ok
							$(this).css({'color':'#17b917'});
							if($('.streamtest').text().indexOf($('.streamtest').attr('water'))!==-1){
								session();
								loaduser($(this).text());
								}
							else if(($('.streamtest').text().indexOf($('.streamtest').attr('water'))===-1)&&
							   ($('.streamtest').text().indexOf('http')!==-1)&&
							   ($('.streamtest').text().indexOf(';stream')!==-1||$('.streamtest').text().toLowerCase().indexOf('mp3')!==-1||$('.streamtest').text().indexOf(':')!==-1)
							   ){////radio was complete lets test stream
								session();
								new_radio($('.streamtest').text());
								}}
						else{
							$(this).css({'color':'#f41212'});//incomplete bad email
							}}
					else if($(this).hasClass('streamtest')){
						if(!em.test($('.email').text())){
							$('.email').css({'color':'#f41212'});//email is bad
							}
						else{
							if(($(this).text().indexOf($(this).attr('water'))===-1)&&
							   ($(this).text().indexOf('http')!==-1)&&
							   ($(this).text().indexOf(';stream')!==-1||$(this).text().toLowerCase().indexOf('mp3')!==-1||$(this).text().indexOf(':')!==-1)
							   ){
								session();
								new_radio($(this).text());//lets test stream
								}}}
				}else{/*13*/return false;}})
			.bind('click',function(){
				$(this).css({'color':'#000'});
				if($(this).text().indexOf($(this).attr('water'))!==-1){
					$(this).text('');
					var _this=this;
					setTimeout(function(){enterinp(_this);},150);//was 150
					}})
			.bind('blur',function(){
				if($(this).text().match(/^\s*$/)){//spaces
					$(this).css({'color':$(this).attr('wcol')});
					$(this).text($(this).attr('water'))
					}})
			.bind('paste',function(){
				$(this).css({'color':'#000'});
				if($(this).text().indexOf($(this).attr('water'))!==-1){$(this).text('');});
				});
			function enterinp(_this){$(_this).trigger('click');}
			
			
			});
	</script>
			
</body></html>
