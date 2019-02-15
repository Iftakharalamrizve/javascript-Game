//this function return a objet if any function return a object when this function start camel case CreateMan this is standard 

//system 1
function CreateMan(name,age,color){
	return {
		name:name,
		age:age,
		color:color,
	}
}

CreateMan();

//system 2
//this function 
function CreateMan(name,age,color){
	return {
		name,
		age,
		color,
	}
}

CreateMan();