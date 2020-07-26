/*
 * @author Miah Abdullah Shekhar <shekharabdullah88@gmail.com>
 *
 * Q: What is JavaScript variable?
 * A: JavaScript variable is container for storing data/value.
 *
 * Q: How to declare a JavaScript variable?
 * A: var variableName;
 *
 * Assign a Value to the Variable
 * variableName='value';
 *
 * Variable Example
 *
 * var firstName;
 * firstName='Reza';
 */

var firstName;
firstName = "Reza";

console.log(firstName);

/*
 * assign a value to the variable when you declare it:
 *
 * var age=23;
 */

var age = 23;
document.write(age);

alert(firstName + " is a " + age + " years old.");

var job = prompt("What is his job?");
document.write("<br>" + firstName + " is a " + job);

/*
 * JAVASCRIPT VARIABLES NAMING CONVENTIONS:
 *
 * variable names must begin with a letter, $ or _
 * variable names are case sensitive (firstName and FirstName are different variables)
 * Variable names cannot contain spaces
 * Variable names can contain letters, digits, underscores, and dollar signs.
 * Reserved words (like JavaScript keywords) cannot be used as variable names
 *
 */
