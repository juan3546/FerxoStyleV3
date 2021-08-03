<section class="bg-dark">
    <div class="row g-0 margintop">
        <div class="col-lg-7 d-none d-lg-block">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item img-1 min-vh-100 active">
                        <img src="vistas/img/plantilla/Modelo2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item img-1 min-vh-100">
                        <img src="vistas/img/plantilla/Modelo3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item img-1 min-vh-100">
                        <img src="vistas/img/plantilla/Modelo4.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-lg-5 d-flex flex-column align-items-end min-vh-100 margen">
            <div class="px-lg-5 pt-lg-4 pb-lg-3 p-4 w-100 mb-auto">
                <!-- img src="vistas/img/plantilla/logo.png" class="img-fluid" -->
            </div>
            <div class="px-lg-5 py-lg-4 p-4 w-100 align-self-center">
                <h1 class="font-weight-blod mb-4">Envia tus comentarios</h1>
                <form>
                    <div class="mb-4">
                        <label for="nombrePersonalizados" class="form-label font-weight-blod">Nombre</label>
                        <input type="text" class="form-control bg-dark-x borderf-0" id="nombrePersonalizados" aria-describedby="emailHelp" placeholder="Nombre">
                    </div>
                    <div class="mb-4">
                        <label for="correoPersonalizados" class="form-label font-weight-blod">Correo</label>
                        <input type="email" class="form-control bg-dark-x border-0" id="correoPersonalizados" placeholder="Correo">
                    </div>
                    <div class="mb-4">
                        <label for="telefonoPersonalizados" class="form-label font-weight-blod">Telefono</label>
                        <input type="text" class="form-control bg-dark-x border-0" id="telefonoPersonalizados" placeholder="Telefono">
                    </div>
                    <div class="mb-4">
                        <label for="fotoPersonalizados" class="form-label font-weight-blod">Subir Foto</label>
                        <input type="file" class="form-control bg-dark-x border-0 imgSubir" id="fotoPersonalizados" placeholder="Foto">
                        <p class="help-block">Peso máximo de la foto 200 MB</p>
                        <img src="vistas/img/plantilla/Modelo2.png" class="img-thumbnail previsualizar" width="100px">
                    </div>
                    <div class="mb-4">
                        <label for="cantidadPersonalizados" class="form-label font-weight-blod">Cantidad</label>
                        <input type="text" class="form-control bg-dark-x border-0" id="cantidadPersonalizados" placeholder="Cantidad">
                    </div>
                    <div class="mb-4">
                        <label for="detallePersonalizados" class="form-label font-weight-blod">Detalla jersey</label>
                        <textarea class="form-control bg-dark-x border-0" id="detallePersonalizados" placeholder="Detalla jersey"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-auto">Enviar</button>
                </form>

                <p class="font-weight-blod text-center text-muted mt-4">O envía un texto por nuestras redes sociales</p>
                <div class="d-flex justify-content-around w-100">
                    <button type="submit" class="btn btn-outline-light flex-grow-1 ms-2 btnWhatsApp"><i class="fab fa-whatsapp lead me-1"></i>WhatsApp</button>
                    <button type="submit" class="btn btn-outline-light flex-grow-1 ms-2 btnInstagram"><i class="fab fa-instagram lead me-1"></i>Instagram</button>
                </div>
            </div>
        </div>
    </div>
</section>