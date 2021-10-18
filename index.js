function changeTheme(){
	let option = document.getElementById("pilTema");

	if (option.options[option.selectedIndex].value == "black") {
		document.body.style.background = "black";
		document.body.style.color = "white";
	}
	else if (option.options[option.selectedIndex].value == "white") {
		document.body.style.background = "white";
		document.body.style.color = "black";
	}
}

function changeWeather(){
	let option = document.getElementById("pilCuaca");

	if (option.options[option.selectedIndex].value == "sunny") {
		document.getElementById("cuaca").innerHTML = "It is nice and sunny outside today. Wear shorts! Goto the beach, or park, and get an ice cream.";	
	}
	else if (option.options[option.selectedIndex].value == "rainy") {
		document.getElementById("cuaca").innerHTML = "Rain is falling outside, take a rain coat and a brolly, and don't stay out for too long.";
		
	}
	else{
		document.getElementById("cuaca").innerHTML = "";
	}
}

function getFactorial (){
	let number =  document.getElementById("factorial");

	let result = 1;

    for(let i = 1; i <= number.value; i++) {
      result *= i;
    }

    document.getElementById("result").innerHTML = `The factorial of ${number.value} is ${result} `;

}