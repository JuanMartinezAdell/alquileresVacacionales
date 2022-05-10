<?php
include_once("cabecera.php");
?>

<main class="container-xl py-5">
    <h2 class="text-center my-5">Galería</h2>

    <ul class="row list-unstyled galeria">
        <li class="col-md-6 col-lg-4">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galeria03">
                <img class="img-fluid" src="img/galeria03.jpg" alt="imagen galeria">
            </a>
        </li>
        <li class="col-md-6 col-lg-4">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galeria04">
                <img class="img-fluid" src="img/galeria04.jpg" alt="imagen galeria">
            </a>
        </li>
        <li class="col-md-6 col-lg-4">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galeria06">
                <img class="img-fluid" src="img/galeria06.jpg" alt="imagen galeria">
            </a>
        </li>
        <li class="col-md-6 col-lg-4">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galeria14">
                <img class="img-fluid" src="img/galeria14.jpg" alt="imagen galeria">
            </a>
        </li>
        <li class="col-md-6 col-lg-4">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galeria20">
                <img class="img-fluid" src="img/galeria20.jpg" alt="imagen galeria">
            </a>
        </li>
        <li class="col-md-6 col-lg-4">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galeria21">
                <img class="img-fluid" src="img/galeria21.jpg" alt="imagen galeria">
            </a>
        </li>
        <li class="col-md-6 col-lg-4">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galeria10">
                <img class="img-fluid" src="img/galeria10.jpg" alt="imagen galeria">
            </a>
        </li>
        <li class="col-md-6 col-lg-4">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galeria11">
                <img class="img-fluid" src="img/galeria11.jpg" alt="imagen galeria">
            </a>
        </li>
        <li class="col-md-6 col-lg-4">
            <a data-bs-toggle="modal" data-bs-target="#modal-imagen" data-bs-imagen="galeria17">
                <img class="img-fluid" src="img/galeria17.jpg" alt="imagen galeria">
            </a>
        </li>
    </ul>
</main>

<div class="modal fade" id="modal-imagen">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body"></div>
        </div>
    </div>
</div>
<?php
include_once("footer.php");
?>