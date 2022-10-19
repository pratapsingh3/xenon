const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});

function validation()  
{  
	var id=document.myForm.femail.value;  
	var ps=document.myForm.fpass.value;  
	if(id.length=="" && ps.length=="") {  
		alert("User Name and Password fields are empty");  
		return false;  
	}  
	else  
	{  
		if(id.length=="") {  
			alert("User Name is empty");  
			return false;  
		}   
		if (ps.length=="") {  
		alert("Password field is empty");  
		return false;  
		}  
	}                             
}  