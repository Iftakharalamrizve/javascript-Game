
//make object which inherite root object form js library 
var first_object={
	element1:10,
	element2:30,
	element3:"Rizve",
}

// object element push system 
first_object.element4=false;
//object elememt delete system
delete first_object.element3;

// console.log(first_object);


//object inheritance 

//new object create which inherite previous objet first_object
var inherite_object=Object.create(first_object);
inherite_object.element5="Daffodil International University ";//this property is only for inherite_object 
//check property  reminder this must be you have keep quatetion
 console.log(inherite_object.hasOwnProperty('element5'));
