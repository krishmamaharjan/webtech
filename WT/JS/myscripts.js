// alert("Welcome to page");

var a= 20;
b = 20.30;
c=a+b;
// alert("THe sum is "+c);
console.log("The sum is "+c);
document.write("The sum is "+c);

// dom manipulation
document.getElementById("result").innerHTML="The sum is "+c;
function sum(){
    // use prompt for user input
    num1=parseInt(prompt("ENter a first number: "))
    num2=parseInt(prompt("ENter a second number: "))
    tsum=num1+num2;
    document.getElementById("sum").innerHTML="The sum of "+num1+"and "+num2+"is" +tsum;
    
}
function pageexit(){
    // use confirm() for exit
    result=confirm("Are you sure you want to quit this page")
    if(true){
        window.close();
    }
    else
    {
        alert("You are contnuing the page");
    }
}