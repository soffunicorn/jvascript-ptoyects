<!DOCTYPE html>
<html lang="en-USA" id="top" class="scrollspy">

<head>
    <?php include "layaouts/header.php"; ?>
</head>

<body class="white">
    <?php include "layaouts/nav.php"; ?>

    <div class="slider">
        <ul class="slides">
            <li class="overlay">
                <img src="img/data/banner1.jpg" class="parallax"> <!-- random image -->
                <div class="caption center-align">
                    <h3>¿Quieres comprar o alquilar?</h3>
                    <h4 class="light grey-text text-lighten-3"><b class="mensaje-1">DELUCCHI PROPIEDADES</b> <br>TIENE LA MEJOR OPCIÓN</h4>
                    <h5>El hogar que elegís</h5>
                    <center>
                        <a class="btn btn-delucchi btn-large" href="contacto.php">Contáctanos</a>
                    </center>
                </div>
            </li>
            <li class="overlay">
                <img src="img/data/banner2.jpg" class="parallax"> <!-- random image -->
                <div class="caption center-align">
                    <h3>¿Quieres comprar o alquilar?</h3>
                    <h4 class="light grey-text text-lighten-3"><b class="mensaje-1">DELUCCHI PROPIEDADES</b> <br>TIENE LA MEJOR OPCIÓN</h4>
                    <h5>El hogar que elegís</h5>
                    <center>
                        <a class="btn btn-delucchi btn-large" href="contacto.php">Contáctanos</a>
                    </center>
                </div>
            </li>
            <li class="overlay">
                <img src="img/data/banner3.jpg" class="parallax"> <!-- random image -->
                <div class="caption center-align">
                    <h3>¿Quieres comprar o alquilar?</h3>
                    <h4 class="light grey-text text-lighten-3"><b class="mensaje-1">DELUCCHI PROPIEDADES</b> <br>TIENE LA MEJOR OPCIÓN</h4>
                    <h5>El hogar que elegís</h5>
                    <center>
                        <a class="btn btn-delucchi btn-large" href="contacto.php">Contáctanos</a>
                    </center>
                </div>
            </li>
        </ul>
    </div>

    <div class="row row-principal">
        <div class="col s10 offset-s1">
            <div class="col s12">
                <h4 class="title">Encuentra tu hogar</h4>
            </div>
            <form class="col s12" autocomplete="off">
                <div class="row">
                    <div class="input-field col s12 m3 l3">
                        <select>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="1">Argentina</option>
                            <option value="2">Brasil</option>
                            <option value="3">Chile</option>
                        </select>
                        <label>Localización</label>
                    </div>

                    <div class="input-field col s12 m3 l3">
                        <select>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="1">La Plata</option>
                            <option value="2">Gran Buenos Aires</option>
                            <option value="3">Berisso</option>
                        </select>
                        <label>Sub Localización</label>
                    </div>

                    <div class="input-field col s12 m3 l3">
                        <select>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="1">Monoambiente</option>
                            <option value="2">1 Dormitorio</option>
                            <option value="3">2 Dormitorios</option>
                            <option value="4">3 Dormitorios</option>
                        </select>
                        <label>Dormitorios</label>
                    </div>

                    <div class="input-field col s12 m3 l3">
                        <select>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="1">1 Baño</option>
                            <option value="2">2 Baños</option>
                            <option value="3">3 Baños</option>
                        </select>
                        <label>Baños</label>
                    </div>

                    <div class="input-field col s12 m3 l3">
                        <input id="first_name" type="text" class="validate">
                        <label for="first_name">Metros Cuadrados</label>
                    </div>

                    <div class="input-field col s12 m3 l3">
                        <select>
                            <option value="" disabled selected>Selecciona una opción</option>
                            <option value="1">Alquiler</option>
                            <option value="2">Venta</option>
                        </select>
                        <label>Tipo</label>
                    </div>

                    <div class="col s12 m3 l3">
                        <label>Rango de Precio</label>
                        <p class="range-field">
                            <input type="range" id="test5" min="0" max="50000" />
                        </p>
                    </div>

                    <div class="col s12 m3 l3">
                        <center>
                            <button class="btn waves-effect waves-light btn-delucchi" type="submit" name="action" style="margin-top:20px;">Buscar Propiedad
                                <i class="material-icons left">search</i>
                            </button>
                        </center>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row grey lighten-5 row-space">
        <div class="col s10 offset-s1">
            <div class="col s12">
                <h4 class="title">Agregadas recientemente</h4>
            </div>

            <div class="col s12">
                <ul class="tabs transparent">
                    <li class="tab col s3"></li>
                    <li class="tab col s3"></li>
                    <li class="tab col s12 m3 l3"><a href="#ventas">Ventas</a></li>
                    <li class="tab col s12 m3 l3"><a href="#alquiler">Alquileres</a></li>
                </ul>
            </div>

            <div id="ventas" class="col s12">
                <div class="row">

                    <a href="propiedad.php">
                        <div class="col s12 m4 l4">
                            <div class="card item">
                                <div class="card-image item">
                                    <img src="img/data/propiedad1.jpg">
                                    <div class="item-overlay top"></div>
                                </div>
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col s12 m8 l8">
                                            <p class="title-properti white-text"><b>Radison de Villa</b></p>
                                            <p class="details-properti white-text"><i class="material-icons left">location_on</i>12 1st Ave, New York</p>
                                        </div>
                                        <div class="col s12 m4 l4 center">
                                            <p class="white-text">Venta</p>
                                            <p class="white-text">$40.000</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-action">
                                    <div class="row">
                                        <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Dimensiones">
                                            <p class="details-properti center"><i class="material-icons">home</i>
                                                <br> 93 m2</p>
                                        </div>

                                        <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Habitaciones">
                                            <p class="details-properti center"><i class="material-icons">local_hotel</i>
                                                <br>4</p>
                                        </div>

                                        <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Baños">
                                            <p class="details-properti center"><i class="material-icons">meeting_room</i>
                                                <br>2</p>
                                        </div>

                                        <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Estacionamiento">
                                            <p class="details-properti center"><i class="material-icons">directions_car</i>
                                                <br>1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="propiedad.php">
                        <div class="col s12 m4 l4">
                            <div class="card item">
                                <div class="card-image item">
                                    <img src="img/data/propiedad2.jpg">
                                    <div class="item-overlay top"></div>
                                </div>
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col s12 m8 l8">
                                            <p class="title-properti white-text"><b>Radison de Villa</b></p>
                                            <p class="details-properti white-text"><i class="material-icons left">location_on</i>12 1st Ave, New York</p>
                                        </div>
                                        <div class="col s12 m4 l4 center">
                                            <p class="white-text">Venta</p>
                                            <p class="white-text">$40.000</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-action">
                                    <div class="row">
                                        <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Dimensiones">
                                            <p class="details-properti center"><i class="material-icons">home</i>
                                                <br> 93 m2</p>
                                        </div>

                                        <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Habitaciones">
                                            <p class="details-properti center"><i class="material-icons">local_hotel</i>
                                                <br>4</p>
                                        </div>

                                        <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Baños">
                                            <p class="details-properti center"><i class="material-icons">meeting_room</i>
                                                <br>2</p>
                                        </div>

                                        <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Estacionamiento">
                                            <p class="details-properti center"><i class="material-icons">directions_car</i>
                                                <br>1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="propiedad.php">
                        <div class="col s12 m4 l4">
                            <div class="card item">
                                <div class="card-image item">
                                    <img src="img/data/propiedad3.jpg">
                                    <div class="item-overlay top"></div>
                                </div>
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col s12 m8 l8">
                                            <p class="title-properti white-text"><b>Radison de Villa</b></p>
                                            <p class="details-properti white-text"><i class="material-icons left">location_on</i>12 1st Ave, New York</p>
                                        </div>
                                        <div class="col s12 m4 l4 center">
                                            <p class="white-text">Venta</p>
                                            <p class="white-text">$40.000</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-action">
                                    <div class="row">
                                        <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Dimensiones">
                                            <p class="details-properti center"><i class="material-icons">home</i>
                                                <br> 93 m2</p>
                                        </div>

                                        <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Habitaciones">
                                            <p class="details-properti center"><i class="material-icons">local_hotel</i>
                                                <br>4</p>
                                        </div>

                                        <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Baños">
                                            <p class="details-properti center"><i class="material-icons">meeting_room</i>
                                                <br>2</p>
                                        </div>

                                        <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Estacionamiento">
                                            <p class="details-properti center"><i class="material-icons">directions_car</i>
                                                <br>1</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <div id="alquiler" class="col s12">
                <a href="propiedad.php">
                    <div class="col s12 m4 l4">
                        <div class="card item">
                            <div class="card-image item">
                                <img src="img/data/propiedad4.jpg">
                                <div class="item-overlay top"></div>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12 m8 l8">
                                        <p class="title-properti white-text"><b>Radison de Villa</b></p>
                                        <p class="details-properti white-text"><i class="material-icons left">location_on</i>12 1st Ave, New York</p>
                                    </div>
                                    <div class="col s12 m4 l4 center">
                                        <p class="white-text">Alquiler</p>
                                        <p class="white-text">$10.000</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-action">
                                <div class="row">
                                    <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Dimensiones">
                                        <p class="details-properti center"><i class="material-icons">home</i>
                                            <br> 93 m2</p>
                                    </div>

                                    <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Habitaciones">
                                        <p class="details-properti center"><i class="material-icons">local_hotel</i>
                                            <br>4</p>
                                    </div>

                                    <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Baños">
                                        <p class="details-properti center"><i class="material-icons">meeting_room</i>
                                            <br>2</p>
                                    </div>

                                    <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Estacionamiento">
                                        <p class="details-properti center"><i class="material-icons">directions_car</i>
                                            <br>1</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="propiedad.php">
                    <div class="col s12 m4 l4">
                        <div class="card item">
                            <div class="card-image item">
                                <img src="img/data/propiedad5.jpg">
                                <div class="item-overlay top"></div>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12 m8 l8">
                                        <p class="title-properti white-text"><b>Radison de Villa</b></p>
                                        <p class="details-properti white-text"><i class="material-icons left">location_on</i>12 1st Ave, New York</p>
                                    </div>
                                    <div class="col s12 m4 l4 center">
                                        <p class="white-text">Alquiler</p>
                                        <p class="white-text">$10.000</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-action">
                                <div class="row">
                                    <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Dimensiones">
                                        <p class="details-properti center"><i class="material-icons">home</i>
                                            <br> 93 m2</p>
                                    </div>

                                    <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Habitaciones">
                                        <p class="details-properti center"><i class="material-icons">local_hotel</i>
                                            <br>4</p>
                                    </div>

                                    <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Baños">
                                        <p class="details-properti center"><i class="material-icons">meeting_room</i>
                                            <br>2</p>
                                    </div>

                                    <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Estacionamiento">
                                        <p class="details-properti center"><i class="material-icons">directions_car</i>
                                            <br>1</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="propiedad.php">
                    <div class="col s12 m4 l4">
                        <div class="card item">
                            <div class="card-image item">
                                <img src="img/data/propiedad6.jpg">
                                <div class="item-overlay top"></div>
                            </div>
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12 m8 l8">
                                        <p class="title-properti white-text"><b>Radison de Villa</b></p>
                                        <p class="details-properti white-text"><i class="material-icons left">location_on</i>12 1st Ave, New York</p>
                                    </div>
                                    <div class="col s12 m4 l4 center">
                                        <p class="white-text">Alquiler</p>
                                        <p class="white-text">$10.000</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-action">
                                <div class="row">
                                    <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Dimensiones">
                                        <p class="details-properti center"><i class="material-icons">home</i>
                                            <br> 93 m2</p>
                                    </div>

                                    <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Habitaciones">
                                        <p class="details-properti center"><i class="material-icons">local_hotel</i>
                                            <br>4</p>
                                    </div>

                                    <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Baños">
                                        <p class="details-properti center"><i class="material-icons">meeting_room</i>
                                            <br>2</p>
                                    </div>

                                    <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Estacionamiento">
                                        <p class="details-properti center"><i class="material-icons">directions_car</i>
                                            <br>1</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="row row-space">
        <div class="col s10 offset-s1">
            <div class="col s12">
                <h4 class="title">Bienvenido a Delucchi Propiedades</h4>
                <p><b>Con prioridades en nuestros clientes</b></p>
                <div class="col s12 m7 l7">
                    <p align="justify">Is the best theme for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo equat. eiusmod tempor dolor sit amet, conse ctetur adipiscing elit</p>
                    <br>

                    <div class="col s12 m2 l2">
                        <center>
                            <i class="material-icons extra-icons">attach_money</i>
                        </center>
                    </div>

                    <div class="col s12 m4 l4">
                        <p><b>Low Cost</b></p>
                        <p>Low cost provides yur best for elit, sed do eiusmod tempe</p>
                    </div>

                    <div class="col s12 m2 l2">
                        <center>
                            <i class="material-icons extra-icons">pie_chart</i>
                        </center>
                    </div>

                    <div class="col s12 m4 l4">
                        <p><b>Good Marketing</b></p>
                        <p>Low cost provides yur best for elit, sed do eiusmod tempe</p>
                    </div>

                    <div class="col s12 m2 l2">
                        <center>
                            <i class="material-icons extra-icons">search</i>
                        </center>
                    </div>

                    <div class="col s12 m4 l4">
                        <p><b>Easy to Find</b></p>
                        <p>Low cost provides yur best for elit, sed do eiusmod tempe</p>
                    </div>

                    <div class="col s12 m2 l2">
                        <center>
                            <i class="material-icons extra-icons">monetization_on</i>
                        </center>
                    </div>

                    <div class="col s12 m4 l4">
                        <p><b>Reliable</b></p>
                        <p>Low cost provides yur best for elit, sed do eiusmod tempe</p>
                    </div>
                </div>

                <div class="col s12 m5 l5">
                    <img src="img/data/step06.jpg" class="img-content">
                </div>
            </div>
        </div>
    </div>

    <div class="row grand">
        <div class="col s12 color-row">
            <div class="col s10 offset-s1">
                <div class="col s12 m4 l4">
                    <div class="col s12 m6 l6">
                        <i class="material-icons extra-icons-2 amber-text right">
                            vpn_key
                        </i>
                    </div>

                    <div class="col s12 m6 l6 center">
                        <h4 class="white-text">450</h4>
                    </div>

                    <div class="col s12">
                        <h5 class="white-text center">Propiedades Vendidas</h5>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <div class="col s12 m6 l6">
                        <i class="material-icons extra-icons-2 amber-text right">
                            sentiment_satisfied_alt
                        </i>
                    </div>

                    <div class="col s12 m6 l6">
                        <h4 class="white-text center">500</h4>
                    </div>

                    <div class="col s12">
                        <h5 class="white-text center">Clientes Satisfechos</h5>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <div class="col s12 m6 l6">
                        <i class="material-icons extra-icons-2 amber-text right">
                            home
                        </i>
                    </div>

                    <div class="col s12 m6 l6">
                        <h4 class="white-text center">800</h4>
                    </div>

                    <div class="col s12">
                        <h5 class="white-text center">Propiedades Disponibles</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="row row-space">
        <div class="col s10 offset-s1">
            <div class="col s12">
                <h4 class="title center">Nuestros Servicios</h4>
                <p class="center"><b>Garantizamos lo mejor para nuestros clientes</b></p>
                <br><br>
                <p align="center">Haven the best theme for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation.</p>
                <br><br>
                <div class="col s12 m4 l4">
                    <h5><i class="fas fa-hand-holding-usd size-icon"></i> <b>Buy Property</b></h5>
                    <p>Haven the best theme for elit, sed do eiumod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                    <br>
                    <h5><i class="fas fa-building size-icon"></i> <b>Sale Property</b></h5>
                    <p>Haven the best theme for elit, sed do eiumod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                </div>

                <div class="col s12 m4 l4">
                    <img src="img/data/shutterstock_360535736.jpg" class="img-content">
                </div>

                <div class="col s12 m4 l4">
                    <h5><i class="fas fa-key size-icon"></i> <b>Rent a Property</b></h5>
                    <p>Haven the best theme for elit, sed do eiumod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                    <br>
                    <h5><i class="fas fa-mobile size-icon"></i> <b>Recober Sale Property</b></h5>
                    <p>Haven the best theme for elit, sed do eiumod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row grey lighten-5 row-space">
        <div class="col s10 offset-s1">
            <h4 class="title center">Conoce a nuestros Agentes</h4>
            <br>
            <p class="center">Haven the best theme for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation.</p>
            <br><br><br>

            <a href="agenteprofile.php">
                <div class="col s12 m3 l3">
                    <div class="card item">
                        <div class="card-image item">
                            <img src="img/data/profile1.jpg" class="perfile">
                            <div class="item-overlay top"></div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 center">
                                    <p class="title-properti white-text"><b>Stephen De Smith</b></p>
                                    <p class="details-properti white-text">Real Estate Agent</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-action">
                            <div class="row">
                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Ver perfil">
                                    <p class="details-properti center"><i class="material-icons">person_pin</i></p>
                                </div>

                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="@agentedelucchi">
                                    <p class="details-properti center"><i class="fab fa-instagram size-icon-agente"></i></p>
                                </div>

                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Agente Delucchi">
                                    <p class="details-properti center"><i class="fab fa-facebook size-icon-agente"></i></p>
                                </div>

                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="agente@delucchipropiedades.com">
                                    <p class="details-properti center"><i class="material-icons">email</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="agenteprofile.php">
                <div class="col s12 m3 l3">
                    <div class="card item">
                        <div class="card-image item">
                            <img src="img/data/profile2.jpg" class="perfile">
                            <div class="item-overlay top"></div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 center">
                                    <p class="title-properti white-text"><b>Stephen De Smith</b></p>
                                    <p class="details-properti white-text">Real Estate Agent</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-action">
                            <div class="row">
                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Ver perfil">
                                    <p class="details-properti center"><i class="material-icons">person_pin</i></p>
                                </div>

                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="@agentedelucchi">
                                    <p class="details-properti center"><i class="fab fa-instagram size-icon-agente"></i></p>
                                </div>

                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Agente Delucchi">
                                    <p class="details-properti center"><i class="fab fa-facebook size-icon-agente"></i></p>
                                </div>

                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="agente@delucchipropiedades.com">
                                    <p class="details-properti center"><i class="material-icons">email</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="agenteprofile.php">
                <div class="col s12 m3 l3">
                    <div class="card item">
                        <div class="card-image item">
                            <img src="img/data/profile3.jpg" class="perfile">
                            <div class="item-overlay top"></div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 center">
                                    <p class="title-properti white-text"><b>Stephen De Smith</b></p>
                                    <p class="details-properti white-text">Real Estate Agent</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-action">
                            <div class="row">
                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Ver perfil">
                                    <p class="details-properti center"><i class="material-icons">person_pin</i></p>
                                </div>

                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="@agentedelucchi">
                                    <p class="details-properti center"><i class="fab fa-instagram size-icon-agente"></i></p>
                                </div>

                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Agente Delucchi">
                                    <p class="details-properti center"><i class="fab fa-facebook size-icon-agente"></i></p>
                                </div>

                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="agente@delucchipropiedades.com">
                                    <p class="details-properti center"><i class="material-icons">email</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>

            <a href="agenteprofile.php">
                <div class="col s12 m3 l3">
                    <div class="card item">
                        <div class="card-image item">
                            <img src="img/data/profile4.jpg" class="perfile">
                            <div class="item-overlay top"></div>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col s12 center">
                                    <p class="title-properti white-text"><b>Stephen De Smith</b></p>
                                    <p class="details-properti white-text">Real Estate Agent</p>
                                </div>
                            </div>
                        </div>

                        <div class="card-action">
                            <div class="row">
                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Ver perfil">
                                    <p class="details-properti center"><i class="material-icons">person_pin</i></p>
                                </div>

                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="@agentedelucchi">
                                    <p class="details-properti center"><i class="fab fa-instagram size-icon-agente"></i></p>
                                </div>

                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="Agente Delucchi">
                                    <p class="details-properti center"><i class="fab fa-facebook size-icon-agente"></i></p>
                                </div>

                                <div class="col s3 m3 l3 tooltipped" data-position="top" data-tooltip="agente@delucchipropiedades.com">
                                    <p class="details-properti center"><i class="material-icons">email</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <div class="row row-space">
        <div class="col s10 offset-s1">
            <h4 class="title center">Últimos artículos en nuestro Blog</h4>
            <br><br>
            <div class="col s12 m4 l4">
                <div class="card grey lighten-3">
                    <div class="card-image">
                        <img src="img/data/propiedad8.jpg">
                        <span class="card-title">20 de Marzo</span>
                    </div>
                    <div class="card-content">
                        <p><b>New Duplex Villa design with Latest Altra Concept</b></p>
                        <p>Haven the best theme for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eismod tempor incididunt...</p>
                    </div>
                    <div class="card-action">
                        <a href="articulo.php">Leer artículo</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m4 l4">
                <div class="card grey lighten-3">
                    <div class="card-image">
                        <img src="img/data/propiedad2.jpg">
                        <span class="card-title">20 de Marzo</span>
                    </div>
                    <div class="card-content">
                        <p><b>New Duplex Villa design with Latest Altra Concept</b></p>
                        <p>Haven the best theme for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eismod tempor incididunt...</p>
                    </div>
                    <div class="card-action">
                        <a href="articulo.php">Leer artículo</a>
                    </div>
                </div>
            </div>

            <div class="col s12 m4 l4">
                <div class="card grey lighten-3">
                    <div class="card-image">
                        <img src="img/data/propiedad6.jpg">
                        <span class="card-title">20 de Marzo</span>
                    </div>
                    <div class="card-content">
                        <p><b>New Duplex Villa design with Latest Altra Concept</b></p>
                        <p>Haven the best theme for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eismod tempor incididunt...</p>
                    </div>
                    <div class="card-action">
                        <a href="articulo.php">Leer artículo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-space grey lighten-4">
        <div class="col s10 offset-s1">
            <h4 class="title center">Recomendaciones de nuestros clientes</h4>
            <br><br><br>
            <div class="col s12 m4 l4 comment">
                <div class="card white">
                    <div class="card-image">
                        <a class="btn-floating halfway-fab left red pic"><img src="img/data/18301676_10212806910950616_5586717436909030551_n.jpg"></a>
                    </div>
                    <div class="card-content">
                        <br>
                        <p>Excelente inmobiliaria, muy buena atención y siempre atendiendo las necesidades de los inquilinos.</p>
                        <br>
                        <p align="right" class="comment-au">Ezequiel Chule Fernández</p>
                    </div>

                </div>
            </div>

            <div class="col s12 m4 l4 comment">
                <div class="card white">
                    <div class="card-image">
                        <a class="btn-floating halfway-fab left red pic"><img src="img/data/18301676_10212806910950616_5586717436909030551_n.jpg"></a>
                    </div>
                    <div class="card-content">
                        <br>
                        <p>Excelente inmobiliaria, muy buena atención y siempre atendiendo las necesidades de los inquilinos.</p>
                        <br>
                        <p align="right" class="comment-au">Ezequiel Chule Fernández</p>
                    </div>

                </div>
            </div>

            <div class="col s12 m4 l4 comment">
                <div class="card white">
                    <div class="card-image">
                        <a class="btn-floating halfway-fab left red pic"><img src="img/data/18301676_10212806910950616_5586717436909030551_n.jpg"></a>
                    </div>
                    <div class="card-content">
                        <br>
                        <p>Excelente inmobiliaria, muy buena atención y siempre atendiendo las necesidades de los inquilinos.</p>
                        <br>
                        <p align="right" class="comment-au">Ezequiel Chule Fernández</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row grand">
        <div class="col s12 color-row">
            <div class="col s10 offset-s1">
                <h4 class="white-text center">SÍGUENOS EN REDES SOCIALES</h4>
                <br><br>
                <div class="col s12 m4 l4">
                    <div class="col s12">
                        <center>
                            <i class="fab fa-facebook size-icon-2 center"></i>
                        </center>
                    </div>

                    <div class="col s12">
                        <h5 class="white-text center">Facebook</h5>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <div class="col s12">
                        <center>
                            <i class="fab fa-instagram size-icon-2 center"></i>
                        </center>
                    </div>

                    <div class="col s12">
                        <h5 class="white-text center">Instagram</h5>
                    </div>
                </div>

                <div class="col s12 m4 l4">
                    <div class="col s12">
                        <center>
                            <i class="fab fa-youtube size-icon-2 center"></i>
                        </center>
                    </div>

                    <div class="col s12">
                        <h5 class="white-text center">Youtube</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include "layaouts/footer.php"; ?>

</body>

</html>
