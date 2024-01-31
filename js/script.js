let loginForm = document.querySelector('.login-form-container');

document.querySelector('#login-btn').onclick = () =>{
	loginForm.classList.toggle('active');
}

document.querySelector('#close-login-btn').onclick = () =>{
	loginForm.classList.remove('active');
}

let infoForm = document.querySelector('.info-form-container');

document.querySelector('#info-btn').onclick = () =>{
	infoForm.classList.toggle('active');
}

document.querySelector('#close-info-btn').onclick = () =>{
	infoForm.classList.remove('active');
}

let vacForm = document.querySelector('.vac-form-container');

document.querySelector('#vac-btn').onclick = () =>{
	vacForm.classList.toggle('active');
}

document.querySelector('#close-vac-btn').onclick = () =>{
	vacForm.classList.remove('active');
}

let atkForm = document.querySelector('.atk-form-container');

document.querySelector('#atk-btn').onclick = () =>{
	atkForm.classList.toggle('active');
}

document.querySelector('#close-atk-btn').onclick = () =>{
	atkForm.classList.remove('active');
}

// bed facility section
function addButton() {
	var req = document.getElementById('request');
	var value = req.innerHTML;

	++value;

	document.getElementById('request').innerHTML = value;
}

function deleteButton() {
	var req = document.getElementById('request');
	var value = req.innerHTML;

	--value;

	document.getElementById('request').innerHTML = value;
}