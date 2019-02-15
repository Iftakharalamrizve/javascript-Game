<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div id="test">
	<input type="text" class="eventadd">
	
</div>
<script type="text/javascript">
	let test=document.querySelector('#test')
	//add any item 
	test.innerHTML=test.innerHTML+"<span>no</span>"
	let store_add_selector=document.querySelector('#test>span')
	store_add_selector.addEventListener("click",e=>store_add_selector.innerHTML="")

	//create div use document
	var creatediv=document.createElement('div')
	creatediv.style.color="#f00"//set cior  for div text
	creatediv.innerHTML="Hello word"//set content for div
	let selector=document.querySelector('body')
	selector.appendChild(creatediv)	//add elemnet but its remove autometicly bcz this element append another time
	test.appendChild(creatediv)	//add elemnet
	test.removeChild(creatediv//remove child)

</script>
</body>
</html>