document.getElementById("contactForm").addEventListener("submit",function(e){

let name=document.getElementById("name").value.trim();
let email=document.getElementById("email").value.trim();
let subject=document.getElementById("subject").value.trim();
let message=document.getElementById("message").value.trim();

let error=document.getElementById("error");

error.textContent="";

let emailPattern=/^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

if(name==""||email==""||subject==""||message==""){
error.textContent="Please fill all fields.";
e.preventDefault();
}

else if(!email.match(emailPattern)){
error.textContent="Please enter a valid email.";
e.preventDefault();
}

});