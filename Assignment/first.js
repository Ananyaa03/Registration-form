function formvalidation()
{
     let x = document.forms["myForm"]["fname"].value;
     let y = document.forms["myForm"]["email"].value;
     if (x == "") {
       alert("Name must be filled out");
       return false;
     }

     
}
function Validatemobile(){
  var mobile=document.getElementById("number").value;
var rel3=/^\d{3}-\d{3}-\d{4}$/;

if(rel3.test(number)){
   document.getElementById("mobileprompt").style.color="green";
 document.getElementById("mobileprompt").innerHTML="<strong>valid</strong>";
 return true;
 }
else{
   document.getElementById("mobileprompt").style.color="red";
 document.getElementById("mobileprompt").innerHTML="<strong>use xxx-xxx-xxxx format</strong>";
 return false;
 } 
}

function checkEmail() {

  var email = document.getElementById('email');
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

  if (!filter.test(email.value)) {
  alert('Please provide a valid email address');
  email.focus;
  return false;
}
}

function checkAge(){
  var age = +document.getElementById('age').value;

if ( !( age >= 18 && age<= 65 ) ){

        alert("Your age should be between 18 to 65");
        return false;
}

return true;
}
