<?php
include_once("cabecera.php");
?>
<main class="container-xl py-5">
    <h2 class="text-center my-5">Contacto</h2>

    <div class="row justify-content-center">
        <form class="col-md-8 needs-validation" novalidate>
            <fieldset>
                <legend class="bg-primary text-center text-white fs-2">Tus Datos</legend>

                <div class="mb-3">
                    <label class="form-label" for="nombre">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Tu Nombre" required>
                    <span class="invalid-feedback">Introduce tu nombre correctamente.</span>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="asunto">Asunto:</label>
                    <input type="text" class="form-control" id="asunto" placeholder="Tu Asunto" required>
                    <span class="invalid-feedback">Introduce el asunto de tu consulta.</span>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="email">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Tu Email" required>
                    <span class="invalid-feedback">Introduce tu email</span>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="tel">Teléfono:</label>
                    <input type="tel" class="form-control" id="tel" placeholder="Tu Teléfono">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="tel">Mensaje:</label>
                    <textarea class="form-control" rows="10" required></textarea>
                    <span class="invalid-feedback">Introduce tu mensaje.</span>
                </div>
            </fieldset>

            <fieldset>
                <legend class="bg-primary text-center text-white fs-2">Provincia</legend>

                <div class="mb-3">
                    <label class="form-label" for="pais">Provincia:</label>
                    <select class="form-control" id="pais" required>
                        <option value="">--Seleccione--</option>
                        <option value="Al">Almería</option>
                        <option value="SE">Sevila</option>
                        <option value="CO">Cordoba</option>
                        <option value="GR">Granada</option>
                        <option value="HU">Huelva</option>
                        <option value="CA">Cadiz</option>
                        <option value="MA">Malaga</option>
                    </select>
                    <span class="valid-feedback">Muy bien!!</span>
                </div>
            </fieldset>

            <fieldset>
                <legend class="bg-primary text-center text-white fs-2">Información Extra</legend>

                <div class="mb-3">
                    <label class="form-label" for="cliente">Cliente:</label>
                    <input name="tipo" type="radio" class="form-check-input" id="cliente">
                </div>

                <div class="mb-3">
                    <label class="form-label" for="proveedor">Proveedor:</label>
                    <input name="tipo" type="radio" class="form-check-input" id="proveedor">
                </div>

            </fieldset>

            <div class="d-grid d-md-flex">
                <input class="btn btn-secondary fs-2 px-5 mt-5" type="submit" value="Enviar Formulario">
            </div>
        </form>
    </div>

</main>


<?php
include_once("footer.php");
?>