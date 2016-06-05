var $ = function (id) {
    return document.getElementById(id);
}

var clear = function (){
	$("investment").value = "";
	$("rate").value = "";
	$("years").value = "";
	$("future_value").value = "";
	$("investment").focus();
}

function calculateClick (){
	var investment = parseFloat($("investment").value);
	var rate = parseFloat($("rate").value);
	var years = parseInt($("years").value);
	
	if (isNaN(investment)) {
		alert("The investment amount must be a number.");
	}
	else if (investment <= 0){
		alert("The investment amount must be greater than zero.");
	}
	else if (isNaN(rate)){
		alert("The annual interest rate must be a number.");
	}
	else if (rate <= 0){
		alert("The annual interest rate must be greater than zero.");
	}
	else if (isNaN(years)){
		alert("The number of years must be a number.");
	}
	else if (years <= 0){
		alert("The number of years must be greater than zero.");
	}
	else {
		var futureValue = investment;
		for(var i = 0; i < years; i += 1){
			futureValue = futureValue + (futureValue * rate / 100);
		}
		$("future_value").value = futureValue.toFixed();
	}
}
				
window.onload = function (){
	$("calculate").onclick = calculateClick;
	$("investment").focus();
	$("clear").onclick = clear;
}