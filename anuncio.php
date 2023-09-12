<?php
    include './includes/templates/header.php';
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta frente al bosque</h1>

        <picture>
            <source srcset="./build/img/destacada.webp" type="image/webp">
            <source srcset="./build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="./build/img/destacada.jpg" alt="imagen de la propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">€3.000.000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="./build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="./build/img/icono_estacionamiento.svg"
                        alt="icono estacionamiento">
                    <p>2</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="./build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>7</p>
                </li>
            </ul>

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

<?php
    include './includes/templates/footer.php';
?>