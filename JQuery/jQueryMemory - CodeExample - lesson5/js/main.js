// 1. create a variable with hasClass (hasClass)
// 2. check IF class exists (if)
// 3. Remove this class (removeClass)
// 4. fadeIn image (find and fadeIn)
// 5. Start timer.

//define variables
var container = "#card-container",
	cardOne = "#card_one",
	cardOneId,
	cardOneSource,
	cardTwoId,
	cardTwoSource,
	flipCounter = 0;
	timerContainer = "#js-timer";

//Load after document is loaded 
$(document).ready(function(){

	$(container+" div").on("click", function(){

		$(timerContainer).timer({
			format : "%H:%M:%S"
		});

		if  ($(this).hasClass("face-down") == true)
		{
			this.classList.remove("face-down");

			flipCounter++;
			console.log(flipCounter);
			

			//fade in clicked image
			$(this).find("img").fadeIn();
	
			//Get the id (first card)
			cardOneId = $(this).attr("id");
	
			//Get the src (first card)
			cardOneSource = $(this).find("img").attr("src");
		}
		


		
	})

});