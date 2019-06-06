// variabelen
var pos=0;
var speed=200;
var str=document.getElementById('Naam').innerText;
var button = document.getElementById('scrollUp');

//Benaming van document
// weghalen van de Id str van span
document.getElementById('Naam').innerText= '';

// als de gebruiker scroll wordt de scrollFunction geactiveerd
window.onscroll = function() {scrollFunction()};
button.addEventListener('click', topFunction);

// functies

//type functie
function type(){
    if(pos<str.length){
        document.getElementById('Naam').innerText += str.charAt(pos);
        pos++;
        setTimeout(type,speed); //call this functon again to type all letters
    }
    else{
        setTimeout(erase,speed);
    }
}

//verwijder function
function erase(){
    if(pos>=0){
        var temp = str.substring(0, pos);
        document.getElementById('Naam').innerText = temp;
        pos--;
        setTimeout(erase,speed); //call this functon again to type all letters
    }
    else{
        setTimeout(type,speed);
    }
}
setTimeout(type,speed);

//scroll-up functie

function scrollFunction() {
  if (document.body.scrollTop > 400 || document.documentElement.scrollTop > 400) {
    document.getElementById("scrollUp").style.display = "block";
  } else {
    document.getElementById("scrollUp").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}