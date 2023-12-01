

function pintarInfo(){//Pintar la información de un piso
    fetch('../js/data.json')
        .then(response=>response.json())
        .then(data=>{
            var urlParams=new URLSearchParams(window.location.search);
            var value=urlParams.get('id');
            procesarDatos(data,value);
        })
        .catch(error=>{
            console.error('Error al cargar el archivo JSON:', error);
        });
}

function procesarDatos(data,value){//funcion para rellenar el contenido de la pagina correspondiente al piso
    for(let datos of data){
        if(datos.id===value){
            let nuevoContenido=`
            <div id="titulo_piso">Zona ${datos.name}</div>

            <div id="bloque_fotos">
            `;
            let añadir_fotos="";
            for(let i=1;i<=datos.numero_fotos;i++){
                añadir_fotos+=`
                    <div class="apartados fade" id="imagen${i}">
                        <div class="numbertext">${i} / ${datos.numero_fotos}</div>
                        <img  class="imagen_portada" src="../img/pisos/${datos.id_ciudad}/${datos.id}/${i}.webp" alt="${i}.webp">
                    </div>
                    `
            }
            añadir_fotos+=`
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
            `;
            nuevoContenido+=añadir_fotos;
            document.getElementById("contenido").innerHTML+=nuevoContenido;
            nuevoContenido=`
            <div id="titulo_habitaciones">Habitaciones:</div>
            </div>

            <div class="habitaciones_container">
            `;
            let habitaciones="";
            for(let i=1;i<=datos.numero_habitaciones;i++){
                habitaciones+=`
                    <div class="habitacion">
                        <div class="img_container">
                            <h4 class="name_room">Habitación ${i}</h4>
                            <img class="img_habitacion" src="../img/pisos/${datos.id_ciudad}/${datos.id}/habitaciones/${i}.webp" alt="room${i}">
                        </div>
                        <div class="tarifa_reserva_container">
                            <h3 class="tarifa">Precio mensual:<br><b class="price">${datos.precios[i]}€*</b></h3>
                            <a href="#Seleccion01"><button class="open_button" id="Form_display" onclick="abrirFormulario('${datos.id} room${i}')">ME INTERESA!</button></a>
                            <p class=asterisco style="font-style:italic;font-size:80%">*El precio de la habitación puede variar a lo largo de la estancia. Puedes consultar mas info contactando con nosotros.</p>
                        </div>
                    </div>
                    `
            }
            nuevoContenido+=habitaciones;
            nuevoContenido+=`
            </div>
            `;
            document.getElementById("contenido").innerHTML+=nuevoContenido;     
        }
    }
        
}


// APARTADO PARA DESLIZAR IMAGENES
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

// APARTADO PARA ACCEDER AL FORMULARIO
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