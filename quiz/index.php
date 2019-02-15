<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quiz Test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script type="text/javascript" src="question.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-md-12">
			<h3 class="text-center mt-5">Online Quiz </h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h4 class="text-center">Total Quiz = 10</h4>
			<p class="text-center">Every Question Have 1 Marks</p>
		</div>
		<div class="col-md-6">
			<h4>Total Mark=<span id="mark"></span></h4>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="question_div">
				
			</div>
		<script>
			var speach=document.querySelector('.question_div');
				for(let single_question in setQ)
				{
				  	var question=`<h5>`+setQ[single_question].question+`</h5>`;
				  	document.write(question);
					for(var single_option in  setQ[single_question].option){
						var set_value = (single_option == setQ[single_question].answer) ? "1": "0";
						var every_question=setQ[single_question].option[single_option];
						var every_option=`
						<div>
					        <input type="radio" onclick="handleClick(`+single_question+`,`+set_value+`);" name="question`+single_question+`"
					         value="`+set_value+`" 

					         />
					        <label>`+every_question+`</label>
					    </div>
						`;
						document.write(every_option);
					}
					
				}
		</script>
			
		</div>
		<div class="col-md-3"></div>
	</div>

	<script>
		var result={};
		var handleClick=(question_number,value)=>{
			var question_number=question_number.toString();
			result[question_number] = value;
		}

		var sum=0;
		for(var every in result){
		  sum = sum+result[every];
		}
		var select_mark=document.querySelector('#mark');
		select_mark.innerHTML=sum;
	</script>
</body>
</html>