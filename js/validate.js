function save(event)
{
	event.preventDefault();

	if(validateSignIn()) {
        return true;
	}

    if(validatePersonalInfo()) {
        return true;
	}

    if(validateVaccinatedInfo()) {
        return true;
	}

    if(validateAtkResultInfo()) {
        return true;
	}

    return false;
}

// Sign in
function validateSignIn() {
    if(! userName()) {
        return false;
    }

    if(! passWord()) {
        return false;
    }

    return true;
}

function userName() {
    var userName = document.getElementById("username").value;
	
    if(! userName) {
        alert("Enter your username/student id");
        return false;
    }

    if(isNaN(userName)) {
        alert("Enter your username/student id as a number");
        return false;
    }

    if(userName.length != 10) {
        alert("Enter your username only 10 digits");
        return false;
    }

    return true;
}

function passWord() {
    var passWord = document.getElementById("password").value;
	
    if(! passWord) {
        alert("Enter your password");
        return false;
    }

    if(isNaN(passWord)) {
        alert("Enter your password as a number");
        return false;
    }

    if(passWord.length != 13) {
        alert("Enter your password only 13 digits");
        return false;
    }

    return true;
}

// Personal Info
function validatePersonalInfo() {
	if(! firstName()) {
        return false;
    }

    if(! lastName()) {
        return false;
    }

    if(! sex()) {
        return false;
    }

    if(! phoneNum()) {
        return false;
    }

    if(! citizenID()) {
        return false;
    }

    if(! houseNo()) {
        return false;
    }

    if(! soi()) {
        return false;
    }

    if(! moo()) {
        return false;
    }

    if(! road()) {
        return false;
    }

    if(! subDistrict()) {
        return false;
    }

    if(! district()) {
        return false;
    }

    if(! province()) {
        return false;
    }

    if(! postalCode()) {
        return false;
    }

    return true;
}

function firstName() {
	var firstName = document.getElementById("first_name").value;
	
    if(! firstName) {
        alert("Enter your first name");
        return false;
    }

	return true;
}

function lastName() {
    var lastName = document.getElementById("last_name").value;
    
    if(! lastName) {
        alert("Enter your last name");
        return false;
    }

    return true;
}

function sex() {
    var sex = document.getElementById("sex").value;

    if(sex == 'choose one of available options') {
        alert("select your sex");
        return false;
    }

    return true;
}

function phoneNum() {
    var phoneNum = document.getElementById("phone_number").value;

    if(! phoneNum) {
        alert("Enter your phone number");
        return false;
    }

    if(isNaN(phoneNum)) {
        alert("Enter your phone number as a number");
        return false;
    }

    if(phoneNum.length != 10) {
        alert("Enter your phone number only 10 digits");
        return false;
    }

    return true;
}

function citizenID() {
    var citizenID = document.getElementById("citizen_id").value;

    if(! citizenID) {
        alert("Enter your Identification number or Citizen ID");
        return false;
    }

    if(isNaN(citizenID)) {
        alert("Enter your Identification number or Citizen ID as a number");
        return false;
    }

    if(citizenID.length != 13) {
        alert("Enter your Identification number or Citizen ID only 13 digits");
        return false;
    }

    return true;
}

function houseNo() {
    var houseNo = document.getElementById("house_no").value;

    if(! houseNo) {
        alert("Enter your house no.");
        return false;
    }

    return true;
}

function soi() {
    var soi = document.getElementById("soi").value;

    if(! soi) {
        alert("Enter your soi");
        return false;
    }

    return true;
}

function moo() {
    var moo = document.getElementById("moo").value;

    if(! moo) {
        alert("Enter your moo");
        return false;
    }

    return true;
}

function road() {
    var road = document.getElementById("road").value;

    if(! road) {
        alert("Enter your road");
        return false;
    }

    return true;
}

function subDistrict() {
    var subDistrict = document.getElementById("sub_district").value;

    if(! subDistrict) {
        alert("Enter your sub-district");
        return false;
    }

    return true;
}

function district() {
    var district = document.getElementById("district").value;

    if(! district) {
        alert("Enter your district");
        return false;
    }

    return true;
}

function province() {
    var province = document.getElementById("province").value;

    if(! province) {
        alert("Enter your province");
        return false;
    }

    return true;
}

function postalCode() {
    var postalCode = document.getElementById("postal_code").value;

    if(! postalCode) {
        alert("Enter your postal code");
        return false;
    }

    if(isNaN(postalCode)) {
        alert("Enter your postal code as a number");
        return false;
    }

    if(postalCode.length != 5) {
        alert("Enter your postal code only 5 digits");
        return false;
    }

    return true;
}

// Vaccinated Info
function validateVaccinatedInfo() {
    if(! firstDose()) {
        return false;
    }

    if(! secondDose()) {
        return false;
    }

    if(! thirdDose()) {
        return false;
    }

    if(! forthDose()) {
        return false;
    }

    if(! imgVaccine()) {
        return false;
    }

    return true;
}

function firstDose() {
    var firstDose = document.getElementById("first_dose").value;

    if(firstDose == 'choose one of available options') {
        alert("select your 1st dose or select none");
        return false;
    }

    return true;
}

function secondDose() {
    var secondDose = document.getElementById("second_dose").value;

    if(secondDose == 'choose one of available options') {
        alert("select your 2nd dose or select none");
        return false;
    }

    return true;
}

function thirdDose() {
    var thirdDose = document.getElementById("third_dose").value;

    if(thirdDose == 'choose one of available options') {
        alert("select your 3rd dose or select none");
        return false;
    }

    return true;
}

function forthDose() {
    var forthDose = document.getElementById("forth_dose").value;

    if(forthDose == 'choose one of available options') {
        alert("select your 4th dose or select none");
        return false;
    }

    return true;
}

function imgVaccine() {
    var imgVaccine = document.getElementById("img_vaccine").value;

    if(! imgVaccine) {
        alert("upload your certificate of covid-19 vaccination");
        return false;
    }

    return true;
}

// ATK Result Info
function validateAtkResultInfo() {
    if(! atkResult()) {
        return false;
    }

    if(! imgAtkResult()) {
        return false;
    }

    return true;
}

function atkResult() {
    var atkResult = document.getElementById("atk_result").value;

    if(atkResult == 'choose one of available options') {
        alert("select your atk result");
        return false;
    }

    return true;
}

function imgAtkResult() {
    var imgAtkResult = document.getElementById("img_atk").value;

    if(! imgAtkResult) {
        alert("upload your atk result");
        return false;
    }

    return true;
}