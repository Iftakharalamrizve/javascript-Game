<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>To Do project</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="row mt-5">
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<input type="text" id="first" class="form-control border-green">
		</div>
		<div class="col-md-4">
			<input type="text" id="second" class="form-control border-green">
		</div>
		<div class="col-md-2">
			<button id="send" type="button" class="btn btn-success btn-small">Send</button>
		</div>
		<div class="col-md-1"></div>
	</div>

	<div class="row mt-5">
		<div class="col-md-1"></div>
		<div class="col-md-4">
			<div class="first_data">
				
			</div>
		</div>
		<div class="col-md-4">
			<div class="second_data"></div>
		</div>
		<div class="col-md-2">
			
		</div>
		<div class="col-md-1"></div>
	</div>





	<script type="text/javascript">
		let firstSelector=document.querySelector('#first');
		let secondtSelector=document.querySelector('#second');
		let first_data_selector=document.querySelector('.first_data');
		let second_data_selector=document.querySelector('.second_data');
		// let sendSelector=document.querySelector('send');
		let firstarr=[];
		let secondarr=[];
		function store(firstpara,secondpara){
			//use foreach for first parameter array 
			//list emplty
			first_data_selector.innerHTML="";
			firstpara.forEach(single_data=>{
				//create li for append first_data_selector
				li_single=document.createElement('li');
				li_single.innerHTML=single_data;
				first_data_selector.appendChild(li_single);
			})
				//list emplty
				second_data_selector.innerHTML="";
			secondpara.forEach(single_data_second=>{
				
				//create li for append first_data_selector
				li_single_second=document.createElement('li');
				li_single_second.innerHTML=single_data_second;
				second_data_selector.appendChild(li_single_second);
			})
		}

		//add eventlistener
		let send=document.querySelector('#send');
		send.addEventListener('click',e=>{

			//value recive 
			firstarr.push(firstSelector.value);
			secondarr.push(secondtSelector.value);
			// console.log(e);
			console.log(firstarr);
			console.log(secondarr);
			//empty first and second input box after click 
			firstSelector.value="";
			secondtSelector.value="";

			//call store function for pass 2 array 
			store(firstarr,secondarr);

		})



		//
	</script>
</body>
</html>