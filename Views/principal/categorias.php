<?php include_once 'Views/template-principal/header.php'; ?>

<!-- <div class="container">
    <div class="row">
        <div class="col-12">
            
        </div>
    </div>
</div>
Fin código de debug -->

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list-inline shop-top-menu pb-3 pt-1">
                            <li class="list-inline-item">
                                <a class="h3 text-dark text-decoration-none mr-3" href="#">Productos</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($data['productos'] as $producto) { ?>
                        <div class="col-md-3">
                            <div class="card mb-4 product-wap rounded-0">
                                <div class="card rounded-0">
                                    <img class="card-img rounded-0 img-fluid" src="<?php echo $producto['imagen']; ?>">
                                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a class="btn btn-success text-white" href="shop-single.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="btn btn-success text-white my-3" href="shop-single.html">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="btn btn-success text-white" href="shop-single.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                                                </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a href="shop-single.html" class="h3 text-decoration-none"><?php echo $producto['nombre']; ?></a>
                                    <p class="text-center mb-0"><?php echo MONEDA . ' ' .$producto['precio']; ?></p>
                                </div>  
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="row">
                    <?php if ($data['total'] > 1) { ?>
                        <ul class="pagination justify-content-center">
                            <?php
                            $anterior = $data['pagina'] - 1;
                            $siguiente = $data['pagina'] + 1;
                            if ($data['pagina'] > 1) { ?>
                                <li class="page-item">
                                    <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0"
                                        href="<?php echo BASE_URL . 'principal/categorias/' . $data['id_categoria'] . ',' . $anterior; ?>">
                                        Anterior
                                    </a>
                                </li>
                            <?php } if ($data['total'] >= $siguiente) { ?>
                            <li class="page-item">
                                <a class="page-link active rounded-0 mr-3 shadow-sm border-top-0 border-left-0 text-white"
                                    href="<?php echo BASE_URL . 'principal/categorias/' . $data['id_categoria'] . ',' . $siguiente; ?>">
                                    Siguiente
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
              </div>
            </div>
          </div>

    <?php include_once 'Views/template-principal/footer.php'; ?>
</body>

</html> 