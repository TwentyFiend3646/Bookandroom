

function pintarPisos(value){//Pintar todos los pisos de la lista
    fetch('./js/data.json')
        .then(response=>response.json())
        .then(data=>{
            procesarDatos(data,value);
        })
        .catch(error=>{
            console.error('Error al cargar el archivo JSON:', error);
        });
}

function procesarDatos(data,value){
    for(let datos of data){
        if(datos.id_ciudad===value){
            let nuevoContenido=`
            <div class="piso">
                <h3 class="name">Piso en zona ${datos.name}</h3>
                <div class="img_container">
                    <img class="img_piso" src="${datos.imagen}"alt="imagen.jpg">
                    <a class="acceso_piso" href="${datos.enlace}" target="_blank">Más info</a>
                </div>
    
                <ul class="descripcion">
                    <li class="list_element">${datos.caracteristicas[1]}</li>
                    <li class="list_element">${datos.caracteristicas[2]}</li>
                    <li class="list_element">${datos.caracteristicas[3]}</li>
                    <li class="list_element">${datos.caracteristicas[4]}</li>
                    <li class="list_element">${datos.caracteristicas[5]}</li>
                </ul>
                <h4 class="price">Precio habitaciones: desde ${datos.precio_min}€ hasta ${datos.precio_max}€</h4>
            </div>
            `
            document.getElementById(`${value}_list`).innerHTML+=nuevoContenido;
        }
    }
        
}

function pintarCiudades(){
    fetch('./js/ciudades.json')
        .then(response=>response.json())
        .then(data=>{
            mostrarCiudades(data),pintarListados(data); 
        })
        .catch(error=>{
            console.error('Error al cargar el archivo JSON:', error);
        });
}

function mostrarCiudades(data){
    for(let datos of data){
            let nuevoContenido=`
                <div class="ciudad">
                    <img class="img_seleccion" src="${datos.imagen}" alt="${datos.name}.jpg" width="400px" onclick="seleccion('${datos.id}'),pintarPisos('${datos.id}')">
                    <h3 class="name">${datos.name}</h3>
                </div>
            `
            document.getElementById("bloque_ciudades").innerHTML+=nuevoContenido;
    }
}

function pintarListados(data){ 
    for(let datos of data){
            let nuevoContenido=`
                <div class="listado" id="${datos.id}">
                    <h2 class="titulos">Pisos en ${datos.name}:</h2>
                    <div class="selector_container">
                        <p class="option" id="List_op_${datos.id}" onclick="switchmode('${datos.id}','a')">Lista</p>
                        <p class="option" id="Map_op_${datos.id}" onclick="switchmode('${datos.id}','b')">Mapa</p>
                    </div>
                    <div id="${datos.id}_map" class="map_pisos">
                        <div class="map_container">
                            <iframe src="${datos.mapa}" width="1000" height="1000"></iframe>
                        </div>
                    </div>
                    <div id="${datos.id}_list" class="pisos_container">   
                    </div>
                    <br>
                    <a class="return" href="#primera_seleccion" onclick="inicio('${datos.id}')">Volver</a>
                </div>
            `
            document.getElementById("listaCiudades").innerHTML+=nuevoContenido;
    }
}
