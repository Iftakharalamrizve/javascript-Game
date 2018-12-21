<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="show_date"></div>

<button type="button" id="prev">On</button>
<img src="pic_bulbon.gif" alt="">
<button type="button" id="next">Off</button>



<script>
	var on=document.getElementById('prev');
	var off=document.getElementById('next');
	var image_select= document.querySelector('img');
	on.onclick=function(){
		var mysrc=image_select.getAttribute('src');
		
		image_select.setAttribute('src','pic_bulbon.gif');
	}
	off.onclick=function(){
		var mysrc=image_select.getAttribute('src');
		image_select.setAttribute('src','pic_bulboff.gif');
	}
</script>

</body>
</html>