<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1></h1>
	<!-- <button onclick="document.getElementById('change').style='color:green'">Click</button>
	<span id="change" style="color: red">Hello Bangladesh</span> -->

<button type="button" id="click">Click</button>
	<h3 id="name"></h3>

	<script src="main.js"></script>
	<!-- <script>
		 document.getElementById("demo").innerHTML = "My First JavaScript";
		document.getElementById('demo').innerHTML=objectFuntion.calculation;
	</script> -->
	
	<div id="click"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
	
	$('#click').click(event=>{
		show(10);
	})
	function show(test){
		for(var i=1;i<=test;i++){
			console.log(i);
		}
	}
</script>

</body>
</html>