<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<script type="text/javascript">
		var person = {
		  name: ['Bob', 'Smith'],
		  age: 32,
		  gender: 'male',
		  interests: ['music', 'skiing'],
		  bio: function() {
		    console.log(this.name[0] + ' ' + this.name[1] + ' is ' + this.age + ' years old. He likes ' + this.interests[0] + ' and ' + this.interests[1] + '.');
		  },
		  greeting: function() {
		    console.log('Hi! I\'m ' + this.name[0] + '.');
		  }
		};

//push any element 
		person.roll=8998;
		//remove any element 
		delete person.bio;
		
		console.log(person);
		person.greeting()


	</script>
</body>
</html>