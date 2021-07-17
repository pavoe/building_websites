// JQuery - fade-in, fade-out
$(document).ready(function() {
	$(".clickme").click(function(){
	  $(".calc").animate({width: "toggle", height: "410px"}, 700);
	});
	/* $(".clickme").click(function(){
	  $(".calc").toggle(1000);
	}); */
});

// Działanie kalkulatora

var result = "";
var output = "";
var nextCalc = false;

function Calc(op) {
  output = document.getElementById('result').value.toString();
  switch(op){
      case 'C':
        output = "";
        break;
      case '=':
        output = eval(output);
        nextCalc = true;
        break;
      case '0':
        checkNextCalc(op);
        output += "0";
        break;
      case '1':
        checkNextCalc(op);
        output += "1";
        break;
      case '2':
        checkNextCalc(op);
        output += "2";
        break;
      case '3':
        checkNextCalc(op);
        output += "3";
        break;
      case '4':
        checkNextCalc(op);
        output += "4";
        break;
      case '5':
        checkNextCalc(op);
        output += "5";
        break;
      case '6':
        checkNextCalc(op);
        output += "6";
        break;
      case '7':
        checkNextCalc(op);
        output += "7";
        break;
      case '8':
        checkNextCalc(op);
        output += "8";
        break;
      case '9':
        checkNextCalc(op);
        output += "9";
        break;
      case '.':
        checkNextCalc(op);
        //if(!output.includes("."))
        //  output += ".";
		output += ".";
        if(output == '.')
          output = "0.";
        break;
      case '+':
        checkNextCalc(op);
        output += "+";
        break;
      case '-':
        checkNextCalc(op);
        output += "-";
        break;
      case '×':
        checkNextCalc(op);
        output += "*";
        break;
      case '÷':
        checkNextCalc(op);
        output += "/";
        break;
    }
  document.getElementById('result').value = output
}

function checkNextCalc(op){
  if (nextCalc){
    if(op != '+' && op != '-' && op != '×' && op != '÷'){
      output = "";
      nextCalc = false;
    }
    else{
      nextCalc = false;
    }
  }
}