function clean() {
    let accept = confirm("Seguro que desea eliminar los elementos del carrito?");
    if(accept) {
        document.getElementById('clean').submit();
    }
}
