let indiceSlide = 1;
mostrarSlide(indiceSlide);

function cambiarSlide(n) {
    mostrarSlide(indiceSlide += n);
}

function slideActual(n) {
    mostrarSlide(indiceSlide = n);
}

function mostrarSlide(n) {
    let i;
    let slides = document.getElementsByClassName("slide");
    let dots   = document.getElementsByClassName("dot");

    /* Como contador, si te pasas vuulve al inicio*/
    /* En pocas palabras si n es mayor a las fotos, vuelve al inicio*/
    if (n > slides.length) { indiceSlide = 1 }
    if (n < 1) { indiceSlide = slides.length }


    /* Oculta todas las imagenes */
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    
    /* Apaga todas las opciones(circulo) */
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active-dot", "");
    }


    /*Se muerstra la imagjen correecta*/
    slides[indiceSlide - 1].style.display = "block"; 
    /*Se enciende la opcion(circulo) correecta*/
    dots[indiceSlide - 1].className += " active-dot";
}