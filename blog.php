<?php
include_once("cabecera.php");
?>

<section class="container-xl py-5">
    <h2 class="text-center my-5 ">Blog</h2>

    <div class="row mt-5 gx-5">
        <main class="col-md-8 order-1 order-md-1">
            <article class="mb-2 pb-5">
                <h2 class="my-5">Planifica tus vacaciones</h2>
                <img class="img-fluid" src="img/cabanaLago7.jpg" alt="imagen blog">

                <div class="d-flex flex-column flex-md-row justify-content-md-between my-4">
                    <p class="fw-bold">Fecha: <span class="text-primary">22 de octubre de 2022</span></p>
                    <p class="fw-bold">Escrito por: <span class="text-primary">Alquileres Vacacionales</span></p>
                </div>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias voluptatum labore rerum adipisci
                    et maiores dignissimos
                    consequuntur? Consequatur ducimus, tempora repellendus labore quibusdam dolores rem blanditiis
                    cupiditate dolorum,
                    praesentium voluptates!</p>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias voluptatum labore rerum adipisci
                    et maiores dignissimos
                    consequuntur? Consequatur ducimus, tempora repellendus labore quibusdam dolores rem blanditiis
                    cupiditate dolorum,
                    praesentium voluptates!</p>

                <a href="entrada.php" class="btn btn-success px-5 py-3 fs-3 text-uppercase fw-bold rounded-0 d-block d-md-inline-block">Continuar
                    Leyendo</a>

            </article>

            <article class="mb-2 border-top pb-5">
                <h2 class="my-5">Inspiración para futuras escapadas</h2>
                <img class="img-fluid" src="img/casaPlaya4.jpg" alt="imagen blog">

                <div class="d-flex flex-column flex-md-row justify-content-md-between my-4">
                    <p class="fw-bold">Fecha: <span class="text-primary">22 de octubre de 2022</span></p>
                    <p class="fw-bold">Escrito por: <span class="text-primary">Alquileres Vacacionales</span></p>
                </div>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias voluptatum labore rerum adipisci
                    et maiores dignissimos
                    consequuntur? Consequatur ducimus, tempora repellendus labore quibusdam dolores rem blanditiis
                    cupiditate dolorum,
                    praesentium voluptates!</p>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias voluptatum labore rerum adipisci
                    et maiores dignissimos
                    consequuntur? Consequatur ducimus, tempora repellendus labore quibusdam dolores rem blanditiis
                    cupiditate dolorum,
                    praesentium voluptates!</p>

                <a href="entrada.php" class="btn btn-success px-5 py-3 fs-3 text-uppercase fw-bold rounded-0 d-block d-md-inline-block">Continuar
                    Leyendo</a>
            </article>

        </main>
        <aside class=" col-md-4">
            <h3 class="my-5">Otras entradas de blog</h3>
            <ul class="mt-5 list-unstyled">
                <li>
                    <a class="text-dark text-decoration-none" href="#">Planifica tus vacaciones</a>
                </li>
                <li>
                    <a class="text-dark text-decoration-none" href="#">Experiencias</a>
                </li>
                <li>
                    <a class="text-dark text-decoration-none" href="#">Inspiración para futuras escapadas</a>
                <li>
                    <a class="text-dark text-decoration-none" href="#">¿Dudas sobre cómo hospedar?</a>
                </li>
                </li>
            </ul>
        </aside>
    </div>

</section>


<?php
include_once("footer.php");
?>