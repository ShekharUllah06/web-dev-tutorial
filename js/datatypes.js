/*
 * The latest ECMAScript standard defines nine types:
 * Six Data Types that are primitives, checked by typeof operator:
 * null : typeof instance === "object". Special primitive type having additional usage for its value: if object is not inherited, then null is shown;
 * Object : typeof instance === "object". Special non-data but structural type for any constructed object instance also used as data structures: new Object, new Array, new Map, new Set, new WeakMap, new WeakSet, new Date and almost everything made with new keyword;
 * Function non data structure, though it also answers for typeof operator: typeof instance === "function". This answer is done as a special shorthand for Functions, though every Function constructor is derived from Object constructor.
 */

 /*
  * Six Data Types that are primitives
  * undefined : typeof instance === "undefined"
  * Boolean : typeof instance === "boolean"
  * Number : typeof instance === "number"
  * String : typeof instance === "string"
  * BigInt : typeof instance === "bigint"
  * Symbol : typeof instance === "symbol"
  */

  // Number
  var length = 16; 
  console.log(length);

  // String
  var lastName = "Johnson";
  console.log(lastName);

  // Boolean
  var isStudent=true;
  console.log(isStudent);

 // BigInt. A bigint is created by appending n to the end of an integer literal or by calling the function BigInt that creates bigints from strings, numbers etc.
  var myBigNumber = 1234567890123456789012345678901234567890n;
  console.log(myBigNumber);