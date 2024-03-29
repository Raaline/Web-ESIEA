// acces au dom

//selectionner un element par son ID
const elementById = document.getElementById('section2');
//selectionner un element par sa classe 
let elementByClass = doucment.getElementByClassName('section1');
//selectionner un element par sa classe 
let elementByTag = document.getElementsByTagName('h1');

//Manipuler du contenu en Javascript
elementById.textContent = "Nouveau Text";
//elementById.innerHTML = '<strong>Hello World </strong>';



// Acces au DOM avec Jquery 
// Selectionner un element par son ID
//let elementById = $('#section3');
// Selectionner un element par son nom de Classe
//let elementByClass = $('.section2');
// Selectionner un element par son Tag html
//let elementByTag = $('h1');

//Manipulation du contenu avec Jquery
//elementById.text('NOUVEAU TEXT QUI REPLACE La section3');
//elementById.html ('<strong>Manip HTML</strong>')

// -------- Gestion d'evenement 
// cibler l'element 
// let elementById = document.getElementById('section3');
// // Ajouter un ecouteur d'evenement
// elementById.addEventListener('click', function(){
//     alert('Element cliqué');
//     }
// );

// Modification du style css
//elementById.style.color = 'green';



// fonctions Js
// function additionner(a,b) {
//     return a + b;
// }
// let resultat = additionner(4,5);

// // Recuper la value d'un input html 
// function getValue(){
//     let input = document.getElementById('input').value;
//     alert(input);
// }


// creer un nouvelle element en JS
//let newElement = document.createElement('p');
//newElement.textContent = 'CONTENU POUR LE NOUVEL ELEMENT';
// append l'element dans le code html
//document.body.appendChild(newElement);
//document.body.removeChild(elementById);


//fonction
function additionner() {
    var a = parseFloat(document.getElementById("numero1").value)
    var b = parseFloat(document.getElementById("numero2").value)

    var somme = a + b ; 
    alert("L'addition de a avec b donne "+ somme);
}
function soustraction() {
    var a = parseFloat(document.getElementById("numero1").value)
    var b = parseFloat(document.getElementById("numero2").value)

    var diff = a - b ; 
    alert("La soustraction de a à b donne "+ diff);
}
function multiplication() {
    var a = parseFloat(document.getElementById("numero1").value)
    var b = parseFloat(document.getElementById("numero2").value)

    var mull = a * b ; 
    alert("La multiplication de a avec b donne "+ mull);
}
function division() {
    var a = parseFloat(document.getElementById("numero1").value)
    var b = parseFloat(document.getElementById("numero2").value)

    var mull = a / b ; 
    alert("La division de a par b donne "+ mull);
}