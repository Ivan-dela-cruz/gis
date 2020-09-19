<!DOCTYPE HTML>
<html lang="en">
<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8">
    <title>GIS ECUCIENCIA</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="robots" content="index, follow"/>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <!--=============== css  ===============-->
    <link type="text/css" rel="stylesheet" href="css/reset.css">
    <link type="text/css" rel="stylesheet" href="css/plugins.css">
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link type="text/css" rel="stylesheet" href="css/color.css">
    <!--=============== favicons ===============-->
    <link rel="shortcut icon" href="images/favicon.ico">
</head>
<body>
<!--loader-->
<div class="loader-wrap">
    <div class="pin"></div>
    <div class="pulse"></div>
</div>
<!--loader end-->
<!-- Main  -->
<div id="main">
    <!-- header-->
    <header class="main-header dark-header fs-header sticky">
        <div class="header-inner">
            <div class="logo-holder">
                <a href="#"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="header-search vis-header-search">
                <div class="header-search-input-item">
                    <input type="text" placeholder="Palabras clave" value=""/>
                </div>
                <div class="header-search-select-item">
                    <select data-placeholder="Todas las categorías" class="chosen-select">
                        <option>Todas las categorías</option>
                        <option>Artículos</option>
                        <option>Revistas</option>
                        <option>Ivestigadores</option>
                        <option>Ponencias</option>
                        <option>Libros</option>
                    </select>
                </div>
                <button class="header-search-button" onclick="window.location.href='listing.html'">Buscar</button>
            </div>
            <div class="show-search-button"><i class="fa fa-search"></i> <span>Buscar</span></div>

            <!-- nav-button-wrap-->
            <div class="nav-button-wrap color-bg">
                <div class="nav-button">
                    <span></span><span></span><span></span>
                </div>
            </div>
            <!-- nav-button-wrap end-->
            <!--  navigation -->
            <div class="nav-holder main-menu">

            </div>
            <!-- navigation  end -->
        </div>
    </header>
    <!--  header end -->
    <!-- wrapper -->
    <div id="wrapper">
        <div class="content">
            <!-- Map -->
            <div class="map-container column-map right-pos-map">
                <div id="map-main"></div>
                <ul class="mapnavigation">
                    <li><a href="#" class="prevmap-nav">Anterior</a></li>
                    <li><a href="#" class="nextmap-nav">Siguiente</a></li>
                </ul>
                <div class="scrollContorl mapnavbtn" title="Enable Scrolling"><span><i class="fa fa-lock"></i></span>
                </div>
            </div>
            <!-- Map end -->
            <!--col-list-wrap -->
            <div class="col-list-wrap left-list">
                <div class="listsearch-options fl-wrap" id="lisfw">
                    <div class="container">
                        <div class="listsearch-header fl-wrap">
                            <h3>Resultados: <span>Artículo académico</span></h3>
                            <div class="listing-view-layout">
                                <ul>
                                    <li><a class="grid active" href="#"><i class="fa fa-th-large"></i></a></li>
                                    <li><a class="list" href="#"><i class="fa fa-list-ul"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- listsearch-input-wrap  -->
                        <div class="listsearch-input-wrap fl-wrap">
                            <div class="listsearch-input-item">
                                <i class="mbri-key single-i"></i>
                                <input type="text" placeholder="Palabras clave?" value=""/>
                            </div>
                            <div class="listsearch-input-item">
                                <select data-placeholder="Location" class="chosen-select">
                                    <option>Todas las localizaciones</option>
                                    <option>Universidad</option>
                                    <option>Departamento</option>
                                    <option>Facultad</option>
                                    <option>Extensión</option>
                                    <option>Matriz</option>
                                </select>
                            </div>
                            <div class="listsearch-input-item">
                                <select data-placeholder="All Categories" class="chosen-select">
                                    <option>Todas las categorías</option>
                                    <option>Artículo</option>
                                    <option>Revista</option>
                                    <option>Libro</option>
                                    <option>Tesis</option>
                                    <option>Conferencia</option>
                                </select>
                            </div>
                            <div class="listsearch-input-text" id="autocomplete-container">
                                <label><i class="mbri-map-pin"></i> Ingrese la dirección </label>
                                <input type="text" placeholder="Destination , Area , Street" id="autocomplete-input"
                                       class="qodef-archive-places-search" value=""/>
                                <a href="#" class="loc-act qodef-archive-current-location"><i
                                        class="fa fa-dot-circle-o"></i></a>
                            </div>

                            <button class="button fs-map-btn">Actualizar</button>

                        </div>
                        <!-- listsearch-input-wrap end -->
                    </div>
                </div>
                <!-- list-main-wrap-->
                <div class="list-main-wrap fl-wrap card-listing">
                    <a class="custom-scroll-link back-to-filters btf-l" href="#lisfw"><i
                            class="fa fa-angle-double-up"></i><span>Volver a filtro anterior</span></a>
                    <div class="container">
                        <!-- listing-item -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <img src="images/all/8.png" alt="">
                                    <div class="overlay"></div>
                                    <div class="list-post-counter"><span>4</span><i class="fa fa-heart"></i></div>
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <a class="listing-geodir-category" href="listing.html">
                                        Artículo académico
                                    </a>
                                    <div class="listing-avatar"><a href="author-single.html"><img
                                            src="images/avatar/2.png" alt=""></a>
                                        <span class="avatar-tooltip">Publicado por   <strong>Lisa Smith</strong></span>
                                    </div>
                                    <h3><a href="#"> Volumen plaquetario medio como predictor de la mortalidad revisión
                                        sistemática y metanálisis.</a></h3>
                                    <p>Palabras clave : Mean Platelet Volume; Sepsis; Mortality; Systematic Review.</p>
                                    <div class="geodir-category-options fl-wrap">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <span>(7 vistas)</span>
                                        </div>
                                        <div class="geodir-category-location"><a href="#8" class="map-item"><i
                                                class="fa fa-map-marker" aria-hidden="true"></i> Laboratorios</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end-->
                        <!-- listing-item -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <img src="images/all/9.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="list-post-counter"><span>15</span><i class="fa fa-heart"></i></div>
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <a class="listing-geodir-category" href="#">Revista</a>
                                    <div class="listing-avatar"><a href="#"><img
                                            src="images/avatar/1.jpg" alt=""></a>
                                        <span class="avatar-tooltip">Publicado por  <strong>Mark Rose</strong></span>
                                    </div>
                                    <h3><a href="#">Cobertura de mamografía de tamizaje y plan decenal para el control
                                        de cáncer, Colombia 2014</a></h3>
                                    <p> Palbaras clave: Neoplasias de la mama; mamografía; tamizaje masivo.</p>
                                    <div class="geodir-category-options fl-wrap">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="4">
                                            <span>(17 vistas)</span>
                                        </div>
                                        <div class="geodir-category-location"><a href="#3" class="map-item"><i
                                                class="fa fa-map-marker" aria-hidden="true"></i> Centro de investigación</a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end-->
                        <div class="clearfix"></div>
                        <!-- listing-item -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <img src="images/all/10.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="list-post-counter"><span>553</span><i class="fa fa-heart"></i></div>
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <a class="listing-geodir-category" href="listing.html">Artículo</a>
                                    <div class="listing-avatar"><a href="author-single.html"><img
                                            src="images/avatar/1.jpg" alt=""></a>
                                        <span class="avatar-tooltip">Publicado por   <strong>Adam Koncy</strong></span>
                                    </div>
                                    <h3><a href="listing-single.html">JK-Meta-Biplot y STATIS Dual como herramientas de
                                        análisis de tablas textuales múltiples</a></h3>
                                    <p>Palabras clave: JK-Meta-Biplot; STATIS-Dual; Expresión Corporal;</p>
                                    <div class="geodir-category-options fl-wrap">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <span>(7 vistas)</span>
                                        </div>
                                        <div class="geodir-category-location"><a href="#0" class="map-item"><i
                                                class="fa fa-map-marker" aria-hidden="true"></i> Docentes CIYA</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <!-- listing-item end-->
                        <!-- listing-item -->
                        <div class="listing-item">
                            <article class="geodir-category-listing fl-wrap">
                                <div class="geodir-category-img">
                                    <img src="images/all/11.jpg" alt="">
                                    <div class="overlay"></div>
                                    <div class="list-post-counter"><span>47</span><i class="fa fa-heart"></i></div>
                                </div>
                                <div class="geodir-category-content fl-wrap">
                                    <a class="listing-geodir-category" href="listing.html">Tesis</a>
                                    <div class="listing-avatar"><a href="author-single.html"><img
                                            src="images/avatar/1.jpg" alt=""></a>
                                        <span class="avatar-tooltip">Publicado por  <strong>Alisa Noory</strong></span>
                                    </div>
                                    <h3><a href="listing-single.html"> Combinación de clasificadores para
                                        bioinformática</a></h3>
                                    <p>Palabras clave: Model classification, pattern recognition, learning,
                                        multi-classifiers. </p>
                                    <div class="geodir-category-options fl-wrap">
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5">
                                            <span>(23 vistas)</span>
                                        </div>
                                        <div class="geodir-category-location"><a href="#5" class="map-item"><i
                                                class="fa fa-map-marker" aria-hidden="true"></i> Departemento de
                                            desarrollo</a></div>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>
                    <a class="load-more-button" href="#">Cargar más <i class="fa fa-circle-o-notch"></i> </a>
                </div>
                <!-- list-main-wrap end-->
            </div>
            <!--col-list-wrap -->
            <div class="limit-box fl-wrap"></div>
            <!--section -->
            <section class="gradient-bg">
                <div class="cirle-bg">
                    <div class="bg" data-bg="images/bg/circle.png"></div>
                </div>
                <div class="container">
                    <div class="join-wrap fl-wrap">
                        <div class="row">
                            <div class="col-md-8">
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!--section end -->
        </div>
        <!--content end -->
    </div>
    <!-- wrapper end -->

</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCleF-ZlouBtXF3CASe-9p7HklGPAlW0zc&libraries=places&callback=initAutocomplete"></script>
<script type="text/javascript" src="js/map_infobox.js"></script>
<script type="text/javascript" src="js/markerclusterer.js"></script>
<script type="text/javascript" src="js/maps.js"></script>
</body>
</html>