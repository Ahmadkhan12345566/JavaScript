
//global and local varibale

var x = {firstName:"John", lastName:"Doe"};//object ---global
var cars = ["Saab", "Volvo", "BMW"];//arry

function use_of_obj() {
    var a1;//local variable
    document.getElementById("NAME").innerHTML = x.firstName + " " + x.lastName;//use of object
   a1=document.getElementById("NAME").innerHTML;
    document.getElementById("demo").innerHTML=a1.length;

}


//use of  escape characters
function clorfun() {
    document.getElementById("clr").innerHTML="click me"
    var str=document.getElementById("clr").innerHTML;
    var pos = str.indexOf("me");
    document.getElementById("DAY").innerHTML=pos;
    document.getElementById("clr").innerHTML="c\rl\tick\' me\'"
}
function replace() {
    document.getElementById("clr").innerHTML="click me"
    var str=document.getElementById("clr").innerHTML;
    var pos = str.replace("me", "tictoc");
    document.getElementById("clr").innerHTML=pos;

}



