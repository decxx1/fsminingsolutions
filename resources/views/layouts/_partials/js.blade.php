 <!-- Javascript Files
  ==================================================

initialize jQuery Library
  <script src="plugins/jQuery/jquery.min.js"></script>
Bootstrap jQuery
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
Slick Carousel
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
Color box
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
 shuffle
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  Google Map API Key
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
Google Map Plugin
  <script src="plugins/google-map/map.js" defer></script>

 Template custom
  <script src="js/script.js"></script>-->


 <!-- Javascript Files -->
 <script src="plugins/jQuery/jquery.min.js"></script>
 <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
 <script src="plugins/slick/slick.min.js"></script>
 <script src="plugins/slick/slick-animation.min.js"></script>
 <script src="plugins/colorbox/jquery.colorbox.js"></script>
 <script src="plugins/shuffle/shuffle.min.js" defer></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" defer></script>
 <script src="plugins/google-map/map.js" defer></script>

 <!-- Template custom -->
 <script src="js/script.js"></script>



 <!-- CÓDIGO PARA EL INDEX NO DEBERÍA IR AQUÍ -->
 <script>
     // Obtén una referencia a los botones por sus identificadores
     var botonProductos = document.getElementById('nuestros-productos-btn');
     var botonHabitables = document.getElementById('nuestros-habitables-btn');
     var botonConoceMas = document.getElementById('conoce-mas-btn');

     // Agrega un evento de clic a cada botón
     botonProductos.addEventListener('click', scrollToSection);
     botonHabitables.addEventListener('click', scrollToSection);
     botonConoceMas.addEventListener('click', scrollToSection);

     // Función de desplazamiento hacia la sección de destino
     function scrollToSection(event) {
         event.preventDefault(); // Evita el comportamiento predeterminado del enlace

         // Obtén una referencia a la sección de destino
         var seccionProductos = document.querySelector('#ts-service-area');

         // Desplázate hacia la sección de destino utilizando smooth scrolling
         seccionProductos.scrollIntoView({
             behavior: 'smooth'
         });
     }
 </script>
