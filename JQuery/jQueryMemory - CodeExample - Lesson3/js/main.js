// 1. Array Countries
var countries = [
	"Netherlands",
	"Belgium",
	"Germany",
	"Italy"
]

//2. Array Cryptos
var cryptos = [
	"Bitcoin",
	"LiteCoin",
	"Ripple"
]

//3. Object Person
var person = {
	firstName : "John",
	lastName : "Doe",
	Age : 50,
	eyeColor : "blue"
}

//4. Array of objects 
var donuts = [

	{type : "choco", weight : 130, price : 1.45},
	{type : "Lemon", weight : 170, price : 1.95},
	{type : "Raspberry", weight : 130, price : 1.25}

]

//countries array example
for(var i=0; i < countries.length; i++){
	//console.log(countries[i]);
	$("#js-countries-list").append("<li>" + countries[i] + "</li>");
}

//each method example (cryptos)
$.each(cryptos, function(index,val){
	$("#js-list-cryptos").append("<div>" + val + "</div>")
})

$.each(person, function(prop, val){
	console.log(prop);
	$("#js-list-persons").append("<tr><td>" + prop + "</td><td>" + val +"</td></tr>")
})

$.each(donuts, function(index, value){
	console.log(value.type);
})