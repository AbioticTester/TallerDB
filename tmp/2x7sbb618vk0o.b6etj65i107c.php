<div class="container mt-5  text-center align-middle">
  <h1><?= ($evento) ?></h1>
  <hr>
  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 g-4">
    <div class="col">
      <a data-bs-toggle="modal" data-bs-target="#nuevaordenModal">
        <div class="card">
          <img src="<?= ($BASE) ?>/assets/img/021-restaurant.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Crear Orden</h5>
            <p class="card-text"></p>
          </div>
        </div>
      </a>
    </div>

    <div class="col">
      <a data-bs-toggle="offcanvas" data-bs-target="#pendientesModal" role="button" aria-controls="pendientesModal">
        <div class="card">
          <h5><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            1
           <span class="visually-hidden">unread messages</span>
         </span></h5>
         <img src="<?= ($BASE) ?>/assets/img/007-order.png" class="card-img-top" alt="...">
         <div class="card-body">
          <h5 class="card-title">Órdenes Pendientes</h5>
          <p class="card-text"></p>
        </div>
      </div>
    </a>
  </div>

  <div class="col">
   <a data-bs-toggle="offcanvas" data-bs-target="#gananciasModas" role="button" aria-controls="gananciasModas">
    <div class="card">
      <img src="<?= ($BASE) ?>/assets/img/034-sales.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Ventas</h5>
        <p class="card-text"></p>
      </div>
    </div>
  </a>
</div>
</div>

</div>