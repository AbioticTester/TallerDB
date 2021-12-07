<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <form action="acceso" method="POST">
              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-uppercase">Portal de eventos</h2>
                <p class="text-white-50 mb-5">Ingrese su usuario y contraseña</p>

                <div class="form-outline form-white mb-4">
                  <input type="text" id="user" name="usuario" class="form-control form-control-lg" />
                  <label class="form-label" for="user">Usuario</label>
                </div>

                <div class="form-outline form-white mb-4">
                  <input type="password" id="contrasena" name="contrasena" class="form-control form-control-lg" />
                  <label class="form-label" for="contrasena">Contraseña</label>
                </div>
                <p class="text-danger me-3"><?= ($error) ?></p>
                <p class="small mb-3 pb-lg-2 mt-"><a class="text-white-50"  data-mdb-toggle="modal" data-mdb-target="#exampleModal">¿Olvidé mi contraseña?</a></p>

                <button class="btn btn-outline-light btn-lg px-5" type="submit">Accesar</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>