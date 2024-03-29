// acces au dom

//selectionner un element par son ID
let elementById = document.getElementById('section2');
//selectionner un element par sa classe 
let elementByClass = doucment.getElementByClassName('section1');
//selectionner un element par sa classe 
let elementByTag = document.getElementsByTagName('h1');

//Manipuler du contenu en Javascript
elementById.textContent = "Nouveau Text";
elementById.innerHTML = '<strong>Hello World </strong>';



