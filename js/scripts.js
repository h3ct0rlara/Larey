
// Variables
const carrito = document.querySelector('#carrito');
const contenedorCarrito = document.querySelector ('#lista-carrito tbody');
const vaciaCarrito = document.querySelector('#vaciar-carrito');
const listaProductos = document.querySelector ('#productos');
let productosCarrito = [];



registrarEventListeners();
function registrarEventListeners() {
    listaProductos.addEventListener('click', agregarProducto);

}


//Funciones
function agregarProducto(e) {
    
    if(e.target.classList.contains('agregar-carrito')) {

        e.preventDefault();
        const productoSeleccionado = e.target.parentElement.parentElement;

        leeDatosProducto(productoSeleccionado);
    }
 
}

// Lee el contenido del HTML al que le dimos click y extrae la informacion
function leeDatosProducto(producto) {
    // console.log(producto);


    // Crear un opbjeto con el contenido del curso actual
    const infoProducto = {
        imagen: producto.querySelector('img').src,
        titulo: producto.querySelector('h3').textContent,
        precio: producto.querySelector('.precio').textContent,
        id: producto.getAttribute('data-id'),
        cantidad: 1
    }

    // Agrega elementos al carrito
    productosCarrito = [...productosCarrito, infoProducto];

    console.log(productosCarrito);

    carritoHTML();
}


//Muestra el carrito de compras en el HTML
function carritoHTML(){

    // Limpiar el HTML
    limpiarHTML();

    // Recorre el carrito y genera el HTML
    productosCarrito.forEach( producto => {

        console.log(producto);

        const row = document.createElement('tr');
        row.innerHTML = `

        <td class="margen">
            ${producto.titulo}
        </td>

        <td>
            ${producto.precio}
        </td>

        <td>
            ${producto.cantidad}
        </td>
        `;

        // Agrega el HTML del carrito el el tbody
        contenedorCarrito.appendChild(row);
    });
}


//Elimina los cursos del tbody
function limpiarHTML () {
    // Forma lenta de limpiar el HTML
    // contenedorCarrito.innerHTML = '';


    while(contenedorCarrito.firstChild){
        contenedorCarrito.removeChild(contenedorCarrito.firstChild);
    }
}