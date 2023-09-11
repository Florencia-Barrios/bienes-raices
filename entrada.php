<?php
    include './includes/templates/header.php';
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guía para la decoración de tu hogar</h1>

        <picture>
            <source srcset="./build/img/destacada2.webp" type="image/webp">
            <source srcset="./build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="./build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>05/08/2023</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">
            <p>Proin consequat viverra sapien, malesuada tempor tortor feugiat vitae. In dictum felis et nunc aliquet
                molestie. Proin tristique commodo felis, sed auctor elit auctor pulvinar. Nunc porta, nibh quis
                convallis sollicitudin, arcu nisl semper mi, vitae sagittis lorem dolor non risus. Vivamus accumsan
                maximus est, eu mollis mi. Proin id nisl vel odio semper hendrerit. Nunc porta in justo finibus tempor.
                Suspendisse lobortis dolor quis elit suscipit molestie. Sed condimentum, erat at tempor finibus, urna
                nisi fermentum est, a dignissim nisi libero vel est. Donec et imperdiet augue. Curabitur malesuada
                sodales congue. Suspendisse potenti. Ut sit amet convallis nisi.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem provident voluptatem soluta qui, vero quo
                labore expedita nam officiis! Fugit quo eveniet, neque nulla accusamus nostrum autem temporibus
                architecto magnam?</p>
        </div>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>
        <p class="copyright">Todos los derechos reservados 2023 &copy;</p>
    </footer>

    <script src="./build/js/bundle.min.js"></script>
</body>

</html>