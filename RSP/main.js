function myFunction(value){
  var he= Math.floor(Math.random() * (3 - 1) + 1);
  var you =value;
  //add class 
  var you_class=document.querySelector('#you');
  you_class.className='';
  if(you==1){
    you_class.classList.add("fa");
    you_class.classList.add("fa-hand-rock-o");
  }else if(you==2){
    you_class.classList.add("fa");
    you_class.classList.add("fa-scissors");
  }else if(you == 3){
    you_class.classList.add("fa");
    you_class.classList.add("fa-hand-paper-o");
  }

  var he_class=document.querySelector('#he');
  he_class.className='';
  if(he==1){
    he_class.classList.add("fa");
    he_class.classList.add("fa-hand-rock-o");
  }else if(he==2){
    he_class.classList.add("fa");
    he_class.classList.add("fa-scissors");
  }else if(he == 3){
    he_class.classList.add("fa");
    he_class.classList.add("fa-hand-paper-o");
  }






  if(you==3 && he==1 || you==2 && he==3 || you==1 && he==2){

    var select_button=document.querySelector('#result');
    select_button.className='';
    select_button.innerHTML="";
    select_button.classList.add("text-center");
    select_button.classList.add("text-success");
    select_button.innerHTML="You WIn";
  }else if(you==3 && he==2 || you==2 && he==1 || you==1 && he==3){
    var select_button=document.querySelector('#result');
    select_button.className='';
    select_button.innerHTML="";
    select_button.classList.add("text-center");
    select_button.classList.add("text-danger");
    select_button.innerHTML="He  WIn";
  }else{
    var select_button=document.querySelector('#result');
    select_button.className='';
    select_button.innerHTML="";
    select_button.classList.add("text-center");
    select_button.classList.add("text-warning");
    select_button.innerHTML="Draw";
  }

}