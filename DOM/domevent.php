<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="bangladesh">
	<p>My country name is <b>Bangladesh</b> </p>
</div>
<div>
	<p id="america">My country name is America</p>
</div>
<input type="text" class="eventclass">
inpu
<script type="text/javascript">
	let country1=document.querySelector('#bangladesh>p>b')
	console.log(country1)
	country1.addEventListener("click",e=>console.log(e))

	
</script>
</body>
</html>