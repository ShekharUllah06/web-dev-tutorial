/*
* In JavaScript we have the following conditional statements:

* Use if to specify a block of code to be executed, if a specified condition is true
* Use else to specify a block of code to be executed, if the same condition is false
* Use else if to specify a new condition to test, if the first condition is false
* Use switch to specify many alternative blocks of code to be executed
*/
var a=20;  
if(a>10){  
    document.write("value of a is greater than 10");  
}  

document.write('<br>')
//if else
var a=20;  
if(a%2==0){  
    document.write("a is even number");  
}  
else{  
    document.write("a is odd number");  
}  
document.write('<br>')

/*
* if...else if... statement
* The if...else if... statement is an advanced form of if…else that allows JavaScript to make a correct decision out of several conditions.

* Syntax
* The syntax of an if-else-if statement is as follows −

if (expression 1) {
    Statement(s) to be executed if expression 1 is true
} else if (expression 2) {
    Statement(s) to be executed if expression 2 is true
} else if (expression 3) {
    Statement(s) to be executed if expression 3 is true
} else {
    Statement(s) to be executed if no expression is true
}
* There is nothing special about this code. It is just a series of if statements, where each if is a part of the else clause of the previous statement. Statement(s) are executed based on the true condition, if none of the conditions is true, then the else block is executed.
*/

var book = "maths";
if( book == "history" ) {
    document.write("<b>History Book</b>");
} else if( book == "maths" ) {
    document.write("<b>Maths Book</b>");
} else if( book == "economics" ) {
    document.write("<b>Economics Book</b>");
} else {
    document.write("<b>Unknown Book</b>");
}


