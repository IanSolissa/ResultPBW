let lisubclass=document.getElementsByClassName("lisubclassnav2")
let closed=document.getElementsByClassName("close")
    
function subclassnav2()
{
    lisubclass[0].style.display="flex"
    closed[0].style.display="flex"
    console.log("klick");
    
}
function offsubclassnav2()
{
    closed[0].style.display="none"
    lisubclass[0].style.display="none"
    console.log("asd");
    
}