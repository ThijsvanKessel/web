var attempt = 0;
var numberButtons = document.getElementsByClassName('sumbit-button');
var content = document.getElementById("input-container");
var winlose;
var counterClick = 0;
var numberOne;
var numberTwo;
var numberThree;
var flashgood = document.getElementById("flashgood");
var flashfalse = document.getElementById("flashfalse");

var counterClick = 0;

var numberOne;
var numberTwo;
var numberThree;

var intervalTimer = 0;

function getNumber(clickedButton)
{
	 counterClick++;

	if (counterClick == 1)
		{
		 	 numberOne = clickedButton.value;
		}
	else if (counterClick == 2)
		{
		  	numberTwo = clickedButton.value;
		}
	else if (counterClick == 3)
		{
			  numberThree = clickedButton.value;
			  attempt++;
			  console.log(attempt);
			  document.getElementById("attemptcounter").innerHTML = attempt;
		}
	content.innerHTML += clickedButton.value;


		if(counterClick == 3)
		{
		 	for(i=0; i < numberButtons.length; i++) {
		       numberButtons[i].setAttribute('disabled', 'disabled');}

		  
			  	if(numberOne == 3 && numberTwo == 1 && numberThree == 2)
			   	{
			    	console.log("Test");

			    	counterClick=0;
			    	winlose = ("<br>The code is correct");
			    	content.innerHTML += winlose;

			    	var blink = setInterval(function()
			    	{
			      
				      	intervalTimer++;

				      	if (flashgood.style.backgroundColor == 'limegreen')
					      	{
					        	flashgood.style.backgroundColor = 'darkgreen';
					        }
				        else
					        {
					        	flashgood.style.backgroundColor = 'limegreen';
					     	}

					    if(intervalTimer == 10) 
					    {
					        clearInterval(blink);
					        winlose = ("");
					        content.innerHTML =("");
					        intervalTimer = 0;

					        for(i=0; i < numberButtons.length; i++)
						        {
						        	numberButtons[i].removeAttribute('disabled');
						        }  
			     		}
			     	}, 250);
			  	}
			  	else
				{  
				        
				    counterClick=0; 
				    winlose = ("<br>The code is't correct");
				    content.innerHTML += winlose;
				    
				    var blink = setInterval(function()
				    {  
					    intervalTimer++;

					    if (flashfalse.style.backgroundColor == 'red')
					      	{
					        	flashfalse.style.backgroundColor = 'maroon';
					      	}
					    else
					     	{
					        	flashfalse.style.backgroundColor = 'red';
					      	}

					    if(intervalTimer == 10)
					      	{
					        	clearInterval(blink);
					        	winlose = ("");
					        	content.innerHTML =("");
					        	intervalTimer = 0;

					        	for(i=0; i < numberButtons.length; i++)
					        		{
					           			numberButtons[i].removeAttribute('disabled');
					        		}
				      		}
			   		}, 250);
		  	}
		}
}