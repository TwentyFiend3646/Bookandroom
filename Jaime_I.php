<?php
require('conexion_PDO.php');
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Book&Room/es/Jaime I</title>
        <link rel="shortcut icon" href="./img/icons/logo.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <meta charset="UTF-8">
        <meta name="keywords" content="room,book,alquilar,habitacion,erasmus,reserva">
        <meta name="author" content="TwentyFiend">
        <meta name="robots" content="index">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="./css/piso.css">
        <link rel="stylesheet" href="./css/commonstyle.css">
        <script src="https://kit.fontawesome.com/8234d178e8.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>
    <body id="Element02">

        <header class="cabecera">

            <a href="javascript:void(0)" class="acceso__boton fas fa-bars" id="barritas" onclick="active()"></a>
            <ul id="acceso__rapido" style="opacity:0">
                <li class="acceso__list fas fa-magnifying-glass-location"><a class="lista_rapida" href="./busqueda">  ASISTENTE DE BÚSQUEDA</a></li>
                <li class="acceso__list fas fa-circle-question"><a class="lista_rapida" href="./inquilinos">  SOBRE NOSOTROS</a></li>
                <li class="acceso__list fas fa-address-book"><a class="lista_rapida" href="./propietarios">  CONTACTO PROPIETARIOS</a></li>
            </ul>
        
            <script>
                function active(){
                    let element=document.getElementById("acceso__rapido");
                    let valor= element.style.opacity;
                    switch (valor){
                        case '0':
                            document.getElementById("acceso__rapido").style.opacity="1";
                            document.getElementById("acceso__rapido").style.left="-4px";
                            document.getElementById("barritas").style.backgroundColor="#b48372"
                            break;
                        case '1':
                            document.getElementById("acceso__rapido").style.opacity="0";
                            document.getElementById("acceso__rapido").style.left="-800px";
                            document.getElementById("barritas").style.backgroundColor=""
                            break;
                    }
                }
            </script>
        
            <div class="nombre">
                <a href="./"><h1 class="title">BOOK&ROOM</h1></a>
                <p class="idioma">es</p>
            </div>
        
            <div class="header_icons">
                <a href="C:/Users/TWENTY/Desktop/JAVASCRIPT/MAIN_MENU.html"><img class="language" src="./img/icons/english_flag.ico"></img></a>
                <img class="logo" src="./img/pics/logo.png" alt="logo_principal"></img></a>
            </div>
        </header>

        <article>

            <div id="titulo_piso">Zona Rey Don Jaime I</div>

            <div id="bloque_fotos">

                <div class="apartados fade">
                    <div class="numbertext">1 / 10</div>
                    <img  class="imagen_portada" id="cocina_1" src="./img/pisos/10. Jaime 1/7.Cocina1.JPG" alt="cocina1.jpg">
                </div>

                <div class="apartados fade">
                    <div class="numbertext">2 / 10</div>
                    <img  class="imagen_portada" id="room_1" src="./img/pisos/10. Jaime 1/1.Habitacion1.1.JPG" alt="room1.jpg">
                </div>

                <div class="apartados fade">
                    <div class="numbertext">3 / 10</div>
                    <img  class="imagen_portada" id="room_2" src="./img/pisos/10. Jaime 1/1.Habitacion1.2.JPG" alt="room2.jpg">
                </div>
                <div class="apartados fade">
                    <div class="numbertext">4 / 10</div>
                    <img  class="imagen_portada" id="room_3" src="./img/pisos/10. Jaime 1/3.Habitacion3.1.JPG" alt="room3.jpg">
                </div>
                <div class="apartados fade">
                    <div class="numbertext">5 / 10</div>
                    <img  class="imagen_portada" id="baño_1" src="./img/pisos/10. Jaime 1/9.Baño1.JPG" alt="baño1.jpg">
                </div>
                <div class="apartados fade">
                    <div class="numbertext">6 / 10</div>
                    <img  class="imagen_portada" id="galeria_1" src="./img/pisos/10. Jaime 1/8.Galeria1.JPG" alt="galeria1.jpg">
                </div>
                <div class="apartados fade">
                    <div class="numbertext">7 / 10</div>
                    <img  class="imagen_portada" id="balcon_1" src="./img/pisos/10. Jaime 1/6.Balcon1.JPG" alt="balcon1.jpg">
                </div>
                <div class="apartados fade">
                    <div class="numbertext">8 / 10</div>
                    <img  class="imagen_portada" id="balcon_2" src="./img/pisos/10. Jaime 1/6.Balcon2.JPG" alt="balcon2.jpg">
                </div>
                <div class="apartados fade">
                    <div class="numbertext">9 / 10</div>
                    <img  class="imagen_portada" id="room_4" src="./img/pisos/10. Jaime 1/3.Habitacion3.2.JPG" alt="room4.jpg">
                </div>
                <div class="apartados fade">
                    <div class="numbertext">10 / 10</div>
                    <img  class="imagen_portada" id="room_5" src="./img/pisos/10. Jaime 1/5.Habitacion5.1.JPG" alt="room5.jpg">
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a> 

            </div>

            <br>
            <script>
                var slideIndex= 1;
                showSlides(slideIndex);

                function plusSlides(n){
                    showSlides(slideIndex += n);
                }
                function currentSlide(n){
                    showSlides(slideIndex= n);
                }
                function showSlides(n){
                    var i;
                    var slides= document.getElementsByClassName("apartados");
                    var puntos= document.getElementsByClassName("punto");
                    if(n>slides.length){slideIndex = 1}
                    if(n<1){slideIndex = slides.length}
                    for(i=0;i<slides.length;i++){
                        slides[i].style.display ="none";
                    }
                    for(i=0;i<puntos.length;i++){
                        puntos[i].className=puntos[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display ="block";
                    puntos[slideIndex-1].className += " active";
                }
            </script>

            <div id="titulo_habitaciones">Habitaciones:</div>
            </div>

            <div class="habitaciones_container">
                <div class="habitacion">
                    <div class="img_container">
                        <h4 class="name_room">Habitación 1</h4>
                        <a href="#room_1" onclick="currentSlide(2)"><img class="img_habitacion" src="./img/pisos/10. Jaime 1/1.Habitacion1.1.JPG" alt="room1.jpg"></a>
                    </div>
                    <div class="disponible_container">
                        <h3 class="titulo">Disponibilidad de la habitacion:</h3>
                        <div class="calendario">
                            <h4 class="titulo_año">2022</h4>
                            <ul class="año">
                                <li class=<?php relleno('r1_22_01','Jaime_I_calendario') ?>>Enero</li>
                                <li class=<?php relleno('r1_22_02','Jaime_I_calendario') ?>>Febrero</li>
                                <li class=<?php relleno('r1_22_03','Jaime_I_calendario') ?>>Marzo</li>
                                <li class=<?php relleno('r1_22_04','Jaime_I_calendario') ?>>Abril</li>
                                <li class=<?php relleno('r1_22_05','Jaime_I_calendario') ?>>Mayo</li>
                                <li class=<?php relleno('r1_22_06','Jaime_I_calendario') ?>>Junio</li>
                                <li class=<?php relleno('r1_22_07','Jaime_I_calendario') ?>>Julio</li>
                                <li class=<?php relleno('r1_22_08','Jaime_I_calendario') ?>>Agosto</li>
                                <li class=<?php relleno('r1_22_09','Jaime_I_calendario') ?>>Septiembre</li>
                                <li class=<?php relleno('r1_22_10','Jaime_I_calendario') ?>>Octubre</li>
                                <li class=<?php relleno('r1_22_11','Jaime_I_calendario') ?>>Noviembre</li>
                                <li class=<?php relleno('r1_22_12','Jaime_I_calendario') ?>>Diciembre</li>
                            </ul>
                        </div>
                        <div class="calendario">
                            <h4 class="titulo_año">2023</h4>
                            <ul class="año">
                                <li class=<?php relleno('r1_23_01','Jaime_I_calendario') ?>>Enero</li>
                                <li class=<?php relleno('r1_23_02','Jaime_I_calendario') ?>>Febrero</li>
                                <li class=<?php relleno('r1_23_03','Jaime_I_calendario') ?>>Marzo</li>
                                <li class=<?php relleno('r1_23_04','Jaime_I_calendario') ?>>Abril</li>
                                <li class=<?php relleno('r1_23_05','Jaime_I_calendario') ?>>Mayo</li>
                                <li class=<?php relleno('r1_23_06','Jaime_I_calendario') ?>>Junio</li>
                                <li class=<?php relleno('r1_23_07','Jaime_I_calendario') ?>>Julio</li>
                                <li class=<?php relleno('r1_23_08','Jaime_I_calendario') ?>>Agosto</li>
                                <li class=<?php relleno('r1_23_09','Jaime_I_calendario') ?>>Septiembre</li>
                                <li class=<?php relleno('r1_23_10','Jaime_I_calendario') ?>>Octubre</li>
                                <li class=<?php relleno('r1_23_11','Jaime_I_calendario') ?>>Noviembre</li>
                                <li class=<?php relleno('r1_23_12','Jaime_I_calendario') ?>>Diciembre</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tarifa_reserva_container">
                        <h3 class="tarifa">Precio mensual:<br><b class="price">340€*</b></h3>
                        <a href="#Seleccion01"><button class="open_button" id="Form_display" onclick="abrirFormulario('Jaime I room1')">ME INTERESA!</button></a>
                    </div>
                </div>
                <div class="habitacion">
                    <div class="img_container">
                        <h4 class="name_room">Habitación 2</h4>
                        <a href="#room_2" onclick="currentSlide(3)"><img class="img_habitacion" src="./img/pisos/10. Jaime 1/1.Habitacion1.2.JPG" alt="room2.jpg"></a>
                    </div>
                    <div class="disponible_container">
                        <h3 class="titulo">Disponibilidad de la habitacion:</h3>
                        <div class="calendario">
                            <h4 class="titulo_año">2022</h4>
                            <ul class="año">
                                <li class=<?php relleno('r2_22_01','Jaime_I_calendario') ?>>Enero</li>
                                <li class=<?php relleno('r2_22_02','Jaime_I_calendario') ?>>Febrero</li>
                                <li class=<?php relleno('r2_22_03','Jaime_I_calendario') ?>>Marzo</li>
                                <li class=<?php relleno('r2_22_04','Jaime_I_calendario') ?>>Abril</li>
                                <li class=<?php relleno('r2_22_05','Jaime_I_calendario') ?>>Mayo</li>
                                <li class=<?php relleno('r2_22_06','Jaime_I_calendario') ?>>Junio</li>
                                <li class=<?php relleno('r2_22_07','Jaime_I_calendario') ?>>Julio</li>
                                <li class=<?php relleno('r2_22_08','Jaime_I_calendario') ?>>Agosto</li>
                                <li class=<?php relleno('r2_22_09','Jaime_I_calendario') ?>>Septiembre</li>
                                <li class=<?php relleno('r2_22_10','Jaime_I_calendario') ?>>Octubre</li>
                                <li class=<?php relleno('r2_22_11','Jaime_I_calendario') ?>>Noviembre</li>
                                <li class=<?php relleno('r2_22_12','Jaime_I_calendario') ?>>Diciembre</li>
                            </ul>
                        </div>
                        <div class="calendario">
                            <h4 class="titulo_año">2023</h4>
                            <ul class="año">
                                <li class=<?php relleno('r2_23_01','Jaime_I_calendario') ?>>Enero</li>
                                <li class=<?php relleno('r2_23_02','Jaime_I_calendario') ?>>Febrero</li>
                                <li class=<?php relleno('r2_23_03','Jaime_I_calendario') ?>>Marzo</li>
                                <li class=<?php relleno('r2_23_04','Jaime_I_calendario') ?>>Abril</li>
                                <li class=<?php relleno('r2_23_05','Jaime_I_calendario') ?>>Mayo</li>
                                <li class=<?php relleno('r2_23_06','Jaime_I_calendario') ?>>Junio</li>
                                <li class=<?php relleno('r2_23_07','Jaime_I_calendario') ?>>Julio</li>
                                <li class=<?php relleno('r2_23_08','Jaime_I_calendario') ?>>Agosto</li>
                                <li class=<?php relleno('r2_23_09','Jaime_I_calendario') ?>>Septiembre</li>
                                <li class=<?php relleno('r2_23_10','Jaime_I_calendario') ?>>Octubre</li>
                                <li class=<?php relleno('r2_23_11','Jaime_I_calendario') ?>>Noviembre</li>
                                <li class=<?php relleno('r2_23_12','Jaime_I_calendario') ?>>Diciembre</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tarifa_reserva_container">
                        <h3 class="tarifa">Precio mensual:<br><b class="price">280€*</b></h3>
                        <a href="#Seleccion01"><button class="open_button" id="Form_display" onclick="abrirFormulario('Jaime I room2')">ME INTERESA!</button></a>
                    </div>
                </div>
                <div class="habitacion">
                    <div class="img_container">
                        <h4 class="name_room">Habitación 3</h4>
                        <a href="#room_3" onclick="currentSlide(4)"><img class="img_habitacion" src="./img/pisos/10. Jaime 1/3.Habitacion3.1.JPG" alt="room3.jpg"></a>
                    </div>
                    <div class="disponible_container">
                        <h3 class="titulo">Disponibilidad de la habitacion:</h3>
                        <div class="calendario">
                            <h4 class="titulo_año">2022</h4>
                            <ul class="año">
                                <li class=<?php relleno('r3_22_01','Jaime_I_calendario') ?>>Enero</li>
                                <li class=<?php relleno('r3_22_02','Jaime_I_calendario') ?>>Febrero</li>
                                <li class=<?php relleno('r3_22_03','Jaime_I_calendario') ?>>Marzo</li>
                                <li class=<?php relleno('r3_22_04','Jaime_I_calendario') ?>>Abril</li>
                                <li class=<?php relleno('r3_22_05','Jaime_I_calendario') ?>>Mayo</li>
                                <li class=<?php relleno('r3_22_06','Jaime_I_calendario') ?>>Junio</li>
                                <li class=<?php relleno('r3_22_07','Jaime_I_calendario') ?>>Julio</li>
                                <li class=<?php relleno('r3_22_08','Jaime_I_calendario') ?>>Agosto</li>
                                <li class=<?php relleno('r3_22_09','Jaime_I_calendario') ?>>Septiembre</li>
                                <li class=<?php relleno('r3_22_10','Jaime_I_calendario') ?>>Octubre</li>
                                <li class=<?php relleno('r3_22_11','Jaime_I_calendario') ?>>Noviembre</li>
                                <li class=<?php relleno('r3_22_12','Jaime_I_calendario') ?>>Diciembre</li>
                            </ul>
                        </div>
                        <div class="calendario">
                            <h4 class="titulo_año">2023</h4>
                            <ul class="año">
                                <li class=<?php relleno('r3_23_01','Jaime_I_calendario') ?>>Enero</li>
                                <li class=<?php relleno('r3_23_02','Jaime_I_calendario') ?>>Febrero</li>
                                <li class=<?php relleno('r3_23_03','Jaime_I_calendario') ?>>Marzo</li>
                                <li class=<?php relleno('r3_23_04','Jaime_I_calendario') ?>>Abril</li>
                                <li class=<?php relleno('r3_23_05','Jaime_I_calendario') ?>>Mayo</li>
                                <li class=<?php relleno('r3_23_06','Jaime_I_calendario') ?>>Junio</li>
                                <li class=<?php relleno('r3_23_07','Jaime_I_calendario') ?>>Julio</li>
                                <li class=<?php relleno('r3_23_08','Jaime_I_calendario') ?>>Agosto</li>
                                <li class=<?php relleno('r3_23_09','Jaime_I_calendario') ?>>Septiembre</li>
                                <li class=<?php relleno('r3_23_10','Jaime_I_calendario') ?>>Octubre</li>
                                <li class=<?php relleno('r3_23_11','Jaime_I_calendario') ?>>Noviembre</li>
                                <li class=<?php relleno('r3_23_12','Jaime_I_calendario') ?>>Diciembre</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tarifa_reserva_container">
                        <h3 class="tarifa">Precio mensual:<br><b class="price">275€*</b></h3>
                        <a href="#Seleccion01"><button class="open_button" id="Form_display" onclick="abrirFormulario('Jaime I room3')">ME INTERESA!</button></a>
                    </div>
                </div>
                <div class="habitacion">
                    <div class="img_container">
                        <h4 class="name_room">Habitación 4</h4>
                        <a href="#room_4" onclick="currentSlide(9)"><img class="img_habitacion" src="./img/pisos/10. Jaime 1/3.Habitacion3.2.JPG" alt="room4.jpg"></a>
                    </div>
                    <div class="disponible_container">
                        <h3 class="titulo">Disponibilidad de la habitacion:</h3>
                        <div class="calendario">
                            <h4 class="titulo_año">2022</h4>
                            <ul class="año">
                                <li class=<?php relleno('r4_22_01','Jaime_I_calendario') ?>>Enero</li>
                                <li class=<?php relleno('r4_22_02','Jaime_I_calendario') ?>>Febrero</li>
                                <li class=<?php relleno('r4_22_03','Jaime_I_calendario') ?>>Marzo</li>
                                <li class=<?php relleno('r4_22_04','Jaime_I_calendario') ?>>Abril</li>
                                <li class=<?php relleno('r4_22_05','Jaime_I_calendario') ?>>Mayo</li>
                                <li class=<?php relleno('r4_22_06','Jaime_I_calendario') ?>>Junio</li>
                                <li class=<?php relleno('r4_22_07','Jaime_I_calendario') ?>>Julio</li>
                                <li class=<?php relleno('r4_22_08','Jaime_I_calendario') ?>>Agosto</li>
                                <li class=<?php relleno('r4_22_09','Jaime_I_calendario') ?>>Septiembre</li>
                                <li class=<?php relleno('r4_22_10','Jaime_I_calendario') ?>>Octubre</li>
                                <li class=<?php relleno('r4_22_11','Jaime_I_calendario') ?>>Noviembre</li>
                                <li class=<?php relleno('r4_22_12','Jaime_I_calendario') ?>>Diciembre</li>
                            </ul>
                        </div>
                        <div class="calendario">
                            <h4 class="titulo_año">2023</h4>
                            <ul class="año">
                                <li class=<?php relleno('r4_23_01','Jaime_I_calendario') ?>>Enero</li>
                                <li class=<?php relleno('r4_23_02','Jaime_I_calendario') ?>>Febrero</li>
                                <li class=<?php relleno('r4_23_03','Jaime_I_calendario') ?>>Marzo</li>
                                <li class=<?php relleno('r4_23_04','Jaime_I_calendario') ?>>Abril</li>
                                <li class=<?php relleno('r4_23_05','Jaime_I_calendario') ?>>Mayo</li>
                                <li class=<?php relleno('r4_23_06','Jaime_I_calendario') ?>>Junio</li>
                                <li class=<?php relleno('r4_23_07','Jaime_I_calendario') ?>>Julio</li>
                                <li class=<?php relleno('r4_23_08','Jaime_I_calendario') ?>>Agosto</li>
                                <li class=<?php relleno('r4_23_09','Jaime_I_calendario') ?>>Septiembre</li>
                                <li class=<?php relleno('r4_23_10','Jaime_I_calendario') ?>>Octubre</li>
                                <li class=<?php relleno('r4_23_11','Jaime_I_calendario') ?>>Noviembre</li>
                                <li class=<?php relleno('r4_23_12','Jaime_I_calendario') ?>>Diciembre</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tarifa_reserva_container">
                        <h3 class="tarifa">Precio mensual:<br><b class="price">275€*</b></h3>
                        <a href="#Seleccion01"><button class="open_button" id="Form_display" onclick="abrirFormulario('Jaime I room4')">ME INTERESA!</button></a>
                    </div>
                </div>
                <div class="habitacion">
                    <div class="img_container">
                        <h4 class="name_room">Habitación 5</h4>
                        <a href="#room_5" onclick="currentSlide(10)"><img class="img_habitacion" src="./img/pisos/10. Jaime 1/5.Habitacion5.1.JPG" alt="room5.jpg"></a>
                    </div>
                    <div class="disponible_container">
                        <h3 class="titulo">Disponibilidad de la habitacion:</h3>
                        <div class="calendario">
                            <h4 class="titulo_año">2022</h4>
                            <ul class="año">
                                <li class=<?php relleno('r5_22_01','Jaime_I_calendario') ?>>Enero</li>
                                <li class=<?php relleno('r5_22_02','Jaime_I_calendario') ?>>Febrero</li>
                                <li class=<?php relleno('r5_22_03','Jaime_I_calendario') ?>>Marzo</li>
                                <li class=<?php relleno('r5_22_04','Jaime_I_calendario') ?>>Abril</li>
                                <li class=<?php relleno('r5_22_05','Jaime_I_calendario') ?>>Mayo</li>
                                <li class=<?php relleno('r5_22_06','Jaime_I_calendario') ?>>Junio</li>
                                <li class=<?php relleno('r5_22_07','Jaime_I_calendario') ?>>Julio</li>
                                <li class=<?php relleno('r5_22_08','Jaime_I_calendario') ?>>Agosto</li>
                                <li class=<?php relleno('r5_22_09','Jaime_I_calendario') ?>>Septiembre</li>
                                <li class=<?php relleno('r5_22_10','Jaime_I_calendario') ?>>Octubre</li>
                                <li class=<?php relleno('r5_22_11','Jaime_I_calendario') ?>>Noviembre</li>
                                <li class=<?php relleno('r5_22_12','Jaime_I_calendario') ?>>Diciembre</li>
                            </ul>
                        </div>
                        <div class="calendario">
                            <h4 class="titulo_año">2023</h4>
                            <ul class="año">
                                <li class=<?php relleno('r5_23_01','Jaime_I_calendario') ?>>Enero</li>
                                <li class=<?php relleno('r5_23_02','Jaime_I_calendario') ?>>Febrero</li>
                                <li class=<?php relleno('r5_23_03','Jaime_I_calendario') ?>>Marzo</li>
                                <li class=<?php relleno('r5_23_04','Jaime_I_calendario') ?>>Abril</li>
                                <li class=<?php relleno('r5_23_05','Jaime_I_calendario') ?>>Mayo</li>
                                <li class=<?php relleno('r5_23_06','Jaime_I_calendario') ?>>Junio</li>
                                <li class=<?php relleno('r5_23_07','Jaime_I_calendario') ?>>Julio</li>
                                <li class=<?php relleno('r5_23_08','Jaime_I_calendario') ?>>Agosto</li>
                                <li class=<?php relleno('r5_23_09','Jaime_I_calendario') ?>>Septiembre</li>
                                <li class=<?php relleno('r5_23_10','Jaime_I_calendario') ?>>Octubre</li>
                                <li class=<?php relleno('r5_23_11','Jaime_I_calendario') ?>>Noviembre</li>
                                <li class=<?php relleno('r5_23_12','Jaime_I_calendario') ?>>Diciembre</li>
                            </ul>
                        </div>
                    </div>
                    <div class="tarifa_reserva_container">
                        <h3 class="tarifa">Precio mensual:<br><b class="price">320€*</b></h3>
                        <a href="#Seleccion01"><button class="open_button" id="Form_display" onclick="abrirFormulario('Jaime I room5')">ME INTERESA!</button></a>
                    </div>
                </div>
            </div>
    

            <div class="formulario_contacto" id="Seleccion01">
    
                <div id="bloque_formulario">
                    <div class="form_popup" id="Formulario">
                        <form action="./correo.php" method="post" class="form_container">
                            <h3 id="Reserva">Reserva</h3>
                            <div class="form_element">
                                <label for="subject">Habitación</label>
                                <br>
                                <input type="text" readonly class="relleno" id="phabitacion" name="Habitacion" style="height: 32px; resize: none;font-size: 20px;"></textarea>
                            </div>
                            <div class="form_element">                
                                <label for="pnombre">Nombre</label>
                                <br>
                                <input type="text" class="relleno" id="pnombre" name="Nombre" placeholder="Tu nombre..." required>
                            </div>

                            <div class="form_element">
                                <label for="papellido">Primer apellido</label>
                                <br>
                                <input type="text" class="relleno" id="papellido" name="Primer_apellido" placeholder="Primer apellido..." required>
                            </div>

                            <div class="form_element">
                                <label for="sapellido">Segundo apellido</label>
                                <br>
                                <input type="text" class="relleno" id="sapellido" name="Segundo_apellido" placeholder="Segundo apellido...">
                            </div>

                            <div class="form_element">     
                                <label for="pais">Pais</label>
                                <select id="pais" name="pais">
                                    <option value="Italia">Italia</option>
                                    <option value="Francia">Francia</option>
                                    <option value="Alemania">Alemania</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="España">España</option>
                                    <option value="Grecia">Grecia</option>
                                    <option value="Reino_Unido">Reino Unido</option>
                                    <option selected disabled>Selecciona</option>
                                </select>
                            </div>

                            <div class="form_element">                
                                <label for="correo">Correo electrónico</label>
                                <br>
                                <input type="email" class="relleno" id="correo" name="Correo_electronico" placeholder="Tu correo..." required>
                            </div>

                            <div class="form_element">            
                                <label for="tlfn">Telefono</label>
                                <br>
                                <input type="tel" class="relleno" id="tlfn" name="Telefono" placeholder="123-456-789" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" required>
                            </div>

                            <div class="form_element">            
                                <label for="datemin">Incio de estancia</label>
                                <br>
                                <input type="date" class="relleno" id="datemin" name="datemin" required>
                            </div>

                            <div class="form_element">
                                <label for="datemax">Fin de estancia</label>
                                <br>
                                <input type="date" class="relleno" id="datemax" name="datemax" required>
                            </div>

                            <br>

                            <div class="form_buttons">
                                <input type="submit" name="enviar" class="boton_formulario" value="Solicita tu reserva" onclick="comparafecha()">
                                <input type="reset" class="boton_formulario" value="Reiniciar" style="display:none">
                                <button type="button" class="boton_formulario" class="btn cancel" onclick="closeForm()">Close</button>
                            </div>
    
                        </form>

                        <script>
                            
                            function abrirFormulario(room){
                                document.getElementById("phabitacion").value=room;
                                document.getElementById("Formulario").style.display="flex";
                                document.getElementById("Form_display").style.display="none";
                                document.getElementById("bloque_formulario").style.display="block";
                                document.getElementById("Element02").style.overflow="hidden";
                            }
                            function closeForm(){
                                document.getElementById("Formulario").style.display="none";
                                document.getElementById("Form_display").style.display="inline-block";
                                document.getElementById("bloque_formulario").style.display="none";
                                document.getElementById("Element02").style.overflow="auto";
                            }
                            function comparafecha(){
                                let fechainicial = document.getElementById("datemin").value;
                                let fechafinal = document.getElementById("datemax").value;
                                if(fechafinal.year < fechainicial.year || fechafinal.month < fechainicial.month || fechafinal.day < fechainicial.day){
                                    alert("La fecha final debe ser mayor a la fecha inicial");
                                    document.getElementById("datemin").reset();
                                }
                            }
                        </script>

                    </div>
                </div>

            </div>


        </article>

        <footer>
            <br>
            <p class="title_footer">BOOK&ROOM</p>
        
            <div class="bloques_footer_container">
                <div class="bloque_footer">
                    <br>
                    <hr class="hr_bloque">
                    <a class="acceso_footer" href="./inquilinos">Sobre Nosotros</a>
                    <a class="acceso_footer" href="./aviso_legal">Aviso Legal</a>
                    <a class="acceso_footer" href="./privacidad">Políticas de Privacidad</a>
                    <a class="acceso_footer" href="./cookies">Políticas de Cookies</a>
                    <div class="redes_footer">
                        <a class="redes fab fa-instagram" href="https://www.instagram.com/bookandroomsp" target="_BLANCK"></a>
                        <a class="redes fab fa-linkedin" href="https://www.linkedin.com/company/bookandroom" target="_BLANCK"></a>
                    </div>
                </div>
            
                <div class="bloque_footer">
                    <br>
                    <hr class="hr_bloque">
                    <div class="horario">
                        <h4 class="titulos_footer">Atención al cliente</h4>
                        <p class="texto_footer">De lunes a viernes de 9:00 a 14:00 y de 16:00 a 19:00</p>
                    </div>
                    <div class="ubicaciones">
                        <div class="ubicacion_container">
                            <h4 class="titulos_footer">Castellón:</h4>
                            <div class="contact_element">
                                <i class="acceso_contact_icon fas fa-phone"></i>
                                <a class="acceso_contact" href="tel:+34624600063" target="_blank">624 031 008</a>
                            </div>
                            <div class="contact_element">
                                <i class="acceso_contact_icon fas fa-envelope"></i>
                                <a class="acceso_contact" href="mailto:bookandroomcs@gmail.com?subject=Contacto%20propietario" method="post" enctype="text/plain" target="_blank">bookandroomcs@gmail.com</a>
                            </div>
                            <div class="contact_element">
                                <i class="acceso_contact_icon fab fa-whatsapp"></i>
                                <a class="acceso_contact" href="https://wa.me/624031008" target="_blank">Contacta por Whatsapp</a>
                            </div>
                        </div>
                        <br>
                        <div class="ubicacion_container">
                            <h4 class="titulos_footer">Valencia:</h4>
                            <div class="contact_element">
                                <i class="acceso_contact_icon fas fa-phone"></i>
                                <a class="acceso_contact" href="tel:+34624600063" target="_blank">624 600 063</a>
                            </div>
                            <div class="contact_element">
                                <i class="acceso_contact_icon fas fa-envelope"></i>
                                <a class="acceso_contact" href="mailto:bookandroomvlc@gmail.com?subject=Contacto%20propietario" method="post" enctype="text/plain" target="_blank">bookandroomvlc@gmail.com</a>
                            </div>
                            <div class="contact_element">
                                <i class="acceso_contact_icon fab fa-whatsapp"></i>
                                <a class="acceso_contact" href="https://wa.me/624600063" target="_blank">Contacta por Whatsapp</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <hr class="hr_footer">
            <br>
            <p class="propiedad fas fa-copyright">2022 Book&Room</p>
        </footer>

    </body>
</html>