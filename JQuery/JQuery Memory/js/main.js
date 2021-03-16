//define variables
var container = "#card-container",
	cardOne = "#card_one",
	cardOneId,
	cardOneSource,
	cardTwoId,
	cardTwoSource,
	flipCounter = 0;
	clickCounter = 0;

//Load after document is loaded 
$(document).ready(function(){

	$("#reset-btn").on("click", function(){
		setTimeout(function(){
			$(container).find("div").fadeIn();
		}, 750);

		setTimeout(function(){
			$(container).find("img").fadeOut();
			$(container).find("img").fadeOut();
		}, 250);
		flipCounter = 0;
		clickCounter = 0;
		$("#Sets-label").text(flipCounter);
		$("#clicks-label").text(clickCounter);
	})

	$(container + " div").on("click", function(){
		if(cardOneId == undefined)
		{
			$(this).find("img").fadeIn(1000);
			cardOneId = $(this).attr("id");
			cardOneSource = $(this).find("img").attr("src");
			clickCounter++;
			$("#clicks-label").text(clickCounter);
		}
		else if(cardOneId != undefined && cardTwoId == undefined && cardOneId != cardTwoId)
		{
			$(this).find("img").fadeIn(1000);
			cardTwoId = $(this).attr("id");
			cardTwoSource = $(this).find("img").attr("src");
			clickCounter++;
			$("#clicks-label").text(clickCounter);
			setTimeout(function(){
				CompareCards();
			}, 750);
			
		}
		else
		{
			alert("Something went wrong, try again")
		}
	})

	function CompareCards() {
		if(cardOneSource == cardTwoSource)
		{
			//$("#" + cardOneId).fadeOut();
			//$("#" + cardTwoId).fadeOut();
			flipCounter++;
			$("#Sets-label").text(flipCounter);
			if(flipCounter == 10)
			{
				setTimeout(function(){
					$(container).find("div").fadeIn();
				}, 750);

				setTimeout(function(){
					$(container).find("img").fadeOut();
					$(container).find("img").fadeOut();
				}, 250);
				flipCounter = 0;
				clickCounter = 0;
				$("#Sets-label").text(flipCounter);
				$("#clicks-label").text(clickCounter);
			}
			ClearVariables();
		}
		else
		{
			$("#" + cardOneId).find("img").fadeOut();
			$("#" + cardTwoId).find("img").fadeOut();
			ClearVariables();
		}
	  }

	function ClearVariables()
	{
		cardOneId = undefined;
		cardOneSource = undefined;
		cardTwoId = undefined;
		cardTwoSource = undefined;
	}
});