

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
        if(datos.ubicacion===value){
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
    console.log("Pintamos toda la casa");
    fetch('./js/ciudades.json')
        .then(response=>response.json())
        .then(data=>{
            mostrarCiudades(data);
        })
        .catch(error=>{
            console.error('Error al cargar el archivo JSON:', error);
        });
}

function mostrarCiudades(data){
    console.log(data);
    for(let datos of data){
            let nuevoContenido=`
                <div class="ciudad">
                    <img class="img_seleccion" src="${datos.imagen}" alt="${datos.name}.jpg" onclick="seleccion('${datos.id}'),pintarPisos('${datos.id}')">
                    <h3 class="name">${datos.name}</h3>
                </div>
            `
            document.getElementById("bloque_ciudades").innerHTML+=nuevoContenido;
    }
}


