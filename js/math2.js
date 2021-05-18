var startButton = document.getElementById("start");
var stopButton = document.getElementById("stop");
var inputField = document.getElementById("in");
var form = document.querySelector("form");
var p = document.getElementById("p");
var q = document.getElementById("q");
var op = document.getElementById("op");
var response = document.getElementById("response"); // used for Try Again text
var results = document.getElementById("results");
var category = document.getElementById("category");
var timing = document.getElementById("Timer")


var timeLeft = 30;
var num1;
var num2;
var answer;
var response;
var timerId = setInterval(countdown, 1000);

var correct;
var total;

inputField.className = "hide";


startButton.onclick = function() {
    function countdown(){
        count = 0;
        results.innerHTML = "";
        category.innerHTML= "";
        while (timeLeft != 0) {
            refreshNums();
            inputField.className = ""; // show the input field
	        startButton.className = "hide"; // hide the start button

        inputField.focus();
        };
    };
};


