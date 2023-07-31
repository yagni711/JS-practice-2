function introduction(){
	console_log(1);
	var a=document.getElementById('entername').value;
	var b=document.getElementById('entersurname').value;
	var c=document.getElementById('enterlocation').value;
    
      document.getElementById('name_surname').innerHTML= a + ' ' + b;
	    document.getElementById('location').innerHTML=c;
}
function changeStyle(){
  var a=document.getElementById('entertextcolor').value;
  var b=document.getElementById('enterbgcolor').value;

  document.getElementById('h1_text').style.color = a;
  document.getElementById('h1_text').style.backgroundColor = b;
}
function bodyColor(){
  var a=document.getElementById('enterbodycolor').value;
 
  document.body.style.backgroundColor = a;
}