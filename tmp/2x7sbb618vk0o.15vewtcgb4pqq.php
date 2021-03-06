<section class="login-block">
  <div class="container " style="margin-top: 5%;">
    <div class="row">
      <div class="col-md-4 login-sec">
        <form class="login-form" method="POST" action="<?= ($BASE) ?>/">
          <h2 class="text-center"> <img class="mb-4" src="<?= ($BASE) ?>/assets/logo/LogoISC.png" alt="" height="57">
      <h1 class="h3 mb-3 fw-normal">Inicia sesión</h1></h2>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Número de ficha">
            <label for="usuario">Usuario</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="name@example.com">
            <label for="contrasena">Contraseña</label>
          </div>
          <p class="text-danger text-center">
            <b><?= ($error) ?></b>
          </p>
          <div class="d-grid gap-2 col-6 mx-auto mt-3">
            <button class="btn btn-login" type="submit">Iniciar sesión</button>
          </div>
          <div class=" mt-5">
            <a href="#Aspirante" data-bs-toggle="modal" data-bs-target="#Aspirante">¿Olvidaste tu contraseña?</a>
          </div>
          
          <div class="copy-text">Power by <a href="http://AuxilioRCP.com">AuxilioRCP</a></div>
        </form>
      </div>
      
      <div class="col-md-8 d-none d-lg-block banner-sec" style="background:url('<?= ($BASE) ?>/assets/logo/Instituto Tecnológico de Tijuana ITT.jpg') no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;">
        
      </div>
    </div>
  </section>
