var count = 12;

function sum(a,b) {
    return (a + b);
}

var see = function(height, lenght, width) {
    return (height + lenght - width);
}

array = ['Home', 'Home', 'Home', 'Home', 'Home',]
console.log (array);
array[0]='red';
try { 
    input1 = prompt ("Enter any Number");
    if (input1 == "") throw "No value entered";
    alert ("input is very correct");

} catch(error) {
    alert(error)
} finally {
    alert ("Do have a great day");
}

function show() {
    var input = document.getElementById("input").value;
    alert(input);
}

function update() {
    document.getElementById("update").innerHTML=
    document.getElementById("textenter").value
}

function showdatasubmitted() {
    alert (document.getElementById("text-name").value);
    alert (document.getElementById("text-email").value);
}