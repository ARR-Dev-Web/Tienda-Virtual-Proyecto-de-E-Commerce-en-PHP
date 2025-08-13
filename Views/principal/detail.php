<?php include_once 'Views/template-principal/header.php'; ?>

        <section class="bg-light">
            <div class="container pb-5">
                <div class="row">
                    <div class="col-lg-5 mt-5">
                        <div class="card mb-3">
                            <img class="card-img img-fluid" src="<?php echo BASE_URL; ?>assets/img/product_single_02.jpg" alt="Card image cap" id="product-detail">
                        </div>
                        <div class="row">

                            <div class="col-1 align-self-center">
                                <a href="#multi-item-example" role="button" data-bs-slide="prev">
                                    <svg id="Layer_1" enable-background="new 0 0 100 100" viewBox="0 0 100 100" width="30" height="30" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m10.75 50c0 18.266 13.129 34.562 31.007 38.383 8.933 1.909 18.432.623 26.516-3.636 7.778-4.099 14.066-10.819 17.629-18.859 3.707-8.363 4.353-17.964 1.825-26.754-2.438-8.48-7.789-15.999-14.972-21.118-15.017-10.703-36.11-9.272-49.567 3.32-7.887 7.379-12.438 17.862-12.438 28.664zm20.446-2.12 10.961-10.96c2.735-2.736 6.979 1.507 4.242 4.243l-5.506 5.505h25.458c1.816 0 3.332 1.517 3.332 3.333s-1.516 3.333-3.332 3.333h-25.585l5.398 5.529c2.699 2.762-1.583 6.966-4.293 4.191l-10.7-10.958c-1.148-1.174-1.137-3.054.025-4.216z" fill="#000000" style="fill: rgb(89, 171, 110);"></path>
                                    </svg>
                                    <span class="sr-only">Anterior</span>
                                </a>
                            </div>

                            <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">

                                <div class="carousel-inner product-links-wap" role="listbox">

                                    <div class="carousel-item active">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo BASE_URL; ?>assets/img/product_single_01.jpg" alt="Product Image 1">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo BASE_URL; ?>assets/img/product_single_02.jpg" alt="Product Image 2">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo BASE_URL; ?>assets/img/product_single_03.jpg" alt="Product Image 3">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo BASE_URL; ?>assets/img/product_single_04.jpg" alt="Product Image 4">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo BASE_URL; ?>assets/img/product_single_05.jpg" alt="Product Image 5">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo BASE_URL; ?>assets/img/product_single_06.jpg" alt="Product Image 6">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <div class="row">
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo BASE_URL; ?>assets/img/product_single_07.jpg" alt="Product Image 7">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo BASE_URL; ?>assets/img/product_single_08.jpg" alt="Product Image 8">
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <a href="#">
                                                    <img class="card-img img-fluid" src="<?php echo BASE_URL; ?>assets/img/product_single_09.jpg" alt="Product Image 9">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-1 align-self-center">
                                <a href="#multi-item-example" role="button" data-bs-slide="next">
                                    <svg id="Layer_1" enable-background="new 0 0 100 100" viewBox="0 0 100 100" width="30" height="30" xmlns="http://www.w3.org/2000/svg">
                                        <path d="m50 10.75c-18.266 0-34.562 13.129-38.383 31.007-1.909 8.933-.623 18.432 3.636 26.515 4.099 7.779 10.819 14.066 18.859 17.629 8.363 3.707 17.964 4.353 26.754 1.825 8.48-2.438 15.999-7.789 21.118-14.972 10.703-15.017 9.272-36.111-3.32-49.567-7.38-7.886-17.862-12.437-28.664-12.437zm18.829 41.347-10.7 10.958c-2.709 2.775-6.991-1.429-4.293-4.191l5.399-5.529h-25.586c-1.817 0-3.333-1.517-3.333-3.333s1.517-3.333 3.333-3.333h25.458l-5.506-5.505c-2.736-2.736 1.506-6.979 4.242-4.243l10.961 10.96c1.162 1.161 1.173 3.041.025 4.216z" fill="#000000" style="fill: rgb(89, 171, 110);"></path>
                                    </svg>
                                    <span class="sr-only">Siguiente</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h1 class="h2"><?php echo $data['producto']['nombre']; ?></h1>
                                <p class="h3 py-2"><?php echo MONEDA . ' ' . $data['producto']['precio']; ?></p>
                                <p class="py-2">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 411.909 411.909" style="enable-background:new 0 0 411.909 411.909;" xml:space="preserve"><g id="XMLID_1_">
                                    <path id="XMLID_2086_" style="fill:#FFD422;" d="M190.421,18.888c2.918-5.912,8.939-9.656,15.533-9.656s12.615,3.743,15.533,9.656 l54.26,109.943l121.33,17.63c6.525,0.948,11.945,5.518,13.983,11.789c2.037,6.271,0.338,13.154-4.383,17.756l-87.795,85.579 l20.726,120.839c1.115,6.498-1.557,13.066-6.891,16.941c-5.334,3.875-12.406,4.387-18.242,1.318L205.955,343.63L97.433,400.685 c-5.836,3.068-12.908,2.557-18.242-1.318c-5.334-3.875-8.005-10.443-6.891-16.941l20.726-120.84L5.231,176.007 c-4.721-4.602-6.421-11.486-4.383-17.756c2.037-6.271,7.458-10.841,13.983-11.789l121.33-17.63L190.421,18.888z"/>
                                    <path id="XMLID_868_" style="fill:#EEBF00;" d="M411.059,158.251c-2.037-6.271-7.458-10.841-13.983-11.789l-121.33-17.63 l-54.26-109.943c-2.918-5.912-8.939-9.656-15.533-9.656c-1.155,0,0,334.4,0,334.4l108.521,57.053 c5.836,3.068,12.908,2.557,18.242-1.318c5.334-3.876,8.005-10.443,6.891-16.941l-20.726-120.84l87.795-85.579 C411.398,171.405,413.097,164.521,411.059,158.251z"/></g>
                                </svg>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 411.909 411.909" style="enable-background:new 0 0 411.909 411.909;" xml:space="preserve"><g id="XMLID_1_">
                                    <path id="XMLID_2086_" style="fill:#FFD422;" d="M190.421,18.888c2.918-5.912,8.939-9.656,15.533-9.656s12.615,3.743,15.533,9.656 l54.26,109.943l121.33,17.63c6.525,0.948,11.945,5.518,13.983,11.789c2.037,6.271,0.338,13.154-4.383,17.756l-87.795,85.579 l20.726,120.839c1.115,6.498-1.557,13.066-6.891,16.941c-5.334,3.875-12.406,4.387-18.242,1.318L205.955,343.63L97.433,400.685 c-5.836,3.068-12.908,2.557-18.242-1.318c-5.334-3.875-8.005-10.443-6.891-16.941l20.726-120.84L5.231,176.007 c-4.721-4.602-6.421-11.486-4.383-17.756c2.037-6.271,7.458-10.841,13.983-11.789l121.33-17.63L190.421,18.888z"/>
                                    <path id="XMLID_868_" style="fill:#EEBF00;" d="M411.059,158.251c-2.037-6.271-7.458-10.841-13.983-11.789l-121.33-17.63 l-54.26-109.943c-2.918-5.912-8.939-9.656-15.533-9.656c-1.155,0,0,334.4,0,334.4l108.521,57.053 c5.836,3.068,12.908,2.557,18.242-1.318c5.334-3.876,8.005-10.443,6.891-16.941l-20.726-120.84l87.795-85.579 C411.398,171.405,413.097,164.521,411.059,158.251z"/></g>
                                </svg>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 411.909 411.909" style="enable-background:new 0 0 411.909 411.909;" xml:space="preserve"><g id="XMLID_1_">
                                    <path id="XMLID_2086_" style="fill:#FFD422;" d="M190.421,18.888c2.918-5.912,8.939-9.656,15.533-9.656s12.615,3.743,15.533,9.656 l54.26,109.943l121.33,17.63c6.525,0.948,11.945,5.518,13.983,11.789c2.037,6.271,0.338,13.154-4.383,17.756l-87.795,85.579 l20.726,120.839c1.115,6.498-1.557,13.066-6.891,16.941c-5.334,3.875-12.406,4.387-18.242,1.318L205.955,343.63L97.433,400.685 c-5.836,3.068-12.908,2.557-18.242-1.318c-5.334-3.875-8.005-10.443-6.891-16.941l20.726-120.84L5.231,176.007 c-4.721-4.602-6.421-11.486-4.383-17.756c2.037-6.271,7.458-10.841,13.983-11.789l121.33-17.63L190.421,18.888z"/>
                                    <path id="XMLID_868_" style="fill:#EEBF00;" d="M411.059,158.251c-2.037-6.271-7.458-10.841-13.983-11.789l-121.33-17.63 l-54.26-109.943c-2.918-5.912-8.939-9.656-15.533-9.656c-1.155,0,0,334.4,0,334.4l108.521,57.053 c5.836,3.068,12.908,2.557,18.242-1.318c5.334-3.876,8.005-10.443,6.891-16.941l-20.726-120.84l87.795-85.579 C411.398,171.405,413.097,164.521,411.059,158.251z"/></g>
                                </svg>
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 411.909 411.909" style="enable-background:new 0 0 411.909 411.909;" xml:space="preserve"><g id="XMLID_1_">
                                    <path id="XMLID_2086_" style="fill:#FFD422;" d="M190.421,18.888c2.918-5.912,8.939-9.656,15.533-9.656s12.615,3.743,15.533,9.656 l54.26,109.943l121.33,17.63c6.525,0.948,11.945,5.518,13.983,11.789c2.037,6.271,0.338,13.154-4.383,17.756l-87.795,85.579 l20.726,120.839c1.115,6.498-1.557,13.066-6.891,16.941c-5.334,3.875-12.406,4.387-18.242,1.318L205.955,343.63L97.433,400.685 c-5.836,3.068-12.908,2.557-18.242-1.318c-5.334-3.875-8.005-10.443-6.891-16.941l20.726-120.84L5.231,176.007 c-4.721-4.602-6.421-11.486-4.383-17.756c2.037-6.271,7.458-10.841,13.983-11.789l121.33-17.63L190.421,18.888z"/>
                                    <path id="XMLID_868_" style="fill:#EEBF00;" d="M411.059,158.251c-2.037-6.271-7.458-10.841-13.983-11.789l-121.33-17.63 l-54.26-109.943c-2.918-5.912-8.939-9.656-15.533-9.656c-1.155,0,0,334.4,0,334.4l108.521,57.053 c5.836,3.068,12.908,2.557,18.242-1.318c5.334-3.876,8.005-10.443,6.891-16.941l-20.726-120.84l87.795-85.579 C411.398,171.405,413.097,164.521,411.059,158.251z"/></g>
                                </svg>
                                    <span class="list-inline-item text-dark">Puntuación 4 | 36 Comentarios</span>
                                </p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <h6>Categoria:</h6>
                                    </li>
                                    <li class="list-inline-item">
                                        <p class="text-muted"><strong><?php echo $data['producto']['categoria']; ?></strong></p>
                                    </li>
                                </ul>

                                <h6>Descripción:</h6>
                                <p><?php echo $data['producto']['descripcion']; ?></p>

                                <form action="" method="GET">
                                    <input type="hidden" name="product-title" value="Activewear">
                                    <div class="row">
                                        <div class="col-auto">
                                            <ul class="list-inline pb-3">
                                                <li class="list-inline-item text-right">
                                                    Cantidad
                                                    <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                                </li>
                                                <li class="list-inline-item"><span class="btn btn-success btn-sm" id="btn-minus">-</span></li>
                                                <li class="list-inline-item"><span class="badge bg-success" id="var-value">1</span></li>
                                                <li class="list-inline-item"><span class="btn btn-success btn-sm" id="btn-plus">+</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row pb-3">
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg" name="submit" value="buy">Comprar</button>
                                        </div>
                                        <div class="col d-grid">
                                            <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Agregar al carrito</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row text-left p-2 pb-3">
                    <h4>Related Products</h4>
                </div>

                <!--Start Carousel Wrapper-->
                <div id="carousel-related-product">

                    <div class="p-2 pb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL; ?>assets/img/shop_08.jpg">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">Red Clothing</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$20.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 pb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL; ?>assets/img/shop_09.jpg">
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
                                            <a class="btn btn-success text-white  my-3" href="shop-single.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="btn btn-success text-white" href="shop-single.html">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">White Shirt</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$25.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 pb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL; ?>assets/img/shop_10.jpg">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$45.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 pb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL; ?>assets/img/shop_11.jpg">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">Black Fashion</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$60.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 pb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL; ?>assets/img/shop_08.jpg">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li class="">M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$80.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 pb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL; ?>assets/img/shop_09.jpg">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$110.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 pb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL; ?>assets/img/shop_10.jpg">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$125.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 pb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL; ?>assets/img/shop_11.jpg">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$160.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 pb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL; ?>assets/img/shop_08.jpg">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$180.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 pb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL; ?>assets/img/shop_09.jpg">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$220.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 pb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL; ?>assets/img/shop_10.jpg">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$250.00</p>
                            </div>
                        </div>
                    </div>

                    <div class="p-2 pb-3">
                        <div class="product-wap card rounded-0">
                            <div class="card rounded-0">
                                <img class="card-img rounded-0 img-fluid" src="<?php echo BASE_URL; ?>assets/img/shop_11.jpg">
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
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
                                                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0"/>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <a href="shop-single.html" class="h3 text-decoration-none">Oupidatat non</a>
                                <ul class="w-100 list-unstyled d-flex justify-content-between mb-0">
                                    <li>M/L/X/XL</li>
                                    <li class="pt-2">
                                        <span class="product-color-dot color-dot-red float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-blue float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-black float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-light float-left rounded-circle ml-1"></span>
                                        <span class="product-color-dot color-dot-green float-left rounded-circle ml-1"></span>
                                    </li>
                                </ul>
                                <ul class="list-unstyled d-flex justify-content-center mb-1">
                                    <li>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" x="0px" y="0px" viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;" xml:space="preserve">
                                            <path style="fill:#FEDB41;" d="M499.167,186.812l-158.144-23.105L268.502,20.568c-2.7-5.1-8.103-7.502-13.503-7.502 s-10.803,2.402-13.503,7.502l-70.522,143.14L12.832,186.812c-12.3,1.8-17.103,16.805-8.399,25.508l114.329,111.63L91.757,481.192 c-2.103,12.304,10.799,21.607,21.905,15.905l141.337-74.421l143.338,74.421c11.107,6.002,24.007-3.601,21.905-15.905L393.238,323.95 l114.329-111.63C516.27,203.616,511.467,188.612,499.167,186.812z"/>
                                            <path style="fill:#FFCC33;" d="M507.566,212.32L393.238,323.95l27.004,157.242c2.103,12.304-10.799,21.907-21.905,15.905 l-143.338-74.421V13.066c5.399,0,10.803,2.402,13.503,7.502l72.523,143.14l158.144,23.105 C511.467,188.612,516.27,203.616,507.566,212.32z"/>
                                        </svg>
                                    </li>
                                </ul>
                                <p class="text-center mb-0">$300.00</p>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </section>

        <?php include_once 'Views/template-principal/footer.php'; ?>

        <script src="<?php echo BASE_URL; ?>assets/js/slick.min.js"></script>
        <script>
            $('#carousel-related-product').slick({
                infinite: true,
                arrows: false,
                slidesToShow: 4,
                slidesToScroll: 3,
                dots: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 3
                        }
                    }
                ]
            });
        </script>

    </body>

</html>