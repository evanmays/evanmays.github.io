
/*
var fourthOfJuly = new Date("7/4/2018");
var todaysDate = new Date();

if(fourthOfJuly.setHours(0,0,0,0) == todaysDate.setHours(0,0,0,0)) {
	if (confirm("It's the 4th of July. Do you want to see this site in 4th of July mode?")) {
		var columns = document.getElementsByClassName("column");
		columns[0].style.backgroundColor = "#d63031";
		columns[1].style.backgroundColor = "#dfe6e9";
		columns[1].style.color = "#2d3436";
		columns[2].style.backgroundColor = "#d63031";
		document.getElementsByTagName("header")[0].style.backgroundColor = "#0984e3";
		document.getElementsByTagName("header")[0].style.color = "#dfe6e9";
	}
}

*/

function contactBtn() {
	//show the contact form on mobile
	var contactForm = document.getElementById('contactForm');
	contactForm.style.display = "inline";
}

function doneBtn() {
	//contact form is filled out
	var interest = document.getElementById("interest").value
	var email = document.getElementById("email").value
	sendEmail(interest, email);
}

function sendEmail(interest, email) {
	//notify me of a contact request
	var data = { "interest": interest, "email": email};
	sendRequest("https://evanmays.com/logContactRequest.php", function() {
		alert("Thanks, I'll reach out to you shortly at " + email)
	}, data);
}

/*
function validateEmail() {
	var email = document.getElementById("email").value;
	//due to Regex expressions being terrible at recognizing unique emails,
	//I'm only going to test for the @ sign and a period.
	var re = /^\S+@\S+$/;

	if (re.test(String(email).toLowerCase())) {
		
	}
	else {

	}
}
*/

function sendRequest(url,callback,postData) {
    var req = new XMLHttpRequest();
    if (!req) return;
    var method = (postData) ? "POST" : "GET";
    req.open(method,url,true);
    //req.setRequestHeader('User-Agent','XMLHTTP/1.0');
    if (postData)
        //req.setRequestHeader('Content-type','application/x-www-form-urlencoded');
    req.onreadystatechange = function () {
        if (req.readyState != 4) return;
        if (req.status != 200 && req.status != 304) {
         alert('HTTP error ' + req.status);
         console.log(req)
            return;
        }
        callback(req);
    }
    if (req.readyState == 4) return;
    req.send(postData);
}