document.addEventListener('DOMContentLoaded', function() {
  
  eventListeners();

  darkMode();
});

function darkMode() {
  const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
  // console.log(prefiereDarkMode.matches); vemos su preferencia con true o false

  if (prefiereDarkMode.matches){
    document.body.classList.add('dark-mode'); // si prefiere dark-mode entonces vamos a agregar a la clase automáticamente una vez que cargue el sitio web.
  } else {
    document.body.classList.remove('dark-mode');
  }

  // y si lo tiene en automatico al modo oscuro-claro:

   prefiereDarkMode.eventListeners('change', function() {   // cuando cambie la opcion de dark mode vamos a ejecutarla siguiente funcion
     if (prefiereDarkMode.matches) {
         document.body.classList.add("dark-mode"); // si prefiere dark-mode entonces vamos a agregar a la clase automáticamente una vez que cargue el sitio web.
       } else {
         document.body.classList.remove("dark-mode");
       }
  });


  const botonDarkMode = document.querySelector(".dark-mode-boton");

  botonDarkMode.addEventListener("click", function () {
    document.body.classList.toggle("dark-mode"); // agrega la clase si no la tiene, y si la tiene la quita
  });
}

//--------------------------------------------------------------------------------
// lo primero que vamos a hacer es registrar un listener y vamos a escucharlo por un DOMContentLoaded, es decir que el documento esté cargado y haya cargado tanto el HTML como el JS y como el CSS. Y vamos a ejecutar una función.
// Entonces, una vez que se ejecute este evento DOMContentLoaded, vamos a ejecutar esta función, le conoce como un callback.
//Y vamos a registrar una función que se va a llamar eventListeners();

function eventListeners() {
  const mobileMenu = document.querySelector(".mobile-menu");

  mobileMenu.addEventListener("click", navegacionResponsive); // cuando demos click se manda a llamar y ejecutar el codigo de la funcion
}

function navegacionResponsive() {
  const navegacion = document.querySelector(".navegacion"); // seleccionamos la clase de la navegacion para corregir el css que tiene display none y se muestre

  navegacion.classList.toggle("mostrar"); // el toggle hace que si la tiene a la clase la agrega y sino, la quita. Así es mas corto y sino se puede asi con if y else:

  // if(navegacion.classList.contains('mostrar')){
  //     navegacion.classList.remove('mostrar');
  // } else {
  //     navegacion.classList.add('mostrar');
  // }
  // cuando damos click al menu se crea la clase mostrar y si damos click nuevamente se elimina / a la clase mostrar le definimos el display en scss
}
